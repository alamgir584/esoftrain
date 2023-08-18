<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\Product;
use Illuminate\Support\Str;
use Image;
use File;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $product=Product::all();
        return view('admin.product.index', compact('product'));
    }
    function create() {
        $category=DB::table('singlecategories')->get();
        return view('admin.product.create',compact('category'));
    }
    function store(Request $request) 
    {
        $validated = $request->validate([
            'category_id'=>'required',
            'name' => 'required',
            'client_title' => 'required',
            'client_details' => 'required',
            'concept_title' => 'required',
            'concept_details' => 'required',
            'service_title' => 'required',
            'service_details' => 'required',
            'result_title' => 'required',
            'result_details' => 'required',
        ]);

        // for product main thumbnail
        $thumbnail=$request->file('thumbnail');
        $name_gen_thumbnail=hexdec(uniqid()).'.'.$thumbnail->getClientOriginalExtension();
        Image::make($thumbnail)->resize(514,660)->save('files/product/'.$name_gen_thumbnail);
        $thumbnail_image='files/Product/'.$name_gen_thumbnail;

        // for product client main image
        $image_client_main=$request->file('image_client_main');
        $name_gen_client_main=hexdec(uniqid()).'.'.$image_client_main->getClientOriginalExtension();
        Image::make($image_client_main)->resize(2560,1434)->save('files/product/'.$name_gen_client_main);
        $client_main_image='files/Product/'.$name_gen_client_main;

        // for product client multi image
        $image_client=$request->file('image_client');
        $images_client=array();
        foreach ($image_client as $multi_img_client) {
            $name_gen_client=hexdec(uniqid()).'.'.$multi_img_client->getClientOriginalExtension();
            Image::make($multi_img_client)->resize(1280,1333)->save('files/product/'.$name_gen_client);
            $final_img_client='files/Product/'.$name_gen_client;
            array_push($images_client, $final_img_client);
        }
        $client_image= json_encode($images_client);

        // for product concept multi image
        $image_concept=$request->file('image_concept');
        $images_concept=array();
        foreach ($image_concept as $multi_img_concept) {
            $name_gen_concept=hexdec(uniqid()).'.'.$multi_img_concept->getClientOriginalExtension();
            Image::make($multi_img_concept)->resize(480,480)->save('files/product/'.$name_gen_concept);
            $final_img_concept='files/Product/'.$name_gen_concept;
            array_push($images_concept, $final_img_concept);
        }
        $concept_image= json_encode($images_concept);

        // for product service Image
        $image_service=$request->file('image_service');
        $name_gen_service=hexdec(uniqid()).'.'.$image_service->getClientOriginalExtension();
        Image::make($image_service)->resize(1919,1086)->save('files/product/'.$name_gen_service);
        $service_image='files/Product/'.$name_gen_service;

        
        // for product result multi image
        $image_result=$request->file('image_result');
        $images_result=array();
        foreach ($image_result as $multi_img_result) {
            $name_gen_result=hexdec(uniqid()).'.'.$multi_img_result->getClientOriginalExtension();
            Image::make($multi_img_result)->resize(1280,1333)->save('files/product/'.$name_gen_result);
            $final_img_result='files/Product/'.$name_gen_result;
            array_push($images_result, $final_img_result);
        }
        $result_image= json_encode($images_result);

        Product::insert([
            'category_id'=> $request->category_id,
            'name' => $request->name,
            'client_title' => $request->client_title,
            'client_details' => $request->client_details,
            'concept_title' => $request->concept_title,
            'concept_details' => $request->concept_details,
            'service_title' => $request->service_title,
            'service_details' => $request->service_details,
            'result_title' => $request->result_title,
            'result_details' => $request->result_title,
            'thumbnail'=>$thumbnail_image,
            'image_client_main'=>$client_main_image,
            'image_client'=>$client_image,
            'image_concept'=>$concept_image,
            'image_service'=>$service_image,
            'image_result'=>$result_image,
        ]);
    
        $notification=array('messege' =>'Product Inserted' ,'alert-type'=>'success' );
        return redirect()->back()->with($notification);
    }
    function edit($id) {
        $category=DB::table('singlecategories')->get();
        $data=Product::findorfail($id);
        return view('admin.product.edit',compact('data','category'));

    }
    function update(Request $request,$id) 
    {
        $data=array();
         $data['category_id']=$request->category_id;
         $data['name'] = $request->name;
         $data['client_title'] = $request->client_title;
         $data['client_details'] = $request->client_details;
         $data['concept_title'] = $request->concept_title;
         $data['concept_details'] = $request->concept_details;
         $data['service_title'] = $request->service_title;
         $data['service_details'] = $request->service_details;
         $data['result_title'] = $request->result_title;
         $data['result_details'] = $request->result_title;
         $data['thumbnail']=$request->old_thumbnail; 
         $data['image_client_main']=$request->old_image_client_main;
         $data['image_service']=$request->old_image_service;
         $data['image_client']=$request->old_image_client;
         $data['image_concept']=$request->old_image_concept;
         $data['image_result']=$request->old_image_result;

        //  thumbnail image edit
    	if ($request->thumbnail)
        {
    		if (File::exists("files/product/".$request->old_thumbnail))
            {
    		unlink("files/product/".$request->old_thumbnail);
    	    }
    		$photo=$request->thumbnail;
            $photoname = uniqid()."-".$request->file('thumbnail')->getClientOriginalName();
    	    Image::make($photo)->resize(514,660)->save('files/product/'.$photoname);
    	    $data['thumbnail']='files/product/'.$photoname;
        }
                //  main image client edit
        if ($request->image_client_main)
        {
                if (File::exists("files/product/".$request->old_image_client_main))
                  {
                    unlink("files/product/".$request->old_image_client_main);
                  }
                  $photo=$request->image_client_main;
                  $photoname = uniqid()."-".$request->file('image_client_main')->getClientOriginalName();
                  Image::make($photo)->resize(2560,1434)->save('files/product/'.$photoname);
                  $data['image_client_main']='files/product/'.$photoname;
        }
         //  service image edit
        if ($request->image_service)
        {
                if (File::exists("files/product/".$request->old_image_service))
                  {
                    unlink("files/product/".$request->old_image_service);
                  }
                  $photo=$request->image_service;
                  $photoname = uniqid()."-".$request->file('image_service')->getClientOriginalName();
                  Image::make($photo)->resize(1919,1086)->save('files/product/'.$photoname);
                  $data['image_service']='files/product/'.$photoname;
        }
         //  image client 2 image edit

        if ($request->hasFile('image_client') && count($request->file('image_client')) > 0) {
            $image_client=$request->file('image_client');
            $images_client=array();
            foreach ($image_client as $multi_img_client) 
            {
            $name_gen_client=hexdec(uniqid()).'.'.$multi_img_client->getClientOriginalExtension();
            Image::make($multi_img_client)->resize(1280,1333)->save('files/product/'.$name_gen_client);
            $final_img_client='files/Product/'.$name_gen_client;
            array_push($images_client, $final_img_client);
            }
        $data['image_client']= json_encode($images_client);
        }

        //  image concept 4 image edit

        if ($request->hasFile('image_concept') && count($request->file('image_concept')) > 0) {
            $image_concept=$request->file('image_concept');
            $images_concept=array();
            foreach ($image_concept as $multi_img_concept) 
            {
            $name_gen_concept=hexdec(uniqid()).'.'.$multi_img_concept->getClientOriginalExtension();
            Image::make($multi_img_concept)->resize(480,480)->save('files/product/'.$name_gen_concept);
            $final_img_concept='files/Product/'.$name_gen_concept;
            array_push($images_concept, $final_img_concept);
            }
        $data['image_concept']= json_encode($images_concept);
        }

           //  image result 2 image edit

        if ($request->hasFile('image_result') && count($request->file('image_result')) > 0) {
            $image_result=$request->file('image_result');
            $images_result=array();
            foreach ($image_result as $multi_img_result) 
            {
            $name_gen_result=hexdec(uniqid()).'.'.$multi_img_result->getClientOriginalExtension();
            Image::make($multi_img_result)->resize(1280,1333)->save('files/product/'.$name_gen_result);
            $final_img_result='files/Product/'.$name_gen_result;
            array_push($images_result, $final_img_result);
            }
        $data['image_result']= json_encode($images_result);
        }
       

        DB::table('products')->where('id',$id)->update($data);
        $notification=array('messege' => 'Products Update!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
        
    function delete($id) {
        $product=DB::table('products')->where('id',$id)->first();  //product data get
        if (File::exists($product->thumbnail)) {
              FIle::delete($product->thumbnail);
        }
        if (File::exists($product->image_client_main)) {
            FIle::delete($product->image_client_main);
      }

        $image_client=json_decode($product->image_client,true);
        if (isset($image_client)) {
             foreach($image_client as $key => $client_image){
                if (File::exists($client_image)) {
                    FIle::delete($client_image);
                }
             }
        }
        $image_concept=json_decode($product->image_concept,true);
        if (isset($image_concept)) {
             foreach($image_concept as $key => $concept_image){
                if (File::exists($concept_image)) {
                    FIle::delete($concept_image);
                }
             }
        }
        if (File::exists($product->image_service)) {
            FIle::delete($product->image_service);
      }
      $image_result=json_decode($product->image_result,true);
      if (isset($image_result)) {
           foreach($image_result as $key => $result_image){
              if (File::exists($result_image)) {
                  FIle::delete($result_image);
              }
           }
      }

        DB::table('products')->where('id',$id)->delete();
       $notification=array('messege' => 'Product Deleted!', 'alert-type' => 'success');
       return redirect()->back()->with($notification);
    }
        
}
