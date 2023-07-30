<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class TrendingprojectController extends Controller
{
    public function index()
    {
        $company=DB::table('companies')->get();
        $trendingproject=DB::table('trendingprojects')->get();
        return view('frontend.trendingproject',compact('company','trendingproject'));
    }
}
