@extends('admin.master')

@section('content')

<!--breadcrumbs-->
 
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span6">
			<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h3>Edit Category</h3>
        </div>
			<div class="widget-content nopadding">
		          <form action="{{route('category.update',$category->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
		          	@csrf
		            <div class="control-group">
		              <label class="control-label">Name :</label>
		              <div class="controls">
		                <input type="text" class="span11" placeholder="Name" name="name" value="{{$category->name}}"/>
		              </div>
		            </div>
		            <div class="control-group">
		              <label class="control-label">Description :</label>
		              <div class="controls">
		                <input type="text" class="span11" placeholder="Description" name="description" value="{{$category->description}}"/>
		              </div>
		            </div>
		            <div class="control-group">
		              <label class="control-label">Select Category</label>
		              <div class="controls">
		                <select name="parent_id" class="span11">
		                	<option value="">Select Category</option>
		                @foreach($categories as $category)
		                  <option value="{{$category->id}}">{{$category->name}}</option>
		                 @endforeach
		                </select>
		              </div>
		            </div>
		             <div class="control-group">
		              <label class="control-label">Category Image upload</label>
		              <div class="controls">
		                <input type="file" name="image"  value="{{$category->image}}"/>
		              </div>
		            </div>

		            <div class="control-group">
		              <label class="control-label">Status :</label>
		              <div class="controls">
		                <input type="number" class="span11" name="status" placeholder="0/1"  value="{{$category->status}}"/>
		              </div>
		            </div>
		           
		            <div class="control-group">
		              <label class="control-label">Url</label>
		              <div class="controls">
		               <input type="text" class="span11" name="url" placeholder="Enter url" value="{{$category->url}}">
		              </div>
		            </div>
		            <div class="form-actions">
		              <button type="submit" class="btn btn-success">Update</button>
		            </div>
		          </form>
		        </div>
		    </div>
	</div>
</div>

@endsection