<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand BNN Klinik Sleman Admin -->
    <a href="#" class="brand-link">
        <img src="{{ asset('assets/img/logo.png') }}" alt="DPTR Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">BNN Klinik Sleman</span>
    </a>
    <!-- Brand BNN Klinik Sleman Admin -->

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-header">Menu</li>
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-edit"></i>
                        <p>
                            Pendaftaran Pasien
                            <i class="fas fa-angle-left right"></i>
                        </p>

                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="font-size: 14px">Pasien Baru</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="font-size: 14px">Pasien Lama</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="/artikel" class="nav-link">
                        <i class="nav-icon fas fa-bookmark"></i>
                        <p>
                            Artikel Berita
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/artikel" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="font-size: 14px">Tabel Berita</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/artikel/kategori" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="font-size: 14px">Kategori Berita</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/logout" class="nav-link">
                        <i class="nav-icon fas bi-box-arrow-right"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
        </nav>
        <!-- End Sidebar Menu -->
    </div>
    <!-- /.sidebar -->
</aside>
