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
        $data=DB::table('companies')->get();
        
        return view('admin.company.index',compact('data'));
    }
    public function store(Request $request)
    {

        $validated = $request->validate([
            'company_name' => 'required|unique:companies|max:55',
        ]);
        $slug=Str::slug($request->company_name, '-');

  	  $photo=$request->company_logo;
    	  $photoname=uniqid().'.'.$photo->getClientOriginalName();
    	  Image::make($photo)->resize(240,120)->save('files/company/'.$photoname);
    	  $data['company_logo']='files/company/'.$photoname;

        Company::insert([
            'company_name'=>$request->company_name,
            'company_logo'=>$photoname,
            'company_slug'=>Str::slug($request->company_name, '-'),
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
        return response()->json($data);
    }
    public function update(Request $request)
    {

    	$data=array();
    	$data['company_name']=$request->company_name;
    	$data['company_slug']=Str::slug($request->company_name, '-');
    	if ($request->company_logo)
        {
    		  if (File::exists("files/company/".$request->old_company_logo))
              {
    		    unlink("files/company/".$request->old_company_logo);
    	      }
    		  $photo=$request->company_logo;
              $photoname = uniqid()."-".$request->file('company_logo')->getClientOriginalName();
    	      Image::make($photo)->resize(240,120)->save('files/company/'.$photoname);
    	      $data['company_logo']=$photoname;
    	      DB::table('companies')->where('id',$request->id)->update($data);
    	      $notification=array('messege' => 'Company Update!', 'alert-type' => 'success');
    	      return redirect()->back()->with($notification);
    	}else{
		  $data['company_logo']=$request->old_company_logo;
	      DB::table('companies')->where('id',$request->id)->update($data);
	      $notification=array('messege' => 'Company Update!', 'alert-type' => 'success');
	      return redirect()->back()->with($notification);
    	}
    }
}