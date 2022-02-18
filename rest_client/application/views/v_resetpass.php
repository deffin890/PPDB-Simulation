<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('template/header.php'); ?>

    <title>Reset Password</title>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">LUPA PASSWORD <?=$this->session->userdata('nama')?> ?</h1>
                                        <p class="mb-4">Kami mengerti, banyak hal terjadi. Cukup masukkan password yang baru Anda di bawah ini dan kami akan menggantikan password Anda dengan yang baru!</p>
                                    </div>
                                    <form class="user" method="post" action="<?= base_url('User/gantiPass')?>">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="id" value="<?= $this->session->userdata('id');?>">
                                            <input type="password" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Password Yang Baru" name="password">
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Konfirmasi Password Yang Baru" name="password_conf">
                                            <?= form_error('password_conf', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block">Reset Password</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('Register')?>">Buat Akun Baru!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('Login')?>">Sudah Punya Akun? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <?php $this->load->view('template/js.php'); ?>

</body>

</html>