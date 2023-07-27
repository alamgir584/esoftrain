<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class SayhelloController extends Controller
{
    public function index()
    {
        return view('frontend.sayhello');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'number' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'details' => 'required',
        ]);
        $data['name']=$request->name;
        $data['number']=$request->number;
        $data['email']=$request->email;
        $data['subject']=$request->subject;
        $data['details']=$request->details;

        DB::table('contacts')->insert($data);
       
        return redirect()->back();

    }
}
