    <!-- Sidebar -->
    <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
        <div class="sidebar-brand-icon rotate-n-15">
          <!-- <i class="fas fa-laugh-wink"></i> -->
        </div>
        <div class="sidebar-brand-text mx-3">Laraschool</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
     
      <div class="user-image text-center mt-2 mb-2 ">
      <img src="{{ asset('wp-school/user/image/' . Auth::user()->photo )}}" class="rounded-circle" alt="profile" style="width:100px;height:100px;">
      <h4 class="text-white">{{Auth::user()->name}}</h4>
      </div>
     
      <hr class="sidebar-divider my-0">


      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="/dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/forum">
          <i class="fas fa-fw fa-comments"></i>
          <span>Forum</span></a>
      </li>

      @if(Auth::user()->role=="siswa")
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="/siswa/profile">
          <i class="fas fa-user"></i>
          <span>Profile</span></a>
      </li>

      @endif

    @if(Auth::user()->role=="admin")
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
      <a class="nav-link" href="/users">
        <i class="fas fa-fw fa-users"></i>
        <span>User</span></a>
    </li>


    <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="/siswa">
          <i class="fas fa-fw fa-users"></i>
          <span>Siswa</span></a>
      </li>

      @endif
    
      <hr class="sidebar-divider my-0">




      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
