<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('template/header.php'); ?>

    <title>Halaman Registrasi</title>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-12 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                            <div class="col-lg-7">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Registrasi Akun!</h1>
                                    </div>

                                    <?php if($this->session->flashdata('cek')): ?>
                                        <?php if($this->session->flashdata('cek') == TRUE): ?>
                                            <div class="alert bg-success text-white">Data Berhasil Ditambahkan !</div>
                                        <?php elseif($this->session->flashdata('cek') == FALSE): ?>
                                            <div class="alert bg-danger text-white">Data Gagal Ditambahkan !</div>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                    <form class="user" method="post" action="<?= site_url('signup')?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Username" name="username" >
                                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukan Password" name="password" >
                                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                                            </div>

                                            <div class="col-sm-6">
                                                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Konfirmasi Password" name="password_conf" >
                                                <?= form_error('password_conf', '<small class="text-danger pl-3">', '</small>') ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Nama" name="nama" >
                                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                                            </div>
  
                                            <div class="col-sm-6">
                                                <select name="jk" class="form-control" style="font-size: 0.8rem;border-radius:10rem;height:3rem;" >
                                                    <option selected disabled>Pilih Jenis Kelamin</option>
                                                    <option>Laki-Laki</option>
                                                    <option>Perempuan</option>
                                                </select>
                                                <?= form_error('jk', '<small class="text-danger pl-3">', '</small>') ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Tempat Lahir" name="tempat" >
                                                <?= form_error('tempat', '<small class="text-danger pl-3">', '</small>') ?>
                                            </div>

                                            <div class="col-sm-6">
                                                <input type="date" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Tanggal Lahir" name="tanggal" >
                                                <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>') ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Alamat" name="alamat" style="height:70px;" >
                                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>

                                        <button name="submit" type="submit" class="btn btn-primary btn-user btn-block">Daftar</button>
                                    </form>
                                    <hr>
                                    <!--
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
-->
                                    <div class="text-center">
                                        <span>Sudah Punya Akun? </span><a style="text-decoration:none;" href="<?= base_url('Login')?>">Masuk !</a>
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