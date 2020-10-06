<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function view()
    {	
        if (Auth::user()->role=='admin') {
          $data['allData'] = User::all();
        return view('admin.users.view',$data);
        }else{
            return back()->with('error','Sorry !, Your role is not admin !!');
        }
    	
    }
    public function add()
    {
         if (Auth::user()->role=='admin') {
         return view('admin.users.add');
        }else{
            return back()->with('error','Sorry !!, Your role is not admin !!');
        }

    	return view('admin.users.add');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|unique:users,email'
            

        ]);
    	$Data = new User;
    	$Data->userType = "Admin";
    	$Data->name = $request->name;
    	$Data->email = $request->email;
        $Data->role = $request->role;
    	$Data->password = bcrypt($request->password);
    	$Data->save();

    	return redirect()->route('users.view')->with('success','User added successfully !!');

    }

    public function edit($id)
    {
        if (Auth::user()->role=='admin') {
          $editData=User::find($id);
        return view('admin.users.edit',compact('editData'));
        }else{
            return back()->with('error','Sorry !, Your role is not admin !!');
        }
       
    }

    public function update(Request $request,$id)
    {
        $Data =User::find($id);
        $Data->userType = "Admin";
        $Data->name = $request->name;
        $Data->email = $request->email;
        $Data->role = $request->role;
        $Data->save();

        return redirect()->route('users.view')->with('success','User Updated successfully !!');
    }

    public function delete($id)
    {
         if (Auth::user()->role=='admin') {
          $user=User::find($id);
            $user->delete();
            return redirect()->route('users.view')->with('success','User Deleted successfully !!');
        }else{
            return back()->with('error','Sorry !, Your role is not admin !!');
        }

       
    }
}
