<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\mail;
use App\Mail\quickreply;
use Carbon\Carbon;
use DB;
use Auth;

class DashController extends Controller
{

    public function quickreply(){
    	$data = $this->val();
      $a = [];
      $a['created_at'] =Carbon::now('Asia/Kathmandu');
      $merge = array_merge($data,$a);

      DB::table('quickreplies')->insert($merge);
      Mail::to($data['email'])->send(new quickreply($data));
      return redirect()->to('/homeview')->with('success','Mail send');
  }

  public function val(){
   $request = Request()->all();
   $be=Request()->validate([    		
      'email' => 'required|email',
      'subject' => 'required',
      'message' => 'required'    		
  ]);

   return ($be);
}

public function homeview()
{
  $qreply = DB::table('quickreplies')->orderBy('id','desc')->get()->take(5);

  $pack = DB::table('packages')->get();
  $package = count($pack);

  $book = DB::table('bookings')->get();
           	

      $reply = DB::table('bookingstatuses')->get();
      $count = 0;
      $acc = 0;
      $rej = 0;
      foreach($book as $b){
      $reply = DB::table('bookingstatuses')->where('bookingid',$b->id)->get();
      foreach($reply as $r){
        if($r->booking_id==$b->id)
        { if($r->bstatus=='0'){
                   $rej++;
              }else{
               $acc++;
              }
        }
        else
        {
              
         }
        }
        $count++;
        $a = $count;
        $accepted = $acc;
        $rejected = $rej;
        $booking = $a-$accepted-$rejected;      
    }
    if($count == '0'){
        $booking = $count;
        $rejected = $rej;
        $accepted = $acc;
    }
  

 return view('cd-admin.home.homeview',compact('qreply','package','booking','accepted','rejected') );

}

public function quickreplies(){
  $view = DB::table('quickreplies')->get();
  return view('cd-admin.home.dashboard.quickmailview',compact('view'));
}

public function logout(){
    Auth::logout();
    return redirect()->back();
}

public function replyview($id){
    $view = DB::table('quickreplies')->where('id',$id)->get()->first();
    return view('cd-admin.home.dashboard.showquickreply',compact('view'));
}
}
