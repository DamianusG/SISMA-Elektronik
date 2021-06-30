<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="../../assets/dist/img/LogoUnsada.png" alt="Unsada Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SISMAEL</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Would be User Name</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('barang.index') }}" class="nav-link">
              <i class="nav-icon fas fa-archive"></i>
              <p>
                List Barang
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('pembeli.index') }}" class="nav-link">
              <i class="nav-icon fas fa-child"></i>
              <p>
                List Pembeli
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('transaksi.index') }}" class="nav-link">
              <i class="nav-icon fas fa-cart-plus"></i>
              <p>
                List Transaksi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('pegawai.index') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                List Pegawai
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="nav-icon fas fa-laptop"></i>
              <p>
                Report
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>