

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
      <img src="{{url('/')}}/public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">MC Dialer</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('/')}}/public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{route('dashboard')}}" class="d-block">Admin Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Real Time Report
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('users')}}" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Users
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('list_log')}}" class="nav-link">
              <i class="nav-icon fa fa-list"></i>
              <p>
                List Details
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('disposition')}}" class="nav-link">
              <i class="nav-icon fa fa-list"></i>
              <p>
                Disposition Details
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('compaign')}}" class="nav-link">
              <i class="nav-icon fa fa-cogs"></i>
              <p>
                  Campaigns 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('reports')}}" class="nav-link">
                
              <i class="nav-icon fa fa-print"></i>
              
              <p>
                Report
              </p>
                 </a>
          </li>  
           <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-dial"></i>
               <p>
                Leads Status
              </p>
                 </a>
          </li> 
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-dial"></i>
               <p>
                Dial Status
              </p>
                 </a>
          </li> 
            <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-dial"></i>
               <p>
                Agent Performance
              </p>
                 </a>
          </li> 
           <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-dial"></i>
               <p>
                Dailing report
              </p>
                 </a>
          </li> 
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-dial"></i>
               <p>
                Voice Bulk Download
              </p>
                 </a>
          </li> 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
