<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $data=DB::table('contacts')->get();   
        return view('admin.contact.index',compact('data'));
    }
    public function delete($id)
    {
    	$data=DB::table('contacts')->where('id',$id)->first();
    	DB::table('contacts')->where('id',$id)->delete();
    	$notification=array('messege' => 'Contact Deleted!', 'alert-type' => 'success');
    	return redirect()->back()->with($notification);
    }
}
