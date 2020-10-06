@extends('admin.master')

@section('content')

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Category View</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Category Name</th>
                  <th>Category Description</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

              	@foreach($categories as $category)
                <tr class="odd gradeX">
                  <td>{{$category->id}}</td>
                  <td>{{$category->name}}</td>
                  <td>{{$category->category_desc}}</td>
                  <td class="center">
                  	<img src="{{asset('images/categories/'.$category->image)}}" width="50">
                  </td>
                  <td class="center">
                  	<a href="{{route('category.edit',$category->id)}}" class="btn btn-success"><i class="icon-edit"></i></a>
                  	<form action="{{route('category.delete',$category->id)}}" method="get">
                  		@csrf
                  		<button type="submit" class="btn btn-danger"><i class="icon-trash"></i></button>
                  	</form>
                  	
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
		</div>
	</div>
</div>
	
@endsection