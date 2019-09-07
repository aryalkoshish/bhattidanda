<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;	
use Carbon\Carbon;
use Illuminate\support\facades\mail;
use App\Mail\bookingreply;
use App\Mail\status;
use App\bookingstatus;
use App\booking;
use App\Mail\reject;


class BookingController extends Controller
{
    public function bookingform($slug){

    	$bok = DB::table('packages')->where('slug',$slug)->get()->first();
    	return view('cd-admin.home.booking.booking-form',compact('bok'));
    }

    public function bookingstore(){
    	$r = $this->valid();

    	DB::table('bookings')->insert($r);
    	return redirect()->to('/bookings');
    }

    public function bookingview(){
    	$sa = DB::table('bookings')->get();
    	
    	return view('cd-admin.home.booking.bookings',compact('sa'));
    }

    public function showbooking($id){
    	$vi = DB::table('bookings')->where('id',$id)->get()->first();
    	
    	return view('cd-admin.home.booking.view-booking',compact('vi'));
    }



    public function composebooking($id){
    	$d = DB::table('bookings')->where('id',$id)->get()->first();

    	return view('cd-admin.home.booking.composebooking',compact('d'));
    }

    public function bookingreply(){
		$data = $this->valreply();
		
		Mail::to($data['email'])->send(new bookingreply($data));
		$a = [];
		$a['created_at'] =Carbon::now('Asia/Kathmandu');
		$merge = array_merge($data,$a);

		DB::table('bookingreplies')->insert($merge);
		return redirect()->to('replies');
	}



    public function bookingreplied(){
    	$data = DB::table('bookingreplies')->get()->all();
    	return view('cd-admin.home.booking.bookingreplied',compact('data')); 
    }

    public function acceptreply(){
    	$request= Request()->all();

    	$as = new bookingstatus;

    	$as->bookingid = $request['id'];
    	$as->email=$request['email'];
    	$as->reply=$request['action'];
    	$as->status=$request['status'];
    	
    	Mail::to($as->email)->send(new status($as));
    	$as->save();
    	return redirect()->to('/booked');
    }

      public function rejectreply(){
    	$request= Request()->all();

    	$as = new bookingstatus;

    	$as->bookingid = $request['id'];
    	$as->email=$request['email'];
    	$as->reply=$request['action'];
    	$as->status=$request['status'];
    	
    	Mail::to($as->email)->send(new reject($as));
    	$as->save();
    	return redirect()->to('/booked');

    }

    public function viewstatus(){
    	$re = DB::table('bookingstatuses')->get()->all();
    	return view('cd-admin.home.booking.bookedview',compact('re'));
    }

    public function valid(){
    	$request = Request()->all();
    	$b=Request()->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'gender' => 'required',
    		'slug' => 'required',
    		'age' => 'nullable',
    		'location' => 'nullable',
    		'message' => 'required',
    		'contact' =>'required',
    	]);
    	return ($b);
    }
    	 public function valreply(){
    	$request = Request()->all();
    	$be=Request()->validate([    		
    		'email' => 'required|email',
    		'subject' => 'required',
    		'message' => 'required',
    		'action' => 'required',
    		'bookingid' => 'required',
    	]);

    	return ($be);
    }

  
}
