<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\mail;
use App\mailbox;
use App\emailform;
use DB;
use Carbon\Carbon;


class MailController extends Controller
{
	

	public function composemail($id){
		$deo= DB::table('emailforms')->where('id',$id)->get()->first();

		return view('cd-admin.home.email.compose',compact('deo'));
	}

	public function store(){
		$data=Request()->validate([
			'to' => 'required',
			'subject' => 'required',
			'message'=>'nullable',

		]);	
		Mail::to($data['to'])->send(new mailbox($data));
		$a = [];
		$a['created_at'] =Carbon::now('Asia/Kathmandu');
		$merge = array_merge($data,$a);

		DB::table('mailboxes')->insert($merge);
		return redirect()->to('/mailbox');
	}

	public function  mailform(){
		return view('cd-admin.home.email.emailform');
	}

	public function mailstore(){
		$dat=Request()->validate([
			'name' => 'required',
			'address' => 'required|email',
			'message' => 'nullable',
		]);
		$a = [];
		$a['created_at'] =Carbon::now('Asia/Kathmandu');
		$merge = array_merge($dat,$a);
		DB::table('emailforms')->insert($merge);
		return redirect()->to('/mailbox');
	}

	public function showmailbox(){
		$mails=DB::table('emailforms')->get();
		return view('cd-admin.home.email.mailbox',compact('mails'));
	}



	public function delmail($id){
		
		$mail=emailform::find($id);

		$mail->delete();
		return redirect()->to('/mailbox');
	}

	public function viewmail($id){
		$view=emailform::find($id);

		return view('cd-admin.home.email.viewmail',compact('view'));
	}


}
