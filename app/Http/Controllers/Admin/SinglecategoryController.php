<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Singlecategory;

class SinglecategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        //$data=Company::paginate(5);//for pagination
        $data=DB::table('singlecategories')->get();
        return view('admin.singlecategory.index',compact('data'));
    }
    function create() {
        return view('admin.singlecategory.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required|unique:singlecategories|max:55',
        ]);

        Singlecategory::insert([
            'category_name'=>$request->category_name,
        ]);
        $notification=array('messege' =>'Single category Inserted' ,'alert-type'=>'success' );
        return redirect()->back()->with($notification);
    }


    public function delete($id)
    {
    	$data=DB::table('singlecategories')->where('id',$id)->first();
    	DB::table('singlecategories')->where('id',$id)->delete();
    	$notification=array('messege' => 'Single category Deleted!', 'alert-type' => 'success');
    	return redirect()->back()->with($notification);
    }



    public function edit($id)
    {
        $data=Singlecategory::findorfail($id);
        return view('admin.singlecategory.edit',compact('data'));
    }
    public function update(Request $request,$id)
    {
        // print_r($request['old_company_logo']);
        // die;

    	  $data['category_name']=$request->category_name;
	      DB::table('singlecategories')->where('id',$id)->update($data);
	      $notification=array('messege' => 'Single category Update!', 'alert-type' => 'success');
	      return redirect()->back()->with($notification);
    	}
    }

