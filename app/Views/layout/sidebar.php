<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="javascript:void(0)" class="brand-link">
        <i class="fas fa-shopping-cart fa-2x text-info"></i>
        <span class="brand-text font-weight-light"><?= get_pengaturan('nama_toko'); ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('uploads/profile/' . esc(get_user('avatar'))) ?>" class="img-circle elevation-2 avatar">
            </div>
            <div class="info">
                <a href="javascript:void(0)" class="d-block"><?= esc(get_user('nama')); ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column text-sm" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= base_url('dashboard') ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Dashboard </p>
                    </a>
                </li>

                <?php if (esc(get_user('id_role') == 1) || esc(get_user('id_role') == 2)) : ?>
                    <li class="nav-item">
                        <a href="<?= base_url('pemasok') ?>" class="nav-link">
                            <i class="nav-icon fas fa-truck"></i>
<<<<<<< HEAD
                            <p> Supplier </p>
=======
                            <p> Pemasok </p>
>>>>>>> 78080d95a381764113e8bdbbb683635f306c9000
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('pelanggan') ?>" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p> Pelanggan </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link">
                            <i class="nav-icon fas fa-cube"></i>
<<<<<<< HEAD
                            <p> Menu <i class="right fas fa-angle-left"></i></p>
=======
                            <p> Master <i class="right fas fa-angle-left"></i></p>
>>>>>>> 78080d95a381764113e8bdbbb683635f306c9000
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url('kategori') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kategori</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('unit') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Unit</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('item') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Item</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php endif ?>

                <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link">
                        <i class="nav-icon fas fa-cart-plus"></i>
                        <p> Transaksi <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('penjualan') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Penjualan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('penjualan/invoice') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Invoice</p>
                            </a>
                        </li>
                        <?php if (esc(get_user('id_role') == 1)) : ?>
                            <li class="nav-item">
                                <a href="<?= base_url('stok/masuk') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Stok Masuk</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('stok/keluar') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Stok Keluar</p>
                                </a>
                            </li>
                        <?php endif; ?>

                    </ul>
                </li>
<<<<<<< HEAD
                <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link">
                        <i class="nav-icon fas fa-scroll"></i>
                        <p> Laporan <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('laporan/harian') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Harian</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('laporan/mingguan') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mingguan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('laporan/bulanan') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bulanan</p>
                            </a>
                        </li>

                    </ul>
                </li>
=======
>>>>>>> 78080d95a381764113e8bdbbb683635f306c9000
                <li class="nav-header">Administrator</li>
                <li class="nav-item">
                    <a href="<?= base_url('user/profile') ?>" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <?php if (esc(get_user('id_role') == 1)) : ?>
                    <li class="nav-item">
                        <a href="<?= base_url('user') ?>" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Pengguna</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('pengaturan') ?>" class="nav-link">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>Pengaturan</p>
                        </a>
                    </li>
                <?php endif ?>
                <li class="nav-item">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-logout" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>