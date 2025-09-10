<?php

namespace App\Http\Controllers;

use App\Mail\AdminComplainMail;
use App\Mail\UserComplainMail;
use App\Models\Complain;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ComplainController extends Controller
{
    public function index(Request $request){
        $search = $request->input('search');

        $complain = Complain::where('name' ,'like',"%{$search}%")
        ->orwhere('email','like', "%{$search}%")->
        orwhere('mobile','like',"%{$search}%")->orderBy('id','desc')->paginate(10);

        return view('backend.complain',compact('complain'));
    
    
        // $complain = Complain::orderBy('id','desc')->paginate(10);
       
    }

    //---------------- COMPLAIN INSERT QUERY ------------//

    public function store(Request $request){

        $request->validate([
            'name' =>'required|string',
            'email' =>'required|email',
            'mobile' =>['required', 'regex:/^(\+91)?[6-9]\d{9}$/'],
            'complain_m' =>'required|min:5',
            'warentycard_n' =>'required|alpha_num|unique:complains,warenty_card_no',          
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('image','public');

      $complainData =  Complain::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'mobile'=> $request->mobile,
            'complain_message'=> $request->complain_m,
            'warenty_card_no'=> $request->warentycard_n,
            'image'=> $imagePath,
        ]);

        if($complainData){
            Mail::to('vishalsharmagajrahi@gmail.com')->send(new AdminComplainMail($complainData));
            Mail::to($request->email)->send(new UserComplainMail($complainData));
        }
        return redirect()->back()->with('success','Your complaint has been successfully submitted....!');
    }

    //----------------- COMPLAIN DELETED QUERY ----------------//
    public function delete(string $id){
        $complain = Complain::find($id);
        $complain->delete();
        return redirect()->route('complain.index')->with('succes','Item deleted SuccessFully...!');
    }
}

