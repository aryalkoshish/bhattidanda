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

        $about['video_link']=$request['video_link'];
        

        $about->save();
        return redirect()->back();
    }

    public function upda($id)

    {      
      $req = Request()->all();

      $de =About::where('id',$id)->get()->first();  

      $de->name = $req['name'];
      $de->tagline = $req['tagline'];
      $de->description = $req['description'];  
      $de->video_link = $req['video_link'];      
    if (isset($req['image']))
    {
      $file=$req->image;     
      $filename = time().$file->getClientOriginalName();
      $dest=public_path('upload/package');
      $file->move($dest,$filename);
      $de->image = $filename;
    }


      if(isset($req['pdffile'])){
         $file = $req['pdffile'];
         $filename1 = time().$file->getClientOriginalName();
         $dest = 'fileupload';
         $file->move($dest,$filename1);
         $de->pdf_file = $filename1;
         
      }
    $de->save();
    
    return redirect()->to('/about/')->with('success','Edited Successfully');

    }
}
