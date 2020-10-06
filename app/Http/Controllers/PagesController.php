<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Project;

class PagesController extends Controller
{
    public function index()
    {
    	$Data['categories']=Category::all();
    	$Data['projects']=Project::orderBy('id','desc')->get();
    	
    	return view('frontend.pages.index',$Data);
    }
}
