<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\WarntyMail;
use App\Mail\WarrantyApprovedMail;
use App\Mail\WarrantyRejectedMail;
use App\Models\WarentyCard;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Header\MailboxListHeader;

class WarentyCardController extends Controller
{
   public function index(Request $request)
{
    $search = $request->input('search');

    $warrentydata = WarentyCard::query();

    if (!empty($search)) {
        $warrentydata->where(function ($query) use ($search) {
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->orWhere('city', 'like', "%{$search}%")
                ->orWhere('phone', 'like', "%{$search}%")
                ->orWhere('state', 'like', "%{$search}%")
                ->orWhere('product_sl_no', 'like', "%{$search}%")
                ->orWhere('warenty_card_no', 'like', "%{$search}%")
                ->orWhere('status', 'like', "%{$search}%");
        });
    }

    $warentycard = $warrentydata->orderBy('id', 'desc')->paginate(10)->withQueryString();

    return view('backend.warentycard', compact('warentycard'));
}




    public function approve(Request $request, $id)
{
    $warranty = WarentyCard::findOrFail($id);

    if ($warranty->status === 'approved') {
        return back()->with('success', 'This warranty is already approved.');
    }

    $warranty->update([
        'status'       => 'approved',
        'admin_remark' => $request->remark,
        'reviewed_at'  => now(),
    ]);

    Mail::to($warranty->email)->send(new WarrantyApprovedMail($warranty));

    return back()->with('success', 'Warranty approved successfully and approval email sent to user.');
}

public function reject(Request $request, $id)
{
    $request->validate([
        'reason_option'  => 'nullable|string|max:255',
        'custom_remark'  => 'nullable|string|max:1000',
    ]);

    $warranty = WarentyCard::findOrFail($id);

    if ($warranty->status === 'disapproved') {
        return back()->with('success', 'This warranty is already disapproved.');
    }

    $finalRemark = $request->custom_remark ?: $request->reason_option;

    if (!$finalRemark) {
        return back()->with('error', 'Please select a reject reason or write a custom reason.');
    }

    $warranty->update([
        'status'       => 'disapproved',
        'admin_remark' => $finalRemark,
        'reviewed_at'  => now(),
    ]);

    Mail::to($warranty->email)->send(new WarrantyRejectedMail($warranty));

    return back()->with('success', 'Warranty disapproved successfully and rejection email sent to user.');
}



    //-------------- INSERT WERENTY-CARD QUERY -------------//

    public function store(Request $request)
{
    $request->validate([
        'name'          => 'required|string|max:255',
        'email'         => 'required|email|max:255',
        'phone'         => ['required', 'regex:/^(\+91)?[6-9]\d{9}$/'],
        'terms'         => 'required',
        'city'          => 'required|string|min:3|max:255',
        'state'         => 'required|string|min:3|max:255',
        'productsln'    => 'required|string|max:255',
        'purchaseform'  => 'required|string|min:3|max:255',
        'purchase_date' => 'required|date',
        'document'      => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:5120',
    ], [
        'phone.regex'      => 'Please enter a valid Indian mobile number.',
        'terms.required'   => 'Please accept terms and conditions.',
        'document.mimes'   => 'Only JPG, JPEG, PNG and PDF files are allowed.',
        'document.max'     => 'File size must not exceed 5MB.',
    ]);

    try {
        $documentPath = null;

        if ($request->hasFile('document')) {
            $documentPath = $request->file('document')->store('warranty-documents', 'public');
        }

        $warentycardData = WarentyCard::create([
            'name'             => $request->name,
            'email'            => $request->email,
            'phone'            => $request->phone,
            'city'             => $request->city,
            'state'            => $request->state,
            'product_sl_no'    => $request->productsln,
            'purchase_form'    => $request->purchaseform,
            'document'         => $documentPath,
            'status'           => 'pending',
            'warenty_card_no'  => strtoupper(\Str::random(10)),
            'purchase_date'    => $request->purchase_date,
            'expaire_date'     => \Carbon\Carbon::parse($request->purchase_date)->addMonths(12),
        ]);

        Mail::to('gaurav6844gupta@gmail.com')->send(new AdminMail($warentycardData));
        Mail::to($request->email)->send(new WarntyMail($warentycardData));

        return back()->with('success', 'Warranty registration completed successfully. Your request is pending for admin verification.');
    } catch (\Exception $e) {
        dd($e->getMessage());
    }
}

    //-------------------  DELETE WARENTY-CARD QUERY ---------------//
    public function delete(string $id){
        $warentycard = WarentyCard::find($id);
        $warentycard->delete();

        return redirect()->route('warentycard.index')->with('succes','Item deleted SuccessFully...!');
    }


    public function show(string $id){
        $show = WarentyCard::find($id);
        return view('backend.show',compact('show'));
    }

}
