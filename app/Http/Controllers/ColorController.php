<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Color;
use Auth;

class ColorController extends Controller
{
   public function view()
   {
   	$Data['allData']=Color::all();
   	return view('admin.colors.view-color',$Data);
   }

   public function create()
   {
   	return view('admin.colors.add-color');
   }

   public function edit($id)
   {
   		$Data['editData']=Color::find($id);

   		return view('admin.colors.edit-color',$Data);
   }

   public function store(Request $request)
   {
   		$this->validate($request,[
            'name' => 'required|unique:colors,name'
       
        ]);

        $color =new Color;
        $color->name = $request->name;
        $color->created_by = Auth::user()->id;
        $color->save();

        return redirect()->route('colors.view')->with('success','Color Added successfully !!');
   }

    public function update(Request $request,$id)
   {
   		

        $color =Color::find($id);
        $color->name = $request->name;
        $color->updated_by = Auth::user()->id;
        $color->save();

        return redirect()->route('colors.view')->with('success','Color updated successfully !!');
   }

    public function delete($id)
   {
    $color=Color::find($id);
    $color->delete();

    return back()->with('success','Color Deleted successfully !!');
   }
}
