<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4" style="background: linear-gradient(135deg, rgba(17, 98, 203, 1) 0%, rgba(37, 117, 252, 1) 100%);">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link mb-3" style="border-bottom: 1px solid rgba(255,255,255,0.2);height: 60px;">
        <img src="{{ asset('') }}dist/img/Logo.png" alt="KasirQ Logo"
            class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light" style="color: rgba(255,255,255,0.95);">KasirQ</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="position: relative;">
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search" style="background: rgba(255,255,255,0.15); border: none; color: rgba(255,255,255,0.95);">
                <style>
                    .form-control-sidebar::placeholder {
                        color: rgba(255,255,255,0.75) !important;
                    }
                </style>
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
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link" style="color: rgba(255,255,255,0.95);">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('produk.index') }}" class="nav-link" style="color: rgba(255,255,255,0.95);">
                        <i class="nav-icon fas fa-box"></i>
                        <p>
                            Produk
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('penjualan.index') }}" class="nav-link" style="color: rgba(255,255,255,0.95);">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Penjualan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('produk.logproduk') }}" class="nav-link" style="color: rgba(255,255,255,0.95);">
                        <i class="nav-icon fas fa-history"></i>
                        <p>
                            Log Produk
                        </p>
                    </a>
                </li>
                @if (Auth::user()->role == 'admin')
                <li class="nav-item">
                    <a href="{{ route('manage-user.index') }}" class="nav-link" style="color: rgba(255,255,255,0.95);">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>
                            Manage User
                        </p>
                    </a>
                </li>
                @endif
                <li class="nav-item mt-3" style="border-top: 1px solid rgba(255,255,255,0.2);">
                    <a href="{{ route('logout') }}" class="nav-link mt-3" style="color: rgba(255,255,255,0.95);">
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
