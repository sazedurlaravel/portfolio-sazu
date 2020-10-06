<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle">
      <i class="icon-user"></i>
      
      <span class="text">{{ Auth::user()->name }}</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="{{route('profiles.view')}}"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="{{route('profiles.edit')}}"><i class="icon-check"></i> Edit Profile</a></li>
        <li class="divider"></li>
        <li><a href="{{ route('logout') }}"
         onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();"><i class="icon-key"></i> Log Out</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
            </form>
         </li>
      </ul>
    </li>
   

  </ul>


</div>