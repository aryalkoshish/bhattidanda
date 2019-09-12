<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use DB;
use App\seo;

use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function createpackageseo(){
    	return view ('cd-admin.home.SEO.packageseo');
    }
    public function viewpackage(){
    	$data=DB::table('seos')->get();
    	return view('cd-admin.home.SEO.viewpackage', compact('data') );
    }

    public function insertseo(){
    	$data = $this->val();
    	$a = [];
		$a['created_at'] =Carbon::now('Asia/Kathmandu');
		$merge = array_merge($data,$a);

		DB::table('seos')->insert($merge);	
    return redirect()->to('/seoview');	
    }

    public function val()
    {
      $request= Request()->all();
      $t=Request()->validate([
      'title' => 'required',
      'keyword' => 'required',
      'description' => 'required',
      'page' => 'required',
    ]);
      return($t);

    }
    public function editval()
    {
      $request= Request()->all();
      $t=Request()->validate([
      'title' => 'required',  
      'keyword' => 'required',
      'description' => 'required',
      'page' => 'nullable',
    ]);
      return($t);

    }

    public function seoviewedit($id){
      $de =Seo::where('id',$id)->get()->first();
      // $de = DB::table('seos')->paginate(4);
      return view('cd-admin.home.SEO.editseo',compact('de'));
    }

    public function editseo($id){
      $data = $this->val();
      $de =Seo::where('id',$id)->get()->first();
      $de->title = $data['title'];
      $de->keyword = $data['keyword'];
      $de->description = $data['description'];
      $de->page = $data['page']; 
      $de->save();
      return redirect()->to('/seoview/');
    }

    public function viewseo($id){
      $de =Seo::where('id',$id)->get()->first();
      return view('cd-admin.home.SEO.seoviewpage',compact('de'));
      
    }
}
