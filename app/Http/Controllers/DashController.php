<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\mail;
use App\Mail\quickreply;
use Carbon\Carbon;
use DB;

class DashController extends Controller
{

    public function quickreply(){
    	$data = $this->val();
		$a = [];
		$a['created_at'] =Carbon::now('Asia/Kathmandu');
		$merge = array_merge($data,$a);

		DB::table('quickreplies')->insert($merge);
		Mail::to($data['email'])->send(new quickreply($data));
		return redirect()->to('/');
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

    public function homeview(){
		$qreply = DB::table('quickreplies')->orderBy('id','desc')->get()->take(5);
		$pack = DB::table('packages')->get();
		$package = count($pack);
		$book = DB::table('bookings')->get();
		$booking = count($book);
		$rep = DB::table('bookingstatuses')->get();
		$reply = count($rep);    	

    	$count = 0;
    	$acc = 0;
    	$rej = 0;

    	foreach($book as $b){
    	$re = DB::table('bookingstatuses')->where('bookingid',$b->id)->get();
    	foreach($re as $r){
    		
    		if($r->bookingid==$b->id)
    		{	if($r->status=='Accepted'){

    			         $acc++;


    		      }else{

    			     $rej++;

    		      }
    		}
    		

   			}

    		$count++;
    		$a = $count;
    		$accept = $acc;
    		$rejected = $rej;
    		$booking = $a-$accept-$rejected;    	
    }				
		return view('cd-admin.home.home',compact('qreply','package','booking','reply','accept','rejected') );
	}

	public function quickreplies(){
		$view = DB::table('quickreplies')->get();
		return view('cd-admin.home.dashboard.quickmailview',compact('view'));
	}
}
