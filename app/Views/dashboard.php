<?=$this->extend('layout/template');?>
<?=$this->section('content');?>

<div class="container-fluid">
    <div id="pesan" data-pesan="<?=session()->getFlashdata('pesan')?>"></div>
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-gradient-blue">
                <div class="inner">
                    <h3><?=esc($produk)?></h3>
<<<<<<< HEAD
                    <p>Stok Persediaan</p>
=======
                    <p>Item Produk</p>
>>>>>>> 78080d95a381764113e8bdbbb683635f306c9000
                </div>
                <div class="icon">
                    <i class="fas fa-cube"></i>
                </div>
                <a href="<?=base_url('item')?>" class="small-box-footer">
                    Selengkapnya <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-gradient-green">
                <div class="inner">
                    <h3><?=esc($pemasok)?></h3>
<<<<<<< HEAD
                    <p>Supplier</p>
=======
                    <p>Pemasok</p>
>>>>>>> 78080d95a381764113e8bdbbb683635f306c9000
                </div>
                <div class="icon">
                    <i class="fas fa-truck"></i>
                </div>
                <a href="<?=base_url('pemasok')?>" class="small-box-footer">
                    Selengkapnya <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-gradient-maroon">
                <div class="inner">
                    <h3><?=esc($pelanggan)?></h3>
                    <p>Pelanggan</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="<?=base_url('pelanggan')?>" class="small-box-footer">
                    Selengkapnya <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-gradient-purple">
                <div class="inner">
                    <h3><?=esc($pengguna)?></h3>
                    <p>Pengguna</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <a href="<?=base_url('user')?>" class="small-box-footer">
                    Selengkapnya <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <!-- Total Penjualan -->
            <div class="card">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
<<<<<<< HEAD
                        <h3 class="card-title">Total Penjualan <?= date('Y') ?></h3>
                        <a href="<?=base_url('laporan/bulanan')?>">Lihat Laporan</a>
=======
                        <h3 class="card-title">Total Penjualan</h3>
                        <a href="javascript:void(0);">Lihat Laporan</a>
>>>>>>> 78080d95a381764113e8bdbbb683635f306c9000
                    </div>
                </div>
                <div class="card-body">
                    <div class="position-relative mb-4">
                        <canvas id="laporan-penjualan" height="100"></canvas>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
</div><!-- /.container-fluid -->
<?=$this->endSection();?>

<?=$this->section('js');?>
<script src="<?=base_url('plugins/chart.js/Chart.min.js')?>"></script>
<script src="<?=base_url('js/dashboard.js')?>"></script>
<?=$this->endSection();?>