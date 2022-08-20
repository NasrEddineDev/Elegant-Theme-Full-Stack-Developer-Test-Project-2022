<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="/dashboard">
          <img src="{{ asset('assets') }}/img/logotransparent-header.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('customers.index') }}">
                    <i class="fa fa-users text-primary"></i>
                    <span class="nav-link-text">Customers</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="ni ni-planet text-blue"></i> {{ __('Products') }}
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#">
                    <i class="ni ni-pin-3 text-orange"></i> {{ __('Contacts') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="ni ni-bullet-list-67 text-default"></i>
                  <span class="nav-link-text">Settings</span>
                </a>
              </li>
        </ul>
        </div>
      </div>
    </div>
  </nav>
