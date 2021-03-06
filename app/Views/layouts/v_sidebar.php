<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url() ?>" class="brand-link navbar-teal">
        <img src="<?= base_url('gambar/Logopusriaja-kecil.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SDM PUSRI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('gambar/Logopusriaja-kecil.png') ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Ali Sulas Hidayat</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v2</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('fakultas') ?>" class="nav-link">
                        <i class="nav-icon fas fa-university"></i>
                        <p>Unit Kerja</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('barang') ?>" class="nav-link">
                        <i class="nav-icon fas fa-baby"></i>
                        <p>Training Need Analysis</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="<?= base_url('obat') ?>" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Pelatihan</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="<?= base_url('gedung') ?>" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Ujian Grade</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="<?= base_url('sertifikasi') ?>" class="nav-link">
                        <i class="nav-icon fas fa-layer-group"></i>
                        <p>KKJ</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-address-card"></i>
                        <p>Sertifikasi<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('sertifikasi') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Semua Sertifikasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('sertifikasi/kadaluarsa') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sertifikasi Kadaluarsa</p>
                            </a>
                        </li>
                    </ul>
                </li>






            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>