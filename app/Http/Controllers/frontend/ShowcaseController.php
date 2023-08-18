<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ShowcaseController extends Controller
{
    public function index()
    {
        $product=DB::table('products')->get();
        $company=DB::table('companies')->get();
        $detailscategory=DB::table('detailscategories')->get();
        $singlecategory=DB::table('singlecategories')->get();
        return view('frontend.showcase',compact('company','product','detailscategory','singlecategory'));
    }
    public function detailsCategoryWiseProduct($details_category_id){
        $product = DB::table('products')
        ->join('detailscategories', 'products.category_id', '=', 'detailscategories.category_id')
        ->where('detailscategories.id', $details_category_id)
        ->select('products.*')
        ->get();
        $company=DB::table('companies')->get();
        $detailscategory=DB::table('detailscategories')->get();
        $singlecategory=DB::table('singlecategories')->get();
        return view('frontend.showcase-by-category-details',compact('company','product','detailscategory','singlecategory'));
    }
       
}
