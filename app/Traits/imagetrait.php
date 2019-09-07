<?php 

namespace App\Traits;

Trait imagetrait{

	public function getimage(){
      $request = Request()->all();
		if(isset($request['image'])){
		 $file = $request['image'];
            $filename = time().$file->getClientOriginalName();
            $destinationPath = 'image_upload';
            $file->move($destinationPath,$filename);
            $file->save = $filename;
              return $filename;
         }
       
	}

   public function getfile(){
      $request = Request()->all();
      if(isset($request['pdffile'])){
         $file = $request['pdffile'];
         $filename1 = time().$file->getClientOriginalName();
         $dest = 'fileupload';
         $file->move($dest,$filename1);
         $file->save = $filename1;
         return $filename1;
      }
      
   }

}
?>