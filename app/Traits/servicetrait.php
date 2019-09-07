<?php
namespace App\Traits;

use Illuminate\Http\Request;


trait servicetrait{

	public function validateservice()
	{
    	$request =Request()->all();
        
    	$test = Request()->validate([
    		'servicename'=>'required',
    		
            'image'=> 'required|mimes:JPG,jpg,jpeg,JPEG,PNG,png',
    		'altimage' => 'required',
            'description'=>'required',
    		'status' =>'required',]);
        
    	return($test);
    }

    public function editval(){
        $request = Request()->all();

        $val= Request()-> validate([
            'servicename'=>'required',
            
            'image'=>'nullable',
            'altimage' => 'required',
            'description'=>'required',
            'status' =>'nullable',
        ]);
      
        return($val);
    }
}
?>