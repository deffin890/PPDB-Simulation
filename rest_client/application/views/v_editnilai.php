<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('template/header.php'); ?>
    <title>Edit Nilai</title>

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
                        <h1 class="h3 mb-0 text-gray-800">Edit Nilai</h1>

                    </div>
                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 text-primary">Update Nilai - <span class="m-0 font-weight-bold text-primary"><?= $this->session->userdata('nama')?></span></h6>
                        </a>
                        <div class="collapse show" id="collapseCardExample">
                            <div class="card-body">
                                <?php if($this->session->flashdata('hasil')){ ?>
                                    <?php if($this->session->flashdata('hasil') == TRUE){ ?>
                                        <div class="alert bg-success text-white">Data Berhasil Diubah !</div>
                                <?php } } ?>
                                
                                <?php foreach($data as $u){?>
                                <form class="user" method="post" action="<?= base_url('User/update_nilai')?>">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="id_user" value="<?= $u->id_user;?>">
                                    </div>


                                    <div class="form-group">
                                        <p style="margin-left:1%;">Matematika</p>
                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Nilai" name="matematika" value="<?= $u->matematika?>">
                                        <?= form_error('matematika', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>

                                    <div class="form-group">
                                        <p style="margin-left:1%;">Indonesia</p>
                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Nilai" name="indonesia" value="<?= $u->indonesia ?>">
                                        <?= form_error('indonesia', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>

                                    <div class="form-group">
                                        <p style="margin-left:1%;">IPA</p>
                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Nilai" name="ipa" value="<?= $u->ipa ?>">
                                        <?= form_error('ipa', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>

                                    <div class="form-group">
                                        <p style="margin-left:1%;">Inggris</p>
                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Nilai" name="inggris" value="<?= $u->inggris ?>">
                                        <?= form_error('inggris', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="hidden" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Nilai" name="status" value="<?= $u->status ?>">
                                    </div>


                                    <button name="submit" type="submit" class="btn btn-primary btn-user btn-block">Update Nilai</button>
                                </form>
                                <?php } ?>
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
