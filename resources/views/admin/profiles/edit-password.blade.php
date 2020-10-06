@extends('admin.master')

@section('content')
<div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
	 <div class="widget-box">
	 	<div class="widget-title" style="float: right;"> 
            <a href="{{route('profiles.view')}}" class="btn btn-success"><i class="icon-user"></i>Your Profile</a>
          </div>
          <div class="widget-title"> <span class="icon"><i class="icon-edit"></i></span>
            <h5>Change Password</h5> 
          </div>

          <div class="span7">
          	<div class="widget-content nopadding">
		          <form data-parsley-validate action="{{route('profiles.password.update')}}" method="post" class="form-horizontal">
		          	@csrf

		          	  <div class="control-group">
		              <label class="control-label">Current Password :</label>
		              <div class="controls">
		                <input type="password" class="span11" id="current_password" placeholder="Current Password" name="current_password" required/>
		              </div>
		            </div>
		          	

		             <div class="control-group">
		              <label class="control-label">New Password :</label>
		              <div class="controls">
		                <input type="password" class="span11" id="new_password" placeholder="New Password" name="new_password" required/>
		              </div>
		            </div>
		           
		           <div class="control-group">
		              <label class="control-label">Confirm Password :</label>
		              <div class="controls">
		                <input type="password" class="span11" id="password" placeholder="Confirm Password" name="password2" required/>
		              </div>
		            </div>
		            
		            <div class="form-actions">
		              <button type="submit" class="btn btn-success">Update Password</button>
		            </div>
		          </form>
		        </div>

          </div>
          	

        </div>
     </div>
 </div>
</div>

@endsection