<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Size;
use Auth;

class SizeController extends Controller
{
   public function view()
   {
   	$Data['allData']=Size::all();
   	return view('admin.sizes.view-size',$Data);
   }

   public function create()
   {
   	return view('admin.sizes.add-size');
   }

   public function edit($id)
   {
   		$Data['editData']=size::find($id);

   		return view('admin.sizes.edit-size',$Data);
   }

   public function store(Request $request)
   {
   		$this->validate($request,[
            'name' => 'required|unique:sizes,name'
       
        ]);

        $size =new Size;
        $size->name = $request->name;
        $size->created_by = Auth::user()->id;
        $size->save();

        return redirect()->route('sizes.view')->with('success','Size Added successfully !!');
   }

    public function update(Request $request,$id)
   {
   		

        $size =Size::find($id);
        $size->name = $request->name;
        $size->updated_by = Auth::user()->id;
        $size->save();

        return redirect()->route('sizes.view')->with('success','Size updated successfully !!');
   }

   public function delete($id)
   {
   	$size=Size::find($id);
   	$size->delete();

   	return back()->with('success','Size Deleted successfully !!');
   }
}
