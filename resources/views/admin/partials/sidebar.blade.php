

<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="{{route('home')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>

    @if(Auth::user()->role=='admin')
    <li class="submenu"> <a href="#"><i class="icon-plus-sign"></i> <span>Manage User</span> <span class="label label-important">1</span></a>
          <ul>
            <li><a href="{{route('users.view')}}">View User</a></li>
          </ul>
        </li>
    @endif

      <li class="submenu"> <a href="#"><i class="icon-plus-sign"></i> <span>Profile Update</span> <span class="label label-important">1</span></a>
          <ul>
            <li><a href="{{route('profiles.view')}}">Your Profile</a></li>
          </ul>
          <ul>
            <li><a href="{{route('profiles.password.view')}}">Change Password</a></li>
          </ul>
        </li>
      
       <li class="submenu"> <a href="#"><i class="icon-plus-sign"></i> <span>Mabage Category</span> <span class="label label-important">1</span></a>
          <ul>
            <li><a href="{{route('category.view')}}">View Category</a></li>
          </ul>
          <ul>
            <li><a href="{{route('category.add')}}">Add Category</a></li>
          </ul>
        </li>

         <li class="submenu"> <a href="#"><i class="icon-plus-sign"></i> <span>Mabage Project</span> <span class="label label-important">1</span></a>
          <ul>
            <li><a href="{{route('project.view')}}">View Project</a></li>
          </ul>
          <ul>
            <li><a href="{{route('project.add')}}">Add Project</a></li>
          </ul>
        </li>

        
   
  </ul>
</div>