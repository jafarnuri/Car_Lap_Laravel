<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.home')}}">
        <i class="fa fa-bars"></i>
        <span class="menu-title">Əsas səhifə</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
        aria-controls="form-elements">
        <i class="icon-columns menu-icon"></i>
        <span class="menu-title">Settings</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.services_show')}}">Service</a>
          </li>
        </ul>
      </div>
      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.about_show')}}">About</a>
          </li>
        </ul>
      </div>
      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.social_show')}}">Social Network</a>
          </li>
        </ul>
      </div>
      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.social_show')}}">Communication</a>
          </li>
        </ul>
      </div>

    </li>

    <li class="nav-item">
      <a class="nav-link" href="">
        <i class="fa fa-users"></i>
        <span class="menu-title">Users</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="">
        <i class="fa fa-users"></i>
        <span class="menu-title">Contact</span>
      </a>
    </li>



    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.car')}}">
        <i class="fa fa-car"></i>
        <span class="menu-title">Cars</span>
      </a>
    </li>









  </ul>
</nav>