<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $data=DB::table('products')->get();
        
        return view('admin.product.index',compact('data'));
    }
    function create() {
        return view('admin.product.create');
    }
    function store() {
        
    }
    function edit() {
        return view('admin.product.edit');
        
    }
    function update() {
        
    }
    function delete() {
        
    }
}
