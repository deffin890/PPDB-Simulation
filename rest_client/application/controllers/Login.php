<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
   
    var $API ="";
   
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/PPDB/rest_server";
        $this->load->library('form_validation');
    }
   

    function index(){      
        $this->load->view('v_login');
    }
    
    function aksi_login(){
        $this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('password', 'password', 'required|trim');
        
        if($this->form_validation->run() == false){
            $this->load->view('v_login');
        }else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $where = array(
                'username' => $username,
                'password' => $password
            );

            $data = json_decode($this->curl->simple_get($this->API.'/Login',$where,array(CURLOPT_BUFFERSIZE => 10)));

            foreach($data->{'data'} as $u){
                $data_session = array(
                    'id'            => $u->id,
                    'username'      => $u->username,
                    'nama'          => $u->nama,
                    'tempat_lahir'  => $u->tempat_lahir,
                    'tanggal_lahir' => $u->tanggal_lahir,
                    'jk'            => $u->jk,
                    'alamat'        => $u->alamat
                );
            }
            $this->session->set_userdata($data_session);

            if($data){
                if($username == "admin"){
                    redirect(base_url('Admin'));
                }else{
                    redirect(base_url('User'));
                }
            }else{
                $this->session->set_flashdata('hasil','Username/Password Salah !');
                redirect(site_url('login'));
            }
        }
       
    }
    
    function logout(){
		$this->session->sess_destroy();
		redirect(site_url('Login'));
	}
}