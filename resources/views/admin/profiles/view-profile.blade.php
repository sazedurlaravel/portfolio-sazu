@extends('admin.master')

@section('content')
<div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
          <div class="card" style="width: 100%;">
            <img class="card-img-top" src="{{(!empty($user->image))? url('images/users/'.$user->image):url('images/profile.png')}}" alt="User image">
            <div class="address">
              <h3>{{$user->name}}</h3>
              <h4>{{$user->address}}</h4>
            </div>
            <hr>
            <div class="card-body">
             <table class="table table-bordered data-table">
              <tbody>

               
                <tr>
                  <td>Gender: </td>
                  <td>{{$user->gender}} </td>
                </tr>
                <tr>
                  <td>Email :</td>
                  <td>{{$user->email}}</td>
                </tr>
                <tr>
                  <td>Mobile :</td>
                  <td>{{$user->mobile}}</td>
                </tr>
        
              
              </tbody>

            </table> 
            <a href="{{route('profiles.edit')}}" class="btn btn-primary" style="width: 100%;">Edit Profile</a>
            </div>
          </div>
     </div>
 </div>
</div>

@endsection