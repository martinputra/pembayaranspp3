<div class="fixed">
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ url('/dashboard') }}" class="brand-link  d-flex mt-1">
        <img src="{{ asset('img/pembayaranspp.png') }}" alt="PembayaranSPP logo" class="brand-image img-circle elevation-3 mb-2" style="opacity: 8">
        <span class="brand-text font-weight-light">Pembayaran<b>SPP</b></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar p-2">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-2 pb-3 mb-2 d-flex">
          <div class="image">
            <img src="{{ asset('img/2.jpg') }}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  Menu Data
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href=" {{ url('crud-siswa')}} " class="nav-link">
                    <i class="fas fa-user-graduate ml-3"></i>
                    <p class="ml-2"> Crud Siswa</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-user-tie ml-3"></i>
                    <p class="ml-2">Crud Petugas</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-door-open ml-3"></i>
                    <p class="ml-1">Crud Kelas</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href=" {{ url('crud-spp')}} " class="nav-link">
                    <i class="fas fa-book ml-3"></i>
                    <p class="ml-2">Crud Spp</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-comment-dollar"></i>
                <p>
                  Transaksi pembayaran
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-comments-dollar"></i>
                <p>
                  History pembayaran
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
                <p>
                  Laporan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
</div>