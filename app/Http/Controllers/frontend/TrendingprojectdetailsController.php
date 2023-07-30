<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class TrendingprojectdetailsController extends Controller
{
    function index($id)  {
        $company=DB::table('companies')->get();
        $trendingproject=DB::table('trendingprojects')->where('id',$id)->get();
        return view('frontend.trendingprojectdetails',compact('company','trendingproject'));
    }
}
