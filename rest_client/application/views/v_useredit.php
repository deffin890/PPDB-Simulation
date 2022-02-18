<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('template/header.php'); ?>
    <title>Edit Profile</title>

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
                        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
                    </div>
                    <!-- Collapsable Card Example -->
                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Profile</h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="collapseCardExample">
                            <div class="card-body">

                                <?php foreach($data as $u) {?>
                                <form class="user" method="post" action="<?= base_url('User/update_data')?>">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="id" value="<?= $u->id?>">
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Username" name="username" value="<?= $u->username?>" >
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukan Password" name="password" value="<?= $u->password?>">
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Nama" name="nama" value="<?= $u->nama?>">
                                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            <select name="jk" class="form-control" style="font-size: 0.8rem;border-radius:10rem;height:3rem;" required>
                                                <option disabled>Pilih Jenis Kelamin</option>
                                                <?php if($u->jk == "Laki-Laki"){ ?>
                                                    <option selected>Laki-Laki</option>
                                                    <option>Perempuan</option>
                                                <?php }elseif($u->jk == "Perempuan"){?>
                                                    <option>Laki - Laki</option>
                                                    <option selected>Perempuan</option>
                                                <?php }?>
                                            </select>
                                            <?= form_error('jk', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Tempat Lahir" name="tempat" value="<?= $u->tempat_lahir?>">
                                            <?= form_error('tempat', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>

                                        <div class="col-sm-6">
                                            <input type="date" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Tanggal Lahir" name="tanggal" value="<?= $u->tanggal_lahir?>">
                                            <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Alamat" name="alamat" style="height:70px;" value="<?= $u->alamat?>">
                                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="status_lulus" value="<?= $u->status_lulus?>">
                                    </div>

                                    <button name="submit" type="submit" class="btn btn-primary btn-user btn-block">Update Profile</button>
                                </form>
                                <?php } ?>
                                
                                <?php foreach($data as $u) {
                                    $data_session = array(
                                        'id'            => $u->id,
                                        'username'      => $u->username,
                                        'nama'          => $u->nama,
                                        'tempat_lahir'  => $u->tempat_lahir,
                                        'tanggal_lahir' => $u->tanggal_lahir,
                                        'jk'            => $u->jk,
                                        'alamat'        => $u->alamat
                                    );
                                    $this->session->set_userdata($data_session);
                                } ?>
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
