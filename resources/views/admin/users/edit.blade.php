@extends('admin.master')

@section('content')
<div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
	 <div class="widget-box">
	 	<div class="widget-title" style="float: right;"> 
            <a href="{{route('users.view')}}" class="btn btn-success"><i class="icon-list-ul"></i>User List</a>
          </div>
          <div class="widget-title"> <span class="icon"><i class="icon-plus"></i></span>
            <h5>Edit User</h5> 
          </div>

          <div class="span7">
          	<div class="widget-content nopadding">
		          <form data-parsley-validate action="{{route('users.update',$editData->id)}}" method="post" class="form-horizontal">
		          	@csrf

		          	 <div class="control-group">
		              <label class="control-label">Select Role</label>
		              <div class="controls">
		                <select name="role" class="span11">
		                  <option value="">Select Role</option>
		                  <option value="admin" {{($editData->role=='admin')? "selected":""}}>Admin</option>
		                  <option value="user" {{($editData->role=='user')? "selected":""}}>User</option>
		                </select>
		              </div>
		            </div>
		            <div class="control-group">
		              <label class="control-label">Name :</label>
		              <div class="controls">
		                <input type="text" class="span11" placeholder="Name" name="name" value="{{$editData->name}}" required/>
		              </div>
		            </div>
		            <div class="control-group">
		              <label class="control-label">Email :</label>
		              <div class="controls">
		                <input type="email" class="span11" placeholder="Email" name="email" value="{{$editData->email}}" required/>
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
 </div>
</div>

@endsection