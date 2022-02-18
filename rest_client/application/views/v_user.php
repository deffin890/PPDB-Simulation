<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('template/header.php'); ?>
    <title>Halaman Siswa</title>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view('template/sidebar.php'); ?>

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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard Siswa</h1>

                    </div>

                    <?php if($this->session->flashdata('wrong') == TRUE){ ?>
                    <div class="alert bg-warning text-white">Mohon Untuk Memasukan Nilai Terlebih Dahulu !</div>
                    <?php }else{
                        foreach($user->{'data'} as $u){
                            if($u->status_lulus == 0){ ?>
                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 text-primary">Status Diterima/Tidak Diterima </h6>
                        </a>
                        <div class="collapse show" id="collapseCardExample">
                            <div class="card-body">
                                <h3 class="text-center">Mohon Maaf <span class="m-0 font-weight-bold"><?= $this->session->userdata('nama')?></span> Harus Menunggu Terlebih Dahulu</h3>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 text-primary">Data Nilai - <span class="m-0 font-weight-bold text-primary"><?= $this->session->userdata('nama')?></span></h6>
                        </a>
                        <div class="collapse show" id="collapseCardExample">
                            <div class="card-body">
                                <div class="chart-bar">
                                    <canvas id="myBarChart"></canvas>
                                </div>
                                <hr>
                                Statistika Grafik <code>Nilai</code>.
                            </div>
                        </div>
                    </div>
                    <?php }else if($u->status_lulus == 1){ ?>
                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 text-primary">Status Diterima/Tidak Diterima - <span class="m-0 font-weight-bold text-primary"><?= $this->session->userdata('nama')?></span></h6>
                        </a>
                        <div class="collapse show" id="collapseCardExample">
                            <div class="card-body">
                                <h3 class="text-center">Mohon Maaf <span class="m-0 font-weight-bold"><?= $this->session->userdata('nama')?></span> Tidak Diterima Di Jurusan Ilmu Komputer</h3>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 text-primary">Data Nilai - <span class="m-0 font-weight-bold text-primary"><?= $this->session->userdata('nama')?></span></h6>
                        </a>
                        <div class="collapse show" id="collapseCardExample">
                            <div class="card-body">
                                <div class="chart-bar">
                                    <canvas id="myBarChart"></canvas>
                                </div>
                                <hr>
                                Statistika Grafik <code>Nilai</code>.
                            </div>
                        </div>
                    </div>


                    <?php 
                        }else{ ?>
                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 text-primary">Status Diterima/Tidak Diterima - <span class="m-0 font-weight-bold text-primary"><?= $this->session->userdata('nama')?></span></h6>
                        </a>
                        <div class="collapse show" id="collapseCardExample">
                            <div class="card-body">
                                <h3 class="text-center">Selamat <span class="m-0 font-weight-bold"><?= $this->session->userdata('nama')?></span> Diterima Di Jurusan Ilmu Komputer !</h3>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 text-primary">Data Nilai - <span class="m-0 font-weight-bold text-primary"><?= $this->session->userdata('nama')?></span></h6>
                        </a>
                        <div class="collapse show" id="collapseCardExample">
                            <div class="card-body">
                                <div class="chart-bar">
                                    <canvas id="myBarChart"></canvas>
                                </div>
                                <hr>
                                Statistika Grafik  <code>Nilai</code>.
                            </div>
                        </div>
                    </div>
                   
                    <?php
                             }
                        }
                    } ?>



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

        function number_format(number, decimals, dec_point, thousands_sep) {
            // *     example: number_format(1234.56, 2, ',', ' ');
            // *     return: '1 234,56'
            number = (number + '').replace(',', '').replace(' ', '');
            var n = !isFinite(+number) ? 0 : +number,
                prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                s = '',
                toFixedFix = function(n, prec) {
                    var k = Math.pow(10, prec);
                    return '' + Math.round(n * k) / k;
                };
            // Fix for IE parseFloat(0.55).toFixed(0) = 0;
            s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
            }
            if ((s[1] || '').length < prec) {
                s[1] = s[1] || '';
                s[1] += new Array(prec - s[1].length + 1).join('0');
            }
            return s.join(dec);
        }

        <?php
            foreach($nilai->{'data'} as $u){
                $a = $u->matematika;
                $b = $u->ipa;
                $c = $u->indonesia;
                $d = $u->inggris;
            }
        ?>
        var mtk = <?= $a;  ?>;
        var ipa = <?= $b;  ?>;
        var indo = <?= $c;  ?>;
        var ing = <?= $d;  ?>;
        // Bar Chart Example
        var ctx = document.getElementById("myBarChart");
        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Matematika", "IPA", "Indonesia", "Inggris"],
                datasets: [{
                    label: "Nilai",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#2e59d9",
                    borderColor: "#4e73df",
                    data: [mtk, ipa, indo, ing],
                }],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 50,
                        right: 50,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'month'
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            maxTicksLimit: 6
                        },
                        maxBarThickness: 100,
                    }],
                    yAxes: [{
                        ticks: {
                            min: 10,
                            max: 100,
                            maxTicksLimit: 5,
                            padding: 10,
                            // Include a dollar sign in the ticks
                            callback: function(value, index, values) {
                                return number_format(value);
                            }
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }],
                },
                legend: {
                    display: false
                },
                tooltips: {
                    titleMarginBottom: 10,
                    titleFontColor: '#6e707e',
                    titleFontSize: 14,
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                    callbacks: {
                        label: function(tooltipItem, chart) {
                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                            return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
                        }
                    }
                },
            }
        });

    </script>
</body>

</html>
