<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\imagetrait;
use DB;
use App\About;

class AboutController extends Controller
{
	use imagetrait;

    public function showabout(){
        $about = DB::table('abouts')->get()->first();
        return view('cd-admin/home/edit-about',compact('about'));
    }

    public function viewabout(){
        
        return view('cd-admin.home.addabout');
    }

    public function insertabout(){
    	$request = Request()->all();

         // dd($request);
        $req=Request()->validate([
            'name' => 'required|max:255',
            'altimage' => 'required|max:255',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,JPEG,JPG,PNG',
            
            
            'pdffile' => 'mimes:pdf',
            'videolink' => 'required',
            'tagline' => 'required',
        ]);
        
        
        $about = new About;
        $about['name'] = $request['name'];
        $about['tagline']=$request['tagline'];
        $about['description']=$request['description'];
        $about['altimage']=$request['altimage'];

        $img=$this->getimage($request['image']);
        $about['image']=$img;

        $pfile=$this->getfile($request['pdffile']);
        $about['pdf_file']= $pfile;

        $about['video_link']=$request['videolink'];
        

        $about->save();
        return redirect()->back();
    }
}
