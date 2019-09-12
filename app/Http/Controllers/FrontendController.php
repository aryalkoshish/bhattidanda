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
    	$carousel=DB::table('carousels')->get()->take(2);
    	$glimpse=DB::table('albums')->get()->take(2);
    	$seo=DB::table('seos')->where('page','home')->get()->first();
    	return view('frontend.home.home',compact('carousel','glimpse','seo'));
    }
    public function fhom() {
    	$carousel=DB::table('carousels')->get()->take(2);
    	$glimpse=DB::table('albums')->get()->take(2);
    	$seo=DB::table('seos')->where('page','home')->get()->first();
    	return view('frontend.home.home',compact('carousel','glimpse','seo'));
    }
    public function about() {
    	$about = DB::table('abouts')->get()->first();
    	$seo = DB::table('seos')->where('page','about')->get()->first();
    	return view('frontend.about.know-about-phool-maya',compact('about','seo'));
	}

	public function booking($slug){
		$seo=DB::table('seos')->where('page','booking')->get()->first();
		return view('frontend.booking.booking',compact('slug','seo'));
	}

	public function contact(){
    	return view('frontend.contact.contact');
	}

	public function gallery(){
		$gallery=DB::table('albums')->get();
		$seo=DB::table('seos')->where('page','gallery')->get()->first();
		return view('frontend.gallery.gallery',compact('gallery','seo'));
	}

	public function room() {
    	return view('frontend.room.room');
	}

	public function package(){
		$package =DB::table('packages')->where('status','active')->get();
		$seo=DB::table('seos')->where('page','package')->get()->first();
		return view('frontend.package.package',compact('package','seo'));
	}

	public function service(){
		$service = DB::table('services')->where('status','active')->get();
		$seo=DB::table('seos')->where('page','service')->get()->first();
		return view('frontend.service.ourservice',compact('service','seo'));
	}

	public function album($id){
		$album=DB::table('images')->where('albumid',$id)->get();
		return view('frontend.gallery.album1',compact('album'));
	}

	public function whyus(){
		return view('frontend.whyus.whyus');
	}

	public function guestreviews(){
		$review = DB::table('reviews')->where('status','active')->orderBy('id','desc')->get()->take(2);
		$seo=DB::table('seos')->where('page','reivew')->get()->first();
		return view('frontend.guestreviews.guestreviews',compact('review','seo'));
	}
}
