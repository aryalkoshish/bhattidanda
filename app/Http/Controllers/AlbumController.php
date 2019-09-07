<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Image;
use DB;

class AlbumController extends Controller
{
	public function showaddalbum(){
		return view('cd-admin/home/add-album');
	}

	public function showaddimage(Album $img){

		return view('cd-admin/home/add-galary',compact('img'));
	}

	public function storealbum(){
		$album = new Album;
		$request = Request()->all();

		$img = Request() -> validate([
			'albumname'=> 'required',
			'albumimage' => 'required|mimes:JPG,jpg,jpeg,JPEG,PNG,png',
			'altimage' => 'required',
		]);

		$album['albumname'] = $request['albumname'];
		$album['altimage']  = $request['altimage'];
		if(isset($request['albumimage'])){
			$file = $request['albumimage'];
			$filename = time().$file->getClientOriginalName();
			$destination=public_path('upload/album');
			$file -> move($destination,$filename);
			$album['albumimage'] = $filename;
		} 
		$album->save();
		return redirect()->to ('show/album');
	}

	public function showalbum(){
		$album = DB::table('albums')->get();

		return view('cd-admin/home/view-gallary',compact('album'));
	}

	public function showimage($id){
		$image = DB::table('images')->where('albumid',$id)->get();

		return view('cd-admin/home/show-images',compact('image'));

	}


	public function addimage(){

		$request = Request()->all();
		$image = new Image;
    	// dd($request);
		$im = Request() -> validate([
			'image' => 'required|mimes:JPG,jpg,jpeg,JPEG,PNG,png',
			'altimage' => 'required',

		]);

		$image['altimage'] = $request['altimage'];
		$image['albumid'] = $request['albumid'];
		if(isset($request['image'])){
			$file = $request['image'];
			$filename = time().$file->getClientOriginalName();
			$dest=public_path('upload/image');
			$file -> move($dest,$filename);
			$image['image'] = $filename;
		}

		$image->save();

		return redirect()->to ('show/album');
	}

	public function delimage($id){
		$album = DB::table('albums')->where('id',$id)->get()->first();
		if(file_exists('public/upload/album/'.$album->albumimage))
		{

			unlink('public/upload/album/'.$album->albumimage);
			DB::table('albums')->where('id',$id)->delete();

			$test = DB::table('images')->where('albumid',$id)->get()->all();
			foreach ($test as $t) {
				if(file_exists('public/upload/image/'.$t->image))
				{


					unlink('public/upload/image/'.$t->image);
					DB::table('images')->where('albumid',$id)->delete();
				}

			}


		}
		return redirect()->to ('show/album');
	}

}
