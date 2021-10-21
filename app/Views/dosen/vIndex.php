<?= $this->extend('templates/layout'); ?>

<!-- bagian konten -->
<?= $this->section('content'); ?>

<div class="wrapper">

    <!-- memanggil top-menu -->
    <?= $this->include('templates/topbar'); ?>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?= base_url(); ?>/magang/dosen/userDosen/index" class="brand-link">
            <img src="<?= base_url(); ?>/dist/img/MainLogo.png" alt="Main Logo" class="brand-image">
            <span class="brand-text font-weight-light">S I M A G A</span>
        </a>

        <!-- memanggil menu utama -->
        <?= $this->include('mahasiswa/vMenu'); ?>

    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5></h5>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Breadcrumb</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- main column -->

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Title</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                Halaman Dosen <br>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (main) -->

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- memanggil copyright -->
    <?php echo getCopyright(); ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- akhir bagian konten -->
<?= $this->endSection(); ?>