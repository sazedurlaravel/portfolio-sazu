@extends('admin.master')

@section('content')
<div class="container-fluid">
  <div class="row-fluid">
    <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h3>Category View</h3>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Category Name</th>
                  <th>Url</th>
                  <th>Main Category</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

                @foreach($categories as $category)
                <tr class="gradeX">
                  <td style="text-align: center;">{{$category->id}}</td>
                  <td style="text-align: center;">{{$category->name}}</td>
                  <td style="text-align: center;">{{$category->url}}</td>
                  <td class="center" style="text-align: center;">
                    @if($category->parent_id==NULL)
                    Main Category

                    @else
                    Sub Category
                    @endif
                  </td> 
                  <td class="center" style="text-align: center;">
                    <img src="{{asset('images/categories/'.$category->image)}}" width="100">
                  </td>
                  <td class="center">
                    <a href="{{route('category.delete',$category->id)}}" class="btn btn-danger"><i class="icon-trash"></i></a>

                    <form action="{{route('category.edit',$category->id)}}" method="get">
                      <button type="submit" class="btn btn-success" style="margin-top: 4px">Edit</button>
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
	

@endsection



