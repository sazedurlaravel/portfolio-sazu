@extends('admin.master')

@section('content')
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span6">
       <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-plus"></i> </span>
          <h5>Add Category</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="{{route('category.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            <div class="control-group">
              <label class="control-label">Category Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="name" name="name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Category description :</label>
              <div class="controls">
                <textarea type="text" class="span11" placeholder="Category Description" name="category_desc"></textarea>
                
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Image</label>
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