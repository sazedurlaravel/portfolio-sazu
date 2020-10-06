<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Project;
class ProjectController extends Controller
{

	public function index(){

		$Data['projects']=Project::all();
		return view('admin.projects.project-view',$Data);
	}

	public function add()
	{
		$Data['categories']=Category::all();
		return view('admin.projects.add-project',$Data);
	}

	public function edit($id)
	{
		$Data['project']=Project::find($id);
		$Data['categories']=Category::all();
		return view('admin.projects.project-edit',$Data);
	}

	public function store(Request $request){

		$project=new Project();
		$project->category_id=$request->category_id;
		$project->name=$request->name;
		$project->project_link=$request->project_link;

		 if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $img=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('images/projects/'.$img);
            \Image::make($image)->save($location);
            
        }

	     $project->image=$img;

	     $project->save();

	     return redirect()->route('project.view')->with('success','Project Added Successfully !!');
	}

	public function update(Request $request,$id){

		$project=Project::find($id);
		$project->category_id=$request->category_id;
		$project->name=$request->name;
		$project->project_link=$request->project_link;

		 if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $img=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('images/projects/'.$img);
            \Image::make($image)->save($location);
            
        }

	     $project->image=$img;

	     $project->save();

	     return redirect()->route('project.view')->with('success','Project updated Successfully !!');
	}

	public function delete($id)
	{
		$project=Project::find($id);
		$project->delete();

		return back()->with('success','Project Deleted !!');
	}
 }
