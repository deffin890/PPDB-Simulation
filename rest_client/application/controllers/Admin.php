<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
   
    var $API ="";
   
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/PPDB/rest_server";
    }
    
    public function index(){
        $get['user'] = json_decode($this->curl->simple_get($this->API.'/Admin/userCount'));
        $get['cowo'] = json_decode($this->curl->simple_get($this->API.'/Admin/lakiCount'));
        $get['cewe'] = json_decode($this->curl->simple_get($this->API.'/Admin/perempuanCount'));
        $get['alldata'] = json_decode($this->curl->simple_get($this->API.'/Admin/data'));
        $get['lulus'] = json_decode($this->curl->simple_get($this->API.'/Admin/getLulus'));
        
        $get['countlulus'] = json_decode($this->curl->simple_get($this->API.'/Admin/countLulus'));
        $get['counttidak'] = json_decode($this->curl->simple_get($this->API.'/Admin/countTidak'));
        
        $this->load->view('v_admin',$get);
    }
    
    public function seleksi(){
        $max = json_decode($this->curl->simple_get($this->API.'/Admin/max'));
        $nilai = json_decode($this->curl->simple_get($this->API.'/Admin/nilai'));
        
        $bobot = array(0.25,0.25,0.25,0.25);
        
        foreach($max->{'data'} as $u){
            $maxMtk  = $u->maxMtk;
            $maxIndo = $u->maxIndo;
            $maxIpa  = $u->maxIpa;
            $maxIng  = $u->maxIng;
        }
        
        //normalisasi x bobot (saw)
        foreach($nilai->{'data'} as $u){
            $saw = round(
                (($u->matematika/$maxMtk)*$bobot[0])+
                (($u->indonesia/$maxIndo)*$bobot[1])+
                (($u->ipa/$maxIpa)*$bobot[2])+
                (($u->inggris/$maxIng)*$bobot[3]),3);
            
            $data = array(
                'id_user'        => $u->id_user,
                'matematika'     => $u->matematika,
                'indonesia'      => $u->indonesia,
                'ipa'            => $u->ipa,
                'inggris'        => $u->inggris,
                'jumlah'         => $u->jumlah,
                'saw'            => $saw,
                'status'         => $u->status
			);
            
            $put = json_decode($this->curl->simple_put($this->API.'/Admin/saw',$data,array(CURLOPT_BUFFERSIZE => 10),$u->id_user));

        }
        $data = json_decode($this->curl->simple_get($this->API.'/Admin/getSaw'));    
        $user = json_decode($this->curl->simple_get($this->API.'/Admin/userCount'));
        
        $banyakData = $user->{'data'};
        
        $i = 0;
        $kuota = 10;
        
        if($banyakData >= 10){
            foreach($data->{'data'} as $u){
                $id                   = $u->id;
                $username             = $u->username;
                $password             = $u->password;
                $nama                 = $u->nama;
                $tempat               = $u->tempat_lahir;
                $tanggal              = $u->tanggal_lahir;
                $jk                   = $u->jk;
                $alamat               = $u->alamat;

                if($i < $kuota){
                  $status_lulus = 2;
                }else{
                  $status_lulus = 1;
                }
                $i++;

                $data = array(
                    'id' => $id,
                    'username'        => $username,
                    'password'        => $password,
                    'nama'            => $nama,
                    'tempat_lahir'    => $tempat,
                    'tanggal_lahir'   => $tanggal,
                    'jk'              => $jk,
                    'alamat'          => $alamat,
                    'status_lulus'    => $status_lulus
                );

                $put = json_decode($this->curl->simple_put($this->API.'/Login',$data,array(CURLOPT_BUFFERSIZE => 10),$id));
            }
            $this->session->set_flashdata('cek_sukses',true);
        }else{
            $this->session->set_flashdata('cek_gagal',true);
        }
            redirect(base_url('Admin'));
        

    }

}