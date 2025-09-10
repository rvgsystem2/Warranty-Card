<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Mail\AdminUserRegisterMail;
use App\Mail\UserRegisterMail;
use App\Models\UserRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserRegisterController extends Controller
{

  public function index(Request $request){

    $search = $request->input('search');

      $userregister = UserRegister::where('name','like',"%{$search}%")
      ->orwhere('email','like' ,"%{$search}%")
      ->orwhere('mobile','like',"%{$search}%")->orderBy('id','desc')->paginate(10); 


    // $userregister = UserRegister::orderBy('id','desc')->paginate(10); 
    
    
    return view('backend.userregister',compact('userregister'));
  }
//--------------------- INSERT USERE-REGISTER QUERY -------------//

  public function store(UserRegisterRequest $request){
      // dd($request);
     $userregisterData = UserRegister::create($request->all());

     if($userregisterData){
        Mail::to('vishalsharmagajrahi@gmail.com')->send(new AdminUserRegisterMail($userregisterData));
        Mail::to($request->email)->send(new UserRegisterMail($userregisterData));
     }



    return redirect()->back()->with('success','Your inquiry form has been successfully submitted...!');
  }

  //----------------- DELETE USER-REGISTER QUERY ------------//
  public function delete(string $id){
    $userregister = UserRegister::find($id);
    $userregister->delete();
    return redirect()->route('userregister.index')->with('succes','Item deleted Successfully...!');
  }
 //----------------- SHOW USER-REGISTER QUERY ------------//
  public function show(string $id){

    $userregister = UserRegister::find($id);
    return view('backend.showuser',compact('userregister'));

  }


}
