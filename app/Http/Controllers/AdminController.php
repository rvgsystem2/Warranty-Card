<?php

namespace App\Http\Controllers;

use App\Models\Complain;
use App\Models\Feedback;
use App\Models\UserRegister;
use App\Models\WarentyCard;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function dashbord(){
      $complain = Complain::count();
      $todaycomplain = Complain::whereDate('created_at',Carbon::today())->count();
     $warentycard = WarentyCard::count();
     $todaywarenty = WarentyCard::whereDate('created_at',Carbon::today())->count();
     $inquiry = UserRegister::count();
     $todayinquiry = UserRegister::whereDate('created_at',Carbon::today())->count();
     $feedback = Feedback::count();
     $todayfeedback = Feedback::whereDate('created_at',Carbon::today())->count();
    return view('backend.index',compact('complain','todaycomplain','warentycard','todaywarenty','inquiry','todayinquiry','feedback','todayfeedback'));
   }
}
