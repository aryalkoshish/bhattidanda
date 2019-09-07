<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;
use DB;

class CarouselController extends Controller
{
   public function create(){
    return view('cd-admin.home.add-carousel');
}
public function view(){
   $carousel = DB::table('carousels')->get();
   return view('cd-admin.home.view-carousel',compact('carousel'));
}

public function remove($id)
{
    $test = DB::table('carousels')->where('id',$id)->get()->first();
    if (file_exists('public/upload/carousel/'.$test->image)) 
    {
        unlink('public/upload/carousel/'.$test->image);
    }
    DB::table('carousels')->where('id',$id)->delete();
    return redirect()->to('/carousels');
}

public function store(){
   $carousel =new Carousel;
   $request=Request()->all();
   $form = Request()->validate([
      'image'=> 'required|mimes:JPEG,JPG,jpeg,jpg,PNG,png',
      'altimage'=>'required|regex:/(^([a-zA-Z0-9.!@#$%&*_+]+)(\d+)?$)/u',
      'description' => 'required|regex:/(^([a-zA-Z0-9.!@#$%&*_+]+)(\d+)?$)/u',
      'status'=>'required',
  ]);

   $carousel['altimage'] = $request['altimage'];
   $carousel['description'] = $request['description'];
   if(isset($request['image'])){
      $file = $request['image'];
      $filename = time().$file->getClientOriginalName();
      $destinationpath=public_path('upload/carousel');
      $file->move($destinationpath,$filename);	
  }
  $carousel['image']= $filename;
  $carousel['status'] =$request['status'];
  $carousel->save();
        //dd($carousel);
  return redirect()->to('/carousels');

}
public function update($id){
    $request = Request()->all();
    $form = Request()->validate([
        'image'=> 'file|image',
        'altimage'=>'required',
        'description' => 'required',
        'status'=>'required',
    ]);
    $carousel=Carousel::find($id);
    $carousel['altimage'] = $request['altimage'];
    $carousel['description'] = $request['description'];

    if(isset($request['image']))
    {
        $file = $request['image'];    
        $fileName = time().$file->getClientOriginalName();
        $destinationPath = public_path('upload/carousel');
        $file->move($destinationPath,$fileName);  
        $carousel->image = $fileName;
    }
    $carousel->save();
    return redirect()->back();
}
public function stat($id){

    $a=[];
    $request=DB::table('carousels')->where('id',$id)->get()->first();
    if($request->status=='active'){

        $a['status'] = 'inactive';
    }
    else
    {
        $a['status']='active';
    }
    DB::table('carousels')->where('id',$id)->update($a);
    return redirect()->to('/carousels');
}


    // public function imagevalidation(){
    //     $request=Request()->all();
    //     $form = Request()->validate([
    //         'image'=> 'required|mimes:JPEG,JPG,jpeg,jpg,PNG,png',
    //         'altimage'=>'required',
    //         'description' => 'required',
    //         'status'=>'required',
    //     ]);
    //     return ($form);

    // }
}
