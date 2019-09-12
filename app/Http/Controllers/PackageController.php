<?php

namespace App\Http\Controllers;
use App\Package;
use Illuminate\Http\Request;
use DB;

class PackageController extends Controller
{
   public function addpackage(){
   	return view('cd-admin.home.add-package');
   }

   public function viewpackage(){
   	$view = DB::table('packages')->get();
   	return view('cd-admin.home.view-package',compact('view'));
   }

  

   public function storepackage(){ 	
    $req = $this->val();
    $package = new Package;
   	$package['name'] = $req['name'];
   	
   	$package['altimage'] = $req['altimage'];
    $package['slug'] = str_slug($req['name']);
   	$img = $req['image'];
   	if (isset($img))
   	{
   		$file=$img;
   		
   		$filename = time().$file->getClientOriginalName();
   		$dest=public_path('upload/package');
   		$file->move($dest,$filename);
   	}
   	$package['image']=$filename;
   	$package['description'] = $req['description'];
   	$package['status'] = $req['status'];
   	
   	$package->save();
   	return redirect()->to('viewpackages')->with('success','Package added');

   }

   public function deletepackage($id){

   	$del = DB::table('packages')->where('id',$id)->get()->first();
   	
   	if(file_exists('upload/package'.$del->image))
   	{
   		unlink('upload/package'.$del->image);
   	}
   	DB::table('packages')->where('id',$id)->delete();
   	return redirect()->to('viewpackages')->with('error','package deleted');
   }





   public function packagestatus($id){
        $a=[];
        $request = DB::table('packages')->where('id',$id)->get()->first();
        if($request ->status =='active'){
            $a['status'] = 'inactive';
        }
        else
        {
            $a['status'] = 'active';
        }
        
        DB::table('packages')->where('id',$id)->update($a);
        return redirect()->to('viewpackages')->with('success','Status updated');
    }

    public function viewpage($id){
      $show= DB::table('packages')->where('id',$id)->get()->first();
      return view('cd-admin.home.viewpackagepage',compact('show'));
    }
    public function editview($id){
      $show= DB::table('packages')->where('id',$id)->get()->first();
      return view('cd-admin.home.editpackage',compact('show'));
      
    }

    public function editstore($id)
    {      
      $req= $this->editval();

      $de =Package::where('id',$id)->get()->first();  

      $de->altimage = $req['altimage'];
      $de->description = $req['description'];
      $de->status = $req['status'];  
      $de->name = $req['name'];      
    if (isset($req['image']))
    {
      $file=$req->image;     
      $filename = time().$file->getClientOriginalName();
      $dest=public_path('upload/package');
      $file->move($dest,$filename);
      $de->image = $filename;
    }
    $de->save();
    //DB::table('packages')->insert($de);
    return redirect()->to('viewpackages')->with('success','Edited Successfully');

    }

    public function val()
    {
      $request= Request()->all();
      $t=Request()->validate([
      'name' => 'required',
      
      'image' => 'required|mimes:PNG,png,JPEG,jpeg,JPG,jpg',
      'altimage' => 'required',
      'description' => 'required',
      'slug' => 'nullable',
      'status' => 'required',
    ]);
      return($t);

    }

    public function editval(){
      $request = Request()->all();

      $te=Request()->validate([
      'name' => 'required',
      
      'image' => 'mimes:PNG,png,JPEG,jpeg,JPG,jpg',
      'altimage' => 'required',
      'description' => 'required',
      'slug' => 'nullable',
      'status' => 'nullable',
    ]);
      return($te);
    }


    
}

