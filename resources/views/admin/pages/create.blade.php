@extends('admin.master')

@section('content')

<!--breadcrumbs-->
 
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span6">
			<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h3>Add Category</h3>
        </div>
			<div class="widget-content nopadding">
		          <form data-parsley-validate action="{{route('category.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
		          	@csrf
		            <div class="control-group">
		              <label class="control-label">Name :</label>
		              <div class="controls">
		                <input type="text" class="span11" placeholder="Name" name="name" required/>
		              </div>
		            </div>
		            <div class="control-group">
		              <label class="control-label">Description :</label>
		              <div class="controls">
		                <input type="text" class="span11" placeholder="Description" name="description" required/>
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
		                <input type="file" name="image" />
		              </div>
		            </div>

		            <div class="control-group">
		              <label class="control-label">Status :</label>
		              <div class="controls">
		                <input type="number" class="span11" name="status" placeholder="0/1" required/>
		              </div>
		            </div>
		           
		            <div class="control-group">
		              <label class="control-label">Url</label>
		              <div class="controls">
		               <input type="text" class="span11" name="url" placeholder="Enter url" required>
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

@endsection