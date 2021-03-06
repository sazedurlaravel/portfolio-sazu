@extends('admin.master')

@section('content')
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span11">
       <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-plus"></i> </span>
          <h5>Add Project</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="{{route('project.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
            @csrf

             <div class="control-group">
                 
                  <div class="controls">
                    <select name="category_id" class="span11">
                      <option value="">Select Category</option>
                      @foreach($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
            <div class="control-group">
              
              <div class="controls">
                <input type="text" class="span11" placeholder="Enter Project Name" name="name" />
              </div>
            </div>
             <div class="control-group">
           
              <div class="controls">
                <input type="text" class="span11" placeholder="Enter Project link" name="project_link" />
              </div>
            </div>
            
            <div class="control-group">
              <div class="controls">
                <input type="file"  class="span11" name="image" />
              </div>
            </div>
           
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
 

@endsection