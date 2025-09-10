<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\WarntyMail;
use App\Models\WarentyCard;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Header\MailboxListHeader;

class WarentyCardController extends Controller
{
    public function index(Request $request) {
        $search = $request->input('search'); 
        $warrentydata = WarentyCard::query(); 
        // dd($warrentydata);
    
        if (!empty($search)) { 
            $warrentydata->where('name', 'like', "%{$search}%")
            ->orwhere('email', 'like', "%{$search}%")
            ->orwhere('city','like',"%{$search}%")
            ->orwhere('phone','like',"%{$search}%"); 
        
        }

        $warentycard = $warrentydata->orderBy('id', 'desc')->paginate(10); 
    
        return view('backend.warentycard', compact('warentycard')); 
    
    }
    //-------------- INSERT WERENTY-CARD QUERY -------------//

    public function store(Request $request){
         $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' =>['required', 'regex:/^(\+91)?[6-9]\d{9}$/'],
            'terms' => 'required',
            'city' => 'required|min:3|max:255',
            'state' => 'required|min:3|max:255',
            'productsln' => 'required|integer',
            'purchaseform' => 'required|min:3|max:255',
            'purchase_date' => 'required',
            // 'expaired' => 'required',
        ]);
        // dd($request->all());
        $warentycardData  =  WarentyCard::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'city' => $request->city,
            'state' => $request->state,
            'product_sl_no' => $request->productsln,
            'purchase_form' => $request->purchaseform,
            'status' => 'pending',
           'warenty_card_no' => Str::random(10),
            'purchase_date' =>$request->purchase_date,
            'expaire_date' =>Carbon::parse($request->purchase_date)->addMonth(12),
        ]);
        if ($warentycardData) {
              Mail::to('vishalsharmagajrahi@gmail.com')->send(new AdminMail($warentycardData));
                Mail::to($request->email)->send(new WarntyMail($warentycardData));
        }
        // return redirect()->route('varranty')->with('succes','Item Add SuccessFully...!');
        return redirect()->back()->with('success','Warranty registration completed successfully...!');
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
