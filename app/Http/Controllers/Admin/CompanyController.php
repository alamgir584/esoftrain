<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\Company;
use Illuminate\Support\Str;
use Image;
use File;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $data=Company::paginate(5);//for pagination
        //$data=DB::table('companies')->get();
        return view('admin.company.index',compact('data'));
    }
    function create() {
        return view('admin.company.create');
    }
    public function store(Request $request)
    {

        $validated = $request->validate([
            'company_name' => 'required|unique:companies|max:55',
        ]);
  	  $photo=$request->company_logo;
    	  $photoname=uniqid().'.'.$photo->getClientOriginalName();
    	  Image::make($photo)->resize(134,134)->save('files/company/'.$photoname);
    	  $data['company_logo']='files/company/'.$photoname;

        Company::insert([
            'company_name'=>$request->company_name,
            'company_logo'=>$photoname,
        ]);
        $notification=array('messege' =>'Company Inserted' ,'alert-type'=>'success' );
        return redirect()->back()->with($notification);
    }


    public function delete($id)
    {
    	$data=DB::table('companies')->where('id',$id)->first();
    	$image='files/company/'.$data->company_logo;

    	if (File::exists($image)) {
    		 unlink($image);
    	}
    	DB::table('companies')->where('id',$id)->delete();
    	$notification=array('messege' => 'Company Deleted!', 'alert-type' => 'success');
    	return redirect()->back()->with($notification);
    }



    public function edit($id)
    {
        $data=Company::findorfail($id);
        return view('admin.company.edit',compact('data'));
    }
    public function update(Request $request,$id)
    {
        // print_r($request['old_company_logo']);
        // die;

    	$data=array();
    	$data['company_name']=$request->company_name;
    	if ($request->company_logo)
        {
    		  if (File::exists("files/company/".$request->old_company_logo))
              {
    		    unlink("files/company/".$request->old_company_logo);
    	      }
    		  $photo=$request->company_logo;
              $photoname = uniqid()."-".$request->file('company_logo')->getClientOriginalName();
    	      Image::make($photo)->resize(134,134)->save('files/company/'.$photoname);
    	      $data['company_logo']=$photoname;
    	      DB::table('companies')->where('id',$id)->update($data);
    	      $notification=array('messege' => 'Company Update!', 'alert-type' => 'success');
    	      return redirect()->back()->with($notification);
    	}else{
		  $data['company_logo']=$request->old_company_logo;
	      DB::table('companies')->where('id',$id)->update($data);
	      $notification=array('messege' => 'Company Update!', 'alert-type' => 'success');
	      return redirect()->back()->with($notification);
    	}
    }
}