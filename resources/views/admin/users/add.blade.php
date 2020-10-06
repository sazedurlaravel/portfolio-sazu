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
            <h5>Add User</h5> 
          </div>

          <div class="span7">
          	<div class="widget-content nopadding">
		          <form data-parsley-validate action="{{route('users.store')}}" method="post" class="form-horizontal">
		          	@csrf

		          	 <div class="control-group">
		              <label class="control-label">Select Role</label>
		              <div class="controls">
		                <select name="role" class="span11">
		                  <option value="">Select Role</option>
		                  <option value="admin">Admin</option>
		                  <option value="user">User</option>
		                </select>
		              </div>
		            </div>
		            <div class="control-group">
		              <label class="control-label">Name :</label>
		              <div class="controls">
		                <input type="text" class="span11" placeholder="Name" name="name" required/>
		                <font style="color:red;">{{($errors->has('name'))? ($errors->first('name')):""}}</font>
		              </div>
		            </div>
		            <div class="control-group">
		              <label class="control-label">Email :</label>
		              <div class="controls">
		                <input type="email" class="span11" placeholder="Email" name="email" required/>
		              </div>
		            </div>

		             <div class="control-group">
		              <label class="control-label">Password :</label>
		              <div class="controls">
		                <input type="password" class="span11" id="password" placeholder="Password" name="password" required/>
		              </div>
		            </div>
		           
		           <div class="control-group">
		              <label class="control-label">Confirm Password :</label>
		              <div class="controls">
		                <input type="password" class="span11" id="password" placeholder="Confirm Password" name="password2" required/>
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
</div>

@endsection