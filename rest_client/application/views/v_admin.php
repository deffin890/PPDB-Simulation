<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('template/header.php'); ?>
    <title>Halaman Admin</title>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view('template/sidebar_admin.php'); ?>

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php $this->load->view('template/nav.php'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard Admin</h1>
                        <a href="<?= base_url('Admin/seleksi'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Lihat Hasil Seleksi</a>
                    </div>

                    <?php if($this->session->flashdata('cek_gagal')){ ?>
                    <?php if($this->session->flashdata('cek_gagal') == true){ ?>
                    <div class="alert bg-warning text-white">Pendaftar Belom Memenuhi Kuota</div>
                    <?php } ?>
                    <?php } ?>
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Pendaftar</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $user->{'data'};?> Orang</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-address-book fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Laki-Laki</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $cowo->{'data'};?> Orang</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-male fa-2x text-gray-300"></i>
                                            <i class="fas fa-mars fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Perempuan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $cewe->{'data'};?> Orang</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-female fa-2x text-gray-300"></i>
                                            <i class="fas fa-venus fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Kuota</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">10 Orang</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Pendaftar</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th>NAMA</th>
                                                        <th>TEMPAT LAHIR</th>
                                                        <th>TANGGAL LAHIR</th>
                                                        <th>JK</th>
                                                        <th>ALAMAT</th>
                                                        <th>MATEMATIKA</th>
                                                        <th>INDONESIA</th>
                                                        <th>IPA</th>
                                                        <th>INGGRIS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($alldata->{'data'} as $u){ ?>
                                                    <tr>
                                                        <td><?= $u->nama ?></td>
                                                        <td><?= $u->tempat_lahir ?></td>
                                                        <td><?= $u->tanggal_lahir ?></td>
                                                        <td><?= $u->jk ?></td>
                                                        <td><?= $u->alamat ?></td>
                                                        <td><?= $u->matematika ?></td>
                                                        <td><?= $u->indonesia ?></td>
                                                        <td><?= $u->ipa ?></td>
                                                        <td><?= $u->inggris ?></td>
                                                    </tr>
                                                    <?php }?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">

                        </div>
                    </div>

                    <?php if($this->session->flashdata('cek_sukses')){ ?>
                    <?php if($this->session->flashdata('cek_sukses') == true){ ?>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Pendaftar Yang Diterima</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th>USERNAME</th>
                                                        <th>NAMA</th>
                                                        <th>JENIS KELAMIN</th>
                                                        <th>JUMLAH</th>
                                                        <th>SAW</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($lulus->{'data'} as $u){ ?>
                                                    <tr>
                                                        <td><?= $u->username ?></td>
                                                        <td><?= $u->nama ?></td>
                                                        <td><?= $u->jk ?></td>
                                                        <td><?= $u->jumlah ?></td>
                                                        <td><?= $u->saw ?></td>
                                                    </tr>
                                                    <?php }?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary">Statistika Grafik</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="card-body">
                                        <div class="chart-pie pt-4">
                                            <canvas id="myPieChart"></canvas>
                                        </div>
                                        <hr>
                                        Grafik Pendaftar Yang <code>Diterima</code> & <code>Tidak Diterima</code>.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php } ?>

                </div>
                <!-- /.container-fluid -->


            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->load->view('template/footer.php'); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php $this->load->view('template/logoutmodal.php'); ?>

    <?php $this->load->view('template/js.php'); ?>

    <script>
        // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';

        // Pie Chart Example
        var lulus = <?= $countlulus->{'data'};?>;
        var tidak = <?= $counttidak->{'data'};?>;
        var ctx = document.getElementById("myPieChart");
        var myPieChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["Diterima", "Tidak Diterima"],
                datasets: [{
                    data: [lulus, tidak],
                    backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
                    hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                    hoverBorderColor: "rgba(234, 236, 244, 1)",
                }],
            },
            options: {
                maintainAspectRatio: false,
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                },
                legend: {
                    display: false
                },
                cutoutPercentage: 80,
            },
        });
    </script>
</body>

</html>