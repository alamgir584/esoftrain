<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\Trendingproject;
use Illuminate\Support\Str;
use Image;
use File;

class TrendingprojectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $data=DB::table('trendingprojects')->get();
        return view('admin.trendingproject.index',compact('data'));
    }
    function create() {
        return view('admin.trendingproject.create');
    }
    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required',
            'details' => 'required',
        ]);
  	  $photo=$request->thumbnail;
    	  $photoname=uniqid().'.'.$photo->getClientOriginalName();
    	  Image::make($photo)->resize(1200,591)->save('files/trendingproject/'.$photoname);
    	  $data['thumbnail']='files/trendingproject/'.$photoname;

        Trendingproject::insert([
            'title'=>$request->title,
            'details'=>$request->details,
            'thumbnail'=>$photoname,
        ]);
        $notification=array('messege' =>'Trending Project Inserted' ,'alert-type'=>'success' );
        return redirect()->back()->with($notification);
    }


    public function delete($id)
    {
    	$data=DB::table('trendingprojects')->where('id',$id)->first();
    	$image='files/trendingproject/'.$data->thumbnail;

    	if (File::exists($image)) {
    		 unlink($image);
    	}
    	DB::table('trendingprojects')->where('id',$id)->delete();
    	$notification=array('messege' => 'Trending Project Deleted!', 'alert-type' => 'success');
    	return redirect()->back()->with($notification);
    }



    public function edit($id)
    {
        $data=Trendingproject::findorfail($id);
        return view('admin.trendingproject.edit',compact('data'));
    }
    public function update(Request $request,$id)
    {
        // print_r($request['old_company_logo']);
        // die;

    	$data=array();
    	$data['title']=$request->title;
        $data['details']=$request->details;
    	if ($request->thumbnail)
        {
    		  if (File::exists("files/trendingproject/".$request->old_thumbnail))
              {
    		    unlink("files/trendingproject/".$request->old_thumbnail);
    	      }
    		  $photo=$request->thumbnail;
              $photoname = uniqid()."-".$request->file('thumbnail')->getClientOriginalName();
    	      Image::make($photo)->resize(1200,591)->save('files/trendingproject/'.$photoname);
    	      $data['thumbnail']=$photoname;
    	      DB::table('trendingprojects')->where('id',$id)->update($data);
    	      $notification=array('messege' => 'Trending Project Update!', 'alert-type' => 'success');
    	      return redirect()->back()->with($notification);
    	}else{
		  $data['thumbnail']=$request->old_thumbnail;
	      DB::table('trendingprojects')->where('id',$id)->update($data);
	      $notification=array('messege' => 'Trending Project Update!', 'alert-type' => 'success');
	      return redirect()->back()->with($notification);
    	}
    }
}

