<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="{{route('dashboard.index')}}">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>
<li class="dropdown">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>User Management</span></a>
    <ul class="dropdown-menu" style="display: none;">
      <li><a class="nav-link" href="{{route('user.index')}}">Users</a></li>
      {{-- <li><a class="nav-link" href="{{route('permission.index')}}">Permision</a></li>
      <li><a class="nav-link" href="{{route('role.index')}}">Roles</a></li> --}}
    </ul>
  </li>
  <!-- add menu -->
  <li class="dropdown">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-hospital-user"></i> <span>Patient Management</span></a>
    <ul class="dropdown-menu" style="display: none;">
    <li><a class="nav-link" href="{{route('patient.index')}}">Patient List</a></li>
    <li><a class="nav-link" href="{{route('department.index')}}">Departments</a></li>
    </ul>
  </li>
  <li class="dropdown">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-file-prescription"></i> <span>Consultation</span></a>
    <ul class="dropdown-menu" style="display: none;">
    <!-- <li><a class="nav-link" href="{{route('consultation.index')}}">Minor Complaints</a></li> -->
    <li><a class="nav-link" href="{{route('intervention.index')}}">Intervention</a></li>
 
   
    </ul>
  </li>