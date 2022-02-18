<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('template/header.php'); ?>
    <title>Halaman Tim</title>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        if($this->session->userdata('username') == "admin"){
            $this->load->view('template/sidebar_admin.php'); 
        }else{
            $this->load->view('template/sidebar.php'); 
        }
        ?>

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
                        <h1 class="h3 mb-0 text-gray-800">Tentang Kami</h1>
                    </div>


                    <div class="row text-center my-4">
                        <div class="col-xl-4 offset-2">
                            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="<?= base_url('')?>img/deffin.jpg" alt="" width="200" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-1">DEFFIN ACHMAD DIFA</h5>
                                <h6 class="mb-0">1800912</h6>
                                <span class="small text-uppercase text-muted">FRONT END & BACK END</span>
                                <ul class="social mb-0 list-inline mt-3">
                                    <li class="list-inline-item"><a href="https://web.facebook.com/deffin.ahmaddiffa" class="social-link"><i class="fab fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="https://twitter.com/deffinad" class="social-link"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/deffinad/" class="social-link"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="<?= base_url('')?>img/azis.jpg" alt="" width="200" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-1">AZIS FAISAL MUHARAM</h5>
                                <h6 class="mb-0">1807262</h6>
                                <span class="small text-uppercase text-muted">WEB KONSEP & BACK END</span>
                                <ul class="social mb-0 list-inline mt-3">
                                    <li class="list-inline-item"><a href="https://web.facebook.com/azis.faisal.351" class="social-link"><i class="fab fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/azissfm/" class="social-link"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

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

</body>

</html>
