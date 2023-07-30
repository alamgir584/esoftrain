<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use auth;
use DB;
use App\Models\Detailscategory;
use Image;
use File;

class DetailscategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        //$data=Company::paginate(5);//for pagination
        $data=DB::table('detailscategories')->get();
        return view('admin.detailscategory.index',compact('data'));
    }
    function create() {
        return view('admin.detailscategory.create');
    }
    public function store(Request $request)
    {

        $validated = $request->validate([
            'category_name' => 'required',
            'category_details' => 'required',
        ]);
  	  $photo=$request->category_logo;
    	  $photoname=uniqid().'.'.$photo->getClientOriginalName();
    	  Image::make($photo)->resize(360,345)->save('files/category/'.$photoname);
    	  $data['category_logo']='files/category/'.$photoname;

        Detailscategory::insert([
            'category_name'=>$request->category_name,
            'category_details'=>$request->category_details,
            'category_logo'=>$photoname,
        ]);
        $notification=array('messege' =>'Category Details Inserted' ,'alert-type'=>'success' );
        return redirect()->back()->with($notification);
    }
    public function delete($id)
    {
    	$data=DB::table('detailscategories')->where('id',$id)->first();
    	$image='files/category/'.$data->category_logo;

    	if (File::exists($image)) {
    		 unlink($image);
    	}
    	DB::table('detailscategories')->where('id',$id)->delete();
    	$notification=array('messege' => 'Category Details Deleted!', 'alert-type' => 'success');
    	return redirect()->back()->with($notification);
    }
    public function edit($id)
    {
        $data=Detailscategory::findorfail($id);
        return view('admin.detailscategory.edit',compact('data'));
    }
    public function update(Request $request,$id)
    {
        // print_r($request['old_company_logo']);
        // die;

    	$data=array();
    	$data['category_name']=$request->category_name;
        $data['category_details']=$request->category_details;
    	if ($request->category_logo)
        {
    		  if (File::exists("files/category/".$request->old_category_logo))
              {
    		    unlink("files/category/".$request->old_category_logo);
    	      }
    		  $photo=$request->category_logo;
              $photoname = uniqid()."-".$request->file('category_logo')->getClientOriginalName();
    	      Image::make($photo)->resize(360,345)->save('files/category/'.$photoname);
    	      $data['category_logo']=$photoname;
    	      DB::table('detailscategories')->where('id',$id)->update($data);
    	      $notification=array('messege' => 'Category Details Update!', 'alert-type' => 'success');
    	      return redirect()->back()->with($notification);
    	}else{
		  $data['category_logo']=$request->old_category_logo;
	      DB::table('detailscategories')->where('id',$id)->update($data);
	      $notification=array('messege' => 'Category Details Update!', 'alert-type' => 'success');
	      return redirect()->back()->with($notification);
    	}
    }
}
