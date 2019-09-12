<?php

namespace App\Http\Controllers;
use App\Traits\servicetrait;
use App\service;
use DB;
use Illuminate\Http\Request;
use session;

class ServiceController extends Controller
{
	use servicetrait;
    public function createservice(){
    	return view('cd-admin/home/addservice');
    }


    public function viewservice(){
    	$service = DB::table('services')->get();
    	return view('cd-admin/home/viewservice',compact('service'));
    }

    public function storeservice(){
    	$vald = $this->validateservice();

    	$service = new  Service;
    	$service['name']=$vald['servicename'];
    	
    	$service['altimage']= $vald['altimage'];
    	$service['description']=$vald['description'];
    	 $image = $vald['image'];

    	 if(isset($image))
		    {
            $file = $image;
            $filename = time().$file->getClientOriginalName();
            $destinationPath = 'imageuploadforservice';
            $file->move($destinationPath,$filename);
            $service['image'] = $filename;
			}
		$service['status'] = $vald['status'];
        
		$service->save();

		return redirect()->to('/view/service');

    }

    public function editservice($id){
    	$edi = $this->editval();

    	$edit =Service::find($id);

    	$edit['name']= $edi['servicename'];    	
    	$edit['altimage'] = $edi['altimage'];
    	$edit['description'] = $edi['description'];
        
    	 if(isset($edi['image']))
    	 {
    	 	$file = $edi['image'];
    	 	$flename = time().$file->getClientOriginalName();
    	 	$dest = ('imageuploadforservice');
    	 	$file -> move($dest,$flename);
    	 	$edit['image'] = $flename; 
    	 }
    	$edit->save();
        // Session::flash('success');
    	return redirect()->back();
    }

    public function deleteservice($id){
    	$test = DB::table('services')->where('id',$id)->get()->first();
    	if(file_exists('imageuploadforservice'.$test->image))
    	{
    		unlink('imageuploadforservice'.$test->image);
    	}
    	DB::table('services')->where('id',$id)->delete();
    	return redirect()->to('/view/service');

    }



    
}
