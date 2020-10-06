<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Category;
use App\Color;
use App\Size;
use App\Product;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function index()
    {
        $products=Product::orderBy('id','desc')->get();
        return view('admin.products.index',compact('products'));
    }

    public function create()
    {
    	 $Data['categories']=Category::all();
         $Data['colors']=Color::all();
         $Data['sizes']=Size::all();
    	return view('admin.products.create',$Data);
    }

     public function edit($id)
    {
        $product=Product::find($id);
         $categories=Category::orderBy('id','desc')->get();
        return view('admin.products.edit',compact('product','categories'));
    }


    public function store(Request $request)
    {
    	

    	
    	$product=new Product;
    	$product->category_id = $request->category_id;
    	$product->name = $request->name;
    	$product->short_desc = $request->short_desc;
        $product->long_desc = $request->long_desc;
    	$product->price = $request->price;
        $product->slug =Str::slug($request->name);
    	
    	//insert image
    	if($request->hasFile('image'))
    	{
    		$image= $request->file('image');
    		$img=time().'.'.$image->getClientOriginalExtension();
    		$location=public_path('images/'.$img);
    		Image::make($image)->save($location);
    		
    	}
        $product->image=$img;
        $product->save();

        if ($product->save()) {
            
            //insert sub image data 

            $files = $request->sub_image;
            if (!empty($files)) {
              foreach ($files as $file) {
                $file= $request->file('image');
                $fileName=time().'.'.$file->getClientOriginalExtension();
                $location=public_path('images/'.$fileName);
                Image::make($file)->save($location);

                $subimage=new ProductSubImage();
                $subimage->product_id=$product->id;
                $subimage->product_id=$product->id;
                $subimage->product_id=$product->id;
              }
            }
        }
    	
    	

         return back()->with('success','Product Added successfully !!');
    	}

        public function delete($id)
        {
            $product=Product::find($id);
            $product->delete();
            return back()->with('success','Product Deleted successfully !!');
        }
    
}
