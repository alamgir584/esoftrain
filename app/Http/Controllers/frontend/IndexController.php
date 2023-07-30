<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use DB;

class IndexController extends Controller
{
    public function index()
    {
        $product=DB::table('products')->get();
        $company=DB::table('companies')->get();
        return view('frontend.index',compact('product','company'));
    }
}
