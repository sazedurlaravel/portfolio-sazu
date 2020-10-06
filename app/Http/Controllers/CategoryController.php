<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use File;

class CategoryController extends Controller
{
    public function index()
    {
    	$categories=Category::orderBy('id','desc')->get();

    	return view('admin.categories.category-view',compact('categories'));
    }

    public function add()
    {	

    	return view('admin.categories.category-add');
    }

    public function edit($id)
    {   
        $category=Category::find($id);


        return view('admin.categories.category-edit',compact('category'));
    }



    public function store(Request $request)
    {


    	$category=new Category;
    	$category->name = $request->name;
    	$category->category_desc = $request->category_desc;
    	
    	  if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $img=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('images/categories/'.$img);
            \Image::make($image)->save($location);
            
        }

	     $category->image=$img;

	     $category->save();

         return redirect()->route('category.view')->with('success','Category Added successfully !!');
    }

     public function update(Request $request,$id)
    {


        $category=Category::find($id);
        $category->name = $request->name;
        $category->category_desc = $request->category_desc;

         if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $img=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('images/categories/'.$img);
            \Image::make($image)->save($location);
            $category->image=$img;
        }
        
         $category->save();

         

         

         return redirect()->route('category.view')->with('success','Category Updated successfully !!');
    }

    

    public function delete($id)
    {
        $category=Category::find($id);
        $category->delete();

        return back()->with('success','Category Deleted successfully !!');
    }


    // public function show($id)
    // {

    //     $Data['category']=Category::find($id);
    //     $Data['categories']=Category::all();

    //     if (!is_null($category)) {
    //        return view('frontend.pages.show',$Data);
    //     }else{
    //         No Products Found 
    //     }
    // }

    
}
