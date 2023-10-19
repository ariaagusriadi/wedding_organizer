@php
    function check($route)
    {
        if (Route::current()->uri == $route) {
            return 'active';
        }
    }
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ url('admin') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('admin/jasa-perushaan') }}" class="nav-link {{ check('admin/jasa-perushaan') }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Jasa Perusahaan
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ url('admin/daftar-client') }}" class="nav-link {{ check('admin/daftar-client') }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Daftar Client
                        </p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="{{ url('admin/galery-foto') }}" class="nav-link {{ check('admin/galery-foto') }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Galery Foto
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/article') }}" class="nav-link {{ check('admin/article') }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Artikel
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ url('admin/event') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Event
                        </p>
                    </a>
                </li> --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
