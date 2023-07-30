<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class CasedetailsController extends Controller
{
    public function index($id)
    {
        $company=DB::table('companies')->get();
        $casedetails=DB::table('products')->where('id',$id)->get();
        return view('frontend.casedetails',compact('company','casedetails'));
    }
}
