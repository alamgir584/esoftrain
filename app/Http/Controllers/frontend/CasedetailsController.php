<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class CasedetailsController extends Controller
{
    public function index()
    {
        $company=DB::table('companies')->get();
        return view('frontend.casedetails',compact('company'));
    }
}
