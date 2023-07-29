<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class TrendingprojectdetailsController extends Controller
{
    function index()  {
        $company=DB::table('companies')->get();
        return view('frontend.trendingprojectdetails',compact('company'));
    }
}
