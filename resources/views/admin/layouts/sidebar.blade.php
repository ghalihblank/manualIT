  <!-- Main Sidebar Container -->
  <aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="brand-link">
      <img src="{{ asset('backend/dist/img/manualit.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" >
      <div class="info">
        <span class="brand-text font-weight-light">Manual IT</span>
      </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- foto 
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            -->
        </div>
        <div class="info">
          <a class="d-block"><h4><?php $user = Auth::user(); print($user->name) ?></h4></a>
          <a class="d-block"><?php $user = Auth::user(); print($user->smg) ?> - <?php $user = Auth::user(); print($user->cabang) ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/" class="nav-link">
            <!-- <a href="#" class="nav-link active"> -->
              <i class="fas fa-tachometer-alt"  aria-hidden="true" style="font-size:1.6em;margin-right:10px;"></i>
              <p>
                Dashboard
                <!-- panah dropdown <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          
          <!-- Menu Sparepart -->
          <li class="nav-item">
            <a href="#" class="nav-link">
            <!-- <a href="#" class="nav-link active"> -->
              <i class="fa fa-list" aria-hidden="true" style="font-size:1.6em;margin-right:10px;"></i>
              <p>Sparepart
              <i class="right fas fa-angle-left"></i>
                <!-- panah dropdown <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/sp01" class="nav-link">
                  <div style="width:10%;float:left;margin-left:20px;margin-right:5px">
                    <i class="fas fa-cubes"></i>
                  </div>
                  <p>Cek Stok Sparepart</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <div style="width:10%;float:left;margin-left:20px;margin-right:5px">
                    <i class="fas fa-shopping-bag"></i>
                  </div>
                  <p>Daftar Pesanan Part</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/sp03" class="nav-link">
                  <div style="width:10%;float:left;margin-left:20px;margin-right:5px">
                    <i class="fas fa-chart-line"></i>
                  </div>
                  <p>Rekap Penjualan</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Menu Unit -->
          <li class="nav-item">
            <a href="#" class="nav-link">
            <!-- <a href="#" class="nav-link active"> -->
              <i class="fa fa-motorcycle" aria-hidden="true"  style="font-size:1.6em;margin-right:10px;"></i>
              <p>
                Unit
                <i class="right fas fa-angle-left" ></i>
                <!-- panah dropdown <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <div style="width:10%;float:left;margin-left:20px;margin-right:5px">
                    <i class="fas fa-sitemap"></i>
                  </div>
                  <p>Cek Stok Unit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <div style="width:10%;float:left;margin-left:20px;margin-right:5px">
                    <i class="fas fa-chart-line"></i>
                  </div>
                  <p>Rekap Penjualan</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Menu Servis -->
          <li class="nav-item">
            <a href="#" class="nav-link">
            <!-- <a href="#" class="nav-link active"> -->
              <i class="fa fa-cogs" aria-hidden="true"  style="font-size:1.6em;margin-right:10px;"></i>
              <p>
                Servis
                <i class="right fas fa-angle-left"></i>
                <!-- panah dropdown <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <div style="width:10%;float:left;margin-left:20px;margin-right:5px">
                    <i class="fas fa-chart-line"></i>
                  </div>
                  <p>Rekap Servis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <div style="width:10%;float:left;margin-left:20px;margin-right:5px">
                    <i class="far fa-address-card"></i>
                  </div>
                  <p>History Pelanggan</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- menu admin -->
          <li class="nav-item">
            <a href="#" class="nav-link">
            <!-- <a href="#" class="nav-link active"> -->
              <i class="nav-icon fa fa-users" aria-hidden="true"  style="font-size:1.6em;margin-right:10px;"></i>
              <p>
                Admin
                <i class="right fas fa-angle-left"></i>
                <!-- panah dropdown <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link">
                  <div style="width:10%;float:left;margin-left:20px;margin-right:5px">
                    <i class="fas fa-chart-line"></i>
                  </div>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('role.index') }}" class="nav-link">  
                  <div style="width:10%;float:left;margin-left:20px;margin-right:5px">
                    <i class="far fa-address-card"></i>
                  </div>
                  <p>Role</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('users.roles_permission') }}" class="nav-link">
                  <div style="width:10%;float:left;margin-left:20px;margin-right:5px">
                    <i class="fas fa-chart-line"></i>
                  </div>
                  <p>Role Permission</p>
                </a>
              </li>
            </ul>
          </li><!-- menu admin -->
        </ul>

          


        
      </nav> <!-- /.sidebar-menu --><!-- /.sidebar-menu -->
      



    </div> <!-- /.sidebar -->
    
      
         <!-- sidebar footer -->
        <div class="nav-link">
            <a href="https://wa.me/6282323784505" target="_blank">
                <i class="fab fa-whatsapp" style="font-size:1.6em;margin-right:10px;margin-left:10px;"></i>
                <span class="brand-text font-weight-light">Support</span>
            </a>
        </div> <!-- /.sidebar-custom -->

</aside>