<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;


use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    public function changepassword(){
        return view('backend.changepassword');
    }

    public function store( Request $request){
        // dd($request->all());
        $request->validate([
            'oldpassword' => 'required',
            'newpassword' => ['required','same:newconfirmpassword',Password::min(8)->mixedCase()->numbers()->symbols()->letters(),],
            'newconfirmpassword' => 'required',
        ]);

       $user = User::find(auth()->user()->id);
        if($user && Hash::check($request->oldpassword, $user->password )){
            $user->password = Hash::make($request->newpassword);
            $user->save();
     
            return redirect()->back()->with('success' ,'Password Change SuccessFully !');
        }else{
            return redirect()->back()->with('error' ,'Old password does not Match...! !');
        }
    }
}
