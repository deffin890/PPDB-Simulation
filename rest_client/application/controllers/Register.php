<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{
   
    var $API ="";
   
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/PPDB/rest_server";
        $this->load->library('form_validation');
    }
   

    function index(){      
        $this->load->view('v_register');
    }
    
    function signup(){
        $this->form_validation->set_rules('username', 'username', 'required|trim|alpha_dash', array('required' => 'Kolom Username harus diisi', 'alpha_dash' => 'Tidak boleh menggunakan karakter dan spasi'));
       
        $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[6]|matches[password_conf]', array('required' => 'Kolom Password harus diisi', 'min_length' => 'Password minimum 6 karakter', 'matches' => 'Password tidak sama'));
        
        $this->form_validation->set_rules('password_conf', 'password_conf', 'required|trim|matches[password]', array('required' => 'Kolom Password harus diisi', 'matches' => 'Password tidak sama'));
        
        $this->form_validation->set_rules('nama', 'nama', 'required|trim', array('required' => 'Kolom Nama harus diisi'));
        
        $this->form_validation->set_rules('tempat', 'tempat', 'required|trim', array('required' => 'Kolom Tempat Tinggal harus diisi'));
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required|trim', array('required' => 'Kolom Tanggal Tinggal harus diisi'));
        $this->form_validation->set_rules('jk', 'jk', 'required|trim', array('required' => 'Kolom Jenis Kelamin harus diisi'));
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim', array('required' => 'Kolom Alamat harus diisi'));
        
        if ($this->form_validation->run() == false) {
            $this->load->view('v_register');
        }else{
            $username             = $this->input->post('username');
            $password             = $this->input->post('password');
            $nama                 = $this->input->post('nama');
            $tempat               = $this->input->post('tempat');
            $tanggal              = $this->input->post('tanggal');
            $jk                   = $this->input->post('jk');
            $alamat               = $this->input->post('alamat');

            $data = array(
                'username'        => $username,
                'password'        => $password,
                'nama'            => $nama,
                'tempat_lahir'    => $tempat,
                'tanggal_lahir'   => $tanggal,
                'jk'              => $jk,
                'alamat'          => $alamat,
                'status_lulus'    => 0
                );

            $get = json_decode($this->curl->simple_post($this->API.'/Login',$data,array(CURLOPT_BUFFERSIZE => 10)));

            if($get){
                $this->session->set_flashdata('cek',true);
            }else{
                $this->session->set_flashdata('cek',false);
            }

            redirect(site_url('Register'));
        }
    }
}