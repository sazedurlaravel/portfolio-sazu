@extends('admin.master')

@section('content')
<div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
	 <div class="widget-box">
	 	<div class="widget-title" style="float: right;"> 
            <a href="{{route('users.add')}}" class="btn btn-success"><i class="icon-plus-sign"></i>Add User</a>
          </div>
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>User List</h5> 
          </div>


          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>SL.</th>
                  <th>Role</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

              	@foreach($allData as $user)
                <tr class="gradeX">
                  <td>{{$user->id}}</td>
                  <td>{{$user->role}}</td>
                  <td>{{$user->name}}</td>
                  <td class="center">{{$user->email}}</td>
                  <td >
                   <a href="{{route('users.edit',$user->id)}}" title="Edit" class="btn btn-success" ><i class="icon-pencil"></i></a>
                      

                      <a href="{{route('users.delete',$user->id)}}" class="btn btn-danger" title="Delete" id="delete"><i class="icon-trash"></i></a>



                      
                  
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