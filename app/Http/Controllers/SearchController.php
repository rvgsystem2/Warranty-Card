<?php

namespace App\Http\Controllers;

use App\Models\WarentyCard;
use Illuminate\Http\Request;
class SearchController extends Controller
{
   // public function search(Request $request){
   //    // dd($request->all());
      
   //    // dd($warenty);
   //  $search = $request->input('search');
   //  $warenty = WarentyCard::query();
   //  if(!empty($search)){
   //      $warenty->where('warenty_card_no', 'like', "{%$search%}");

   //      $warenty = WarentyCard::find($request->input('id'));
   //    // $warenty = WarentyCard::all();
   //    // dd($warenty);
   //   return view('backend.search',compact('warenty'));

   //  }
   
   // }

   public function search(Request $request) {
      $search = $request->input('search');
      $warenty = WarentyCard::where('warenty_card_no', $search)->first();
  
      if ($warenty) {
          return view('frontend.search', compact('warenty')); 
      } else {
          return redirect()->back()->with('error', 'Warranty Card Not Found!');
      }
  }
  
  

}
