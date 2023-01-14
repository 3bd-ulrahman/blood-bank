<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="{{ route('dashboard.home') }}" class="brand-link">
    <img src="{{ asset('dashboard/img/blood-bank-icon.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">BloodBank</span>
  </a>

  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('dashboard/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        @auth('admin')
          <a href="#" class="d-block">
            {{ auth('admin')->user()->name }}
          </a>
        @endauth
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">

          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Posts
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>

          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="{{ route('dashboard.posts.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>List Posts</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('dashboard.posts.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Post</p>
              </a>
            </li>
          </ul>

        </li>

      </ul>
    </nav>

  </div>
</aside>
