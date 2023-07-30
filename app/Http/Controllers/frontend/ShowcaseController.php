<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ShowcaseController extends Controller
{
    public function index()
    {
        $company=DB::table('companies')->get();
        $product=DB::table('products')->get();
        return view('frontend.showcase',compact('company','product'));
    }
}
