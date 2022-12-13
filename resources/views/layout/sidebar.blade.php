<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index" class="brand-link">
      {{-- <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">Prime Sports Turf Booking</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('/images/AdminLTELogo.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


          <li class="nav-item has-treeview menu-open">
            <a href="{{ route('home') }}" class="nav-link {{ request()->is('home') ? 'active' : '' }}{{ request()->is('/') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Home
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
            {{-- <ul class="nav nav-treeview"> --}}
              {{-- <li class="nav-item">
                <a href="./index" class="nav-link {{ request()->is('index') ? 'active' : '' }}{{ request()->is('/') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li> --}}
              {{-- <li class="nav-item">
                <a href="./index2" class="nav-link {{ request()->is('index2') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3" class="nav-link {{ request()->is('index3') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li> --}}
            {{-- </ul> --}}
          </li>


          {{-- <li class="nav-item has-treeview menu-open">
            <a href="{{ route('ledger_category.index') }}" class="nav-link {{ request()->is('ledger_category') ? 'active' : '' }} ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Category
              </p>
            </a>

          </li> --}}



          {{-- <li class="nav-item has-treeview menu-open">
            <a href="{{ route('users.index') }}" class="nav-link {{ request()->is('users') ? 'active' : '' }} ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                UsersManagement
              </p>
            </a>
          </li> --}}
          <li class="nav-item has-treeview menu-open">
            <a href="{{ route('turf-management.index') }}" class="nav-link {{ request()->is('admin/turf-management') ? 'active' : '' }} ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Turf Management
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="{{ route('slot-specs.index') }}" class="nav-link {{ request()->is('admin/slot-specs') ? 'active' : '' }} ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Special Days Management
              </p>
            </a>

          </li>


          <li class="nav-item has-treeview menu-open">
            <a href="{{ route('slot-type.index') }}" class="nav-link {{ request()->is('admin/slot-type') ? 'active' : '' }} ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Slot Type Management
              </p>
            </a>

          </li>


          <li class="nav-item has-treeview menu-open">
            <a href="{{ route('slot.index') }}" class="nav-link {{ request()->is('admin/slot') ? 'active' : '' }} ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Slot Management
              </p>
            </a>

          </li>



          <li class="nav-item has-treeview menu-open">
            <a href="{{ route('settings.index') }}" class="nav-link {{ request()->is('admin/settings') ? 'active' : '' }} ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Settings
              </p>
            </a>

          </li>

          <li class="nav-item has-treeview menu-open">
            <a onclick="myFunction()" class="nav-link {{ request()->is('logout') ? 'active' : '' }}">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                    Logout
                    <i class="right fas "></i>
                </p>
            </a>

        </li>








        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <script>
    function myFunction() {
        let text = "Do you want to logout!!";
        if (confirm(text) == true) {
            window.location.assign("logout")
        } else {

        }

    }
</script>
