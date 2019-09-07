<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use DB;

class ReviewController extends Controller
{
    public function create(){
        return view('cd-admin/home/review/create');
    }
    public function store()
    {
        $test = $this->validateform();
        DB::table('reviews')->insert($test);
        return redirect()->to('/index'); 	
    }


    // public function review(){
    // 	return view('cd-admin/home/add-review');
    // }

    public function index()
	{
		$review = DB::table('reviews')->paginate(4);
		return view('cd-admin.home.review.index',compact('review'));
	}

    public function delete($id){
        $review=Review::find($id);
        $review->delete();
        return redirect()->to('/index');
    }

    public function validateform(){
        $request = Request()->all();
        $test = Request()->validate([
            'name' => 'required',
            'address' => 'required',
            'summary' => 'required|max:5000',
            'status' => '',
        ]);

        return($test);
    }

    public function edit(Request $request, $id)
    {
        
        if($review=Review::where('id',$id)->get()->first())
        {
        $review=Review::find($id);
        $review->name=$request->get('name');
        $review->address=$request->get('address');
        $review->summary=$request->get('summary');
        //$review->status=$request->get('status');
        $review->save();
        return redirect()->to('/index');
        }
    }

    public function status($id){
        $a=[];
        $request = DB::table('reviews')->where('id',$id)->get()->first();
        if($request ->status =='active'){
            $a['status'] = 'inactive';
        }
        else
        {
            $a['status'] = 'active';
        }
        
        DB::table('reviews')->where('id',$id)->update($a);
        return redirect()->to('/index');
    }
}
