@extends('admin.master')

@section('content')

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Project View</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Project Name</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

              	@foreach($projects as $project)
                <tr class="odd gradeX">
                  <td>{{$project->id}}</td>
                  <td>{{$project->name}}</td>
               
                  <td class="center">
                  	<img src="{{asset('images/projects/'.$project->image)}}" width="50">
                  </td>
                  <td class="center">
                  	<a href="{{route('project.edit',$project->id)}}" class="btn btn-success"><i class="icon-edit"></i></a>
                  	<form action="{{route('project.delete',$project->id)}}" method="get">
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