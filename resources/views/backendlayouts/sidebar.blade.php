 <!-- Sidebar -->
   <div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
      
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="dark ml-2">
        <a href="#" class="logo text-light">
          <img
            src="{{asset('assets/img/kaiadmin/rvg.png')}}"
           
            alt="navbar brand"
            class="navbar-brand"
            height="50"
          />
        </a>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar">
            <i class="gg-menu-right"></i>
          </button>
          <button class="btn btn-toggle sidenav-toggler">
            <i class="gg-menu-left"></i>
          </button>
        </div>
        <button class="topbar-toggler more">
          <i class="gg-more-vertical-alt"></i>
        </button>
      </div>
      <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
      <div class="sidebar-content">
        <ul class="nav nav-secondary">
          <li class="nav-item active">
            <a class="{{request()->routeIs('admin.dashbord') ? 'bg-info' : 'text-white'}}" href="{{route('admin.dashbord')}}"> <i class="fas fa-home"></i> <p>Dashboard</p></a>
          </li>
          <li class="nav-item active">
            <a class="{{request()->routeIs('logout') ? 'bg-info' : 'text-white' }}" href="{{route('logout')}}"> <i class="fas fa-home"></i> <p>Logout</p></a>
          </li>
          <li class="nav-item active">
            <a class="{{request()->routeIs('changepassword')? 'bg-info':'text-white'}}"href="{{route('changepassword')}}"><i class="fas fa-table"></i><p>Change-Password</p> </a>
          </li>
          <li class="nav-item active">
            <a class="{{request()->routeIs('feedback') ? 'bg-info' : 'text-white' }}" href="{{route('feedback')}}"> <i class="fas fa-home"></i> <p>Home</p></a>
          </li>
          {{-- <li class="fas fa-home mx-2"><a href="{{route('admin.dashbord')}}"><p>Dashbord</p></a></li> --}}
          <li class="nav-item active">
            <a class="{{ request()->routeIs('warentycard.index') ? 'bg-info' : 'text-white' }}" href="{{ route('warentycard.index') }}"><i class="fas fa-table"></i>
              <p>Warranty Card</p>
          </a>
          </li>
          <li class="nav-item active">
            <a class="{{request()->routeIs('complain.index')? 'bg-info' : 'text-white'}}" href="{{route('complain.index')}}"><i class="fas fa-table"></i><p>Complain Form</p> </a>
          </li>
          <li class="nav-item active">
            <a class="{{request()->routeIs('userregister.index')? 'bg-info' : 'text-white'}}" href="{{route('userregister.index')}}"><i class="fas fa-table"></i><p>User Inquiry Form</p> </a>
          </li>
          <li class="nav-item active">
            <a class="{{request()->routeIs('feedback.index')? 'bg-info':'text-white'}}"href="{{route('feedback.index')}}"><i class="fas fa-table"></i><p>Feedback</p> </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Sidebar -->
