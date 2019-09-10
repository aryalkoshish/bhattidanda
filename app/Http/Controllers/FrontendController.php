<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\review;
use App\about;
use App\carousel;
use App\album;

class FrontendController extends Controller
{
    public function fhome(){
    	$carousel=DB::table('carousels')->get()->first();
    	$glimpse=DB::table('albums')->get()->take(2);
    	return view('frontend.home.home',compact('carousel','glimpse'));
    }
    public function fhom() {
    	$carousel=DB::table('carousels')->orderBy('id','desc')->get();
    	$glimpse=DB::table('albums')->first();
    	return view('frontend.home.home',compact('carousel','glimpse'));
    }
    public function about() {
    	$about = DB::table('abouts')->get()->first();
    	return view('frontend.about.know-about-phool-maya',compact('about'));
	}

	public function booking($slug){
		return view('frontend.booking.booking',compact('slug'));
	}

	public function contact(){
    	return view('frontend.contact.contact');
	}

	public function gallery(){
		$gallery=DB::table('albums')->get();
		return view('frontend.gallery.gallery',compact('gallery'));
	}

	public function room() {
    	return view('frontend.room.room');
	}

	public function package(){
		$package =DB::table('packages')->get();
		return view('frontend.package.package',compact('package'));
	}

	public function service(){
		$service = DB::table('services')->get();
		return view('frontend.service.ourservice',compact('service'));
	}

	public function album($id){
		$album=DB::table('images')->where('albumid',$id)->get();
		return view('frontend.gallery.album1',compact('album'));
	}

	public function whyus(){
		return view('frontend.whyus.whyus');
	}

	public function guestreviews(){
		$review = DB::table('reviews')->orderBy('id','desc')->get()->take(2);
		return view('frontend.guestreviews.guestreviews',compact('review'));
	}
}
