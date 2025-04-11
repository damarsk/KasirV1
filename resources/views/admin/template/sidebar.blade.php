<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4" style="background: linear-gradient(135deg, rgba(106, 17, 203, 0.95) 0%, rgba(37, 117, 252, 0.95) 100%);">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link" style="border-bottom: 1px solid rgba(255,255,255,0.2);">
        <img src="{{ asset('') }}dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .9">
        <span class="brand-text font-weight-light" style="color: rgba(255,255,255,0.95);">KasirLaravel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="border-bottom: 1px solid rgba(255,255,255,0.2);">
            <div class="image">
                <img src="{{ asset('') }}dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block" style="color: rgba(255,255,255,0.95);">{{ Auth()->user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search" style="background: rgba(255,255,255,0.15); border: none; color: rgba(255,255,255,0.95);">
                <div class="input-group-append">
                    <button class="btn btn-sidebar" style="background: rgba(255,255,255,0.15); border: none;">
                        <i class="fas fa-search fa-fw" style="color: rgba(255,255,255,0.95);"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link" style="color: rgba(255,255,255,0.95);">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('produk.index') }}" class="nav-link" style="color: rgba(255,255,255,0.95);">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Produk
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('penjualan.index') }}" class="nav-link" style="color: rgba(255,255,255,0.95);">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Penjualan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('produk.logproduk') }}" class="nav-link" style="color: rgba(255,255,255,0.95);">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Log Produk
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link" style="color: rgba(255,255,255,0.95);">
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
