<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('template/header.php'); ?>
    <title>Tambah Nilai</title>

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
                        <h1 class="h3 mb-0 text-gray-800">Input Nilai</h1>

                    </div>
                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 text-primary">Tambahkan Nilai - <span class="m-0 font-weight-bold text-primary"><?= $this->session->userdata('nama')?></span></h6>
                        </a>
                        <div class="collapse show" id="collapseCardExample">
                            <div class="card-body">
                                <?php if($this->session->flashdata('success') == TRUE){ ?>
                                    <div class="alert bg-success text-white">Data Berhasil Ditambahkan !</div>
                                <?php }else if($this->session->flashdata('wrong') == FALSE){ ?>
                                    <div class="alert bg-danger text-white">Data Tidak Bisa Ditambahkan Lagi !  Silahkan Edit Nilai Jika Salah</div>
                                    <div class="text-right">
                                        <a href="<?= base_url('User/edit/'.$this->session->userdata('id'));?>">
                                            <button type="submit" class="btn btn-primary btn-user">Edit Nilai</button>
                                        </a>
                                    </div>
                                <?php } ?>
                                
                                <form class="user" method="post" action="<?= base_url('User/createNilai')?>">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="id_user" value="<?= $this->session->userdata('id')?>">
                                    </div>


                                    <div class="form-group">
                                        <p style="margin-left:1%;">Matematika</p>
                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Nilai" name="matematika">
                                        <?= form_error('matematika', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>

                                    <div class="form-group">
                                        <p style="margin-left:1%;">Indonesia</p>
                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Nilai" name="indonesia">
                                        <?= form_error('indonesia', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>

                                    <div class="form-group">
                                        <p style="margin-left:1%;">IPA</p>
                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Nilai" name="ipa">
                                        <?= form_error('ipa', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>

                                    <div class="form-group">
                                        <p style="margin-left:1%;">Inggris</p>
                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Nilai" name="inggris">
                                        <?= form_error('inggris', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>


                                    <button name="submit" type="submit" class="btn btn-primary btn-user btn-block">Tambah Nilai</button>
                                </form>

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
