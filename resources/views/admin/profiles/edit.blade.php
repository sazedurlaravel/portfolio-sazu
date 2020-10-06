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
            <h5>Edit Profile</h5> 
          </div>

           <img id="showImage" class="card-img-top" src="{{(!empty($user->image))? url('images/users/'.$user->image):url('images/profile.png')}}" alt="User image">
            <div class="address">

          <div class="span7">
            <div class="widget-content nopadding">
              <form  action="{{route('profiles.update')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                @csrf

                <div class="control-group">
                  <label class="control-label">Name :</label>
                  <div class="controls">
                    <input type="text" class="span11" placeholder="Name" name="name"   value="{{$user->name}}"/>
                    
                  </div>
                </div>
                 <div class="control-group">
                  <label class="control-label">Select Gender</label>
                  <div class="controls">
                    <select name="gender" class="span11">
                      <option value="">Select Gender</option>
                      <option value="Male" {{($user->gender=='Male')? "selected":""}}>Male</option>
                      <option value="Female" {{($user->gender=='Female')? "selected":""}}>Female</option>
                    </select>
                  </div>
                </div>
                
                <div class="control-group">
                  <label class="control-label">Email :</label>
                  <div class="controls">
                    <input type="email" class="span11" placeholder="Email" name="email"  value="{{$user->email}}"/>
                  </div>
                </div>

                 <div class="control-group">
                  <label class="control-label">Mobile :</label>
                  <div class="controls">
                    <input type="text" class="span11"  placeholder="Mobile Number" name="mobile"  value="{{$user->mobile}}"/>
                  </div>
                </div>
               
               <div class="control-group">
                  <label class="control-label">Address:</label>
                  <div class="controls">
                    <input type="text" class="span11" placeholder="Address" name="address"  value="{{$user->address}}"/>
                  </div>
                </div>

                 <div class="control-group">
                    <label class="control-label">Profile Picture</label>
                    <div class="controls">
                      <input type="file" name="image" id="image" />
                    </div>
                  </div>


                
                <div class="form-actions">
                  <button type="submit" class="btn btn-success">Update Profile</button>
                </div>
              </form>
            </div>

          </div>
            

        </div>
     </div>
 </div>
</div>

@endsection