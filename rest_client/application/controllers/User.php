<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
   
    var $API ="";
   
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/PPDB/rest_server";
        $this->load->library('form_validation');
    }
    
    public function index(){
        $where1 = array(
            'id_user' => $this->session->userdata('id')
        );
        
        $where2 = array(
            'id' => $this->session->userdata('id')
        );
        $get['nilai'] = json_decode($this->curl->simple_get($this->API.'/User',$where1,array(CURLOPT_BUFFERSIZE => 10)));
        $get['user'] = json_decode($this->curl->simple_get($this->API.'/Login/user',$where2,array(CURLOPT_BUFFERSIZE => 10)));
        
        if($get['nilai'] == NULL){
            $this->session->set_flashdata('wrong',true);
        }
            $this->load->view('v_user',$get);
    }
   
    function update($id){
        $where = array(
            'id' => $id
        );
        $get = json_decode($this->curl->simple_get($this->API.'/Login/user',$where,array(CURLOPT_BUFFERSIZE => 10)));
        $this->load->view('v_useredit',$get);
    }
    
    function update_data(){
        $id                   = $this->input->post('id');
        $username             = $this->input->post('username');
        $password             = $this->input->post('password');
        $nama                 = $this->input->post('nama');
        $tempat               = $this->input->post('tempat');
        $tanggal              = $this->input->post('tanggal');
        $jk                   = $this->input->post('jk');
        $alamat               = $this->input->post('alamat');
        $status_lulus         = $this->input->post('status_lulus');
        
        $this->form_validation->set_rules('nama', 'nama', 'required|trim', array('required' => 'Kolom Nama harus diisi'));
        $this->form_validation->set_rules('tempat', 'tempat', 'required|trim', array('required' => 'Kolom Tempat Tinggal harus diisi'));
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required|trim', array('required' => 'Kolom Tanggal Tinggal harus diisi'));
        $this->form_validation->set_rules('jk', 'jk', 'required|trim', array('required' => 'Kolom Jenis Kelamin harus diisi'));
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim', array('required' => 'Kolom Alamat harus diisi'));
        
        if ($this->form_validation->run() == false) {
             $where = array(
                'id' => $id
            );
            $get = json_decode($this->curl->simple_get($this->API.'/Login/user',$where,array(CURLOPT_BUFFERSIZE => 10)));
            $this->load->view('v_useredit',$get);
        }else{
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

            redirect(base_url('User'));
        }
    }
    
    function edit($id){
        $where = array(
            'id_user' => $id
        );
        $get = json_decode($this->curl->simple_get($this->API.'/User',$where,array(CURLOPT_BUFFERSIZE => 10)));
        $this->load->view('v_editnilai',$get);
        
    }
    
    function update_nilai(){
        $id_user              = $this->input->post('id_user');
		$matematika           = $this->input->post('matematika');
		$indonesia            = $this->input->post('indonesia');
		$ipa                  = $this->input->post('ipa');
		$inggris              = $this->input->post('inggris');
        $jumlah               = $matematika+$indonesia+$ipa+$inggris;
		$saw                  = 0;
		$status               = $this->input->post('status');
        
        $this->form_validation->set_rules('matematika', 'matematika', 'required|numeric|trim', array('required' => 'Kolom Nama harus diisi','numeric' => 'Kolom Tidak Boleh String'));
        $this->form_validation->set_rules('indonesia', 'indonesia', 'required|numeric|trim', array('required' => 'Kolom Nama harus diisi','numeric' => 'Kolom Tidak Boleh String'));
        $this->form_validation->set_rules('ipa', 'ipa', 'required|numeric|trim', array('required' => 'Kolom Nama harus diisi','numeric' => 'Kolom Tidak Boleh String'));
        $this->form_validation->set_rules('inggris', 'inggris', 'required|numeric|trim', array('required' => 'Kolom Nama harus diisi','numeric' => 'Kolom Tidak Boleh String'));
        
        if ($this->form_validation->run() == false) {
             $where = array(
                'id_user' => $id_user
            );
            $get = json_decode($this->curl->simple_get($this->API.'/User',$where,array(CURLOPT_BUFFERSIZE => 10)));
            $this->load->view('v_editnilai',$get);
        }else{
            $data = array(
                'id_user'        => $id_user,
                'matematika'     => $matematika,
                'indonesia'      => $indonesia,
                'ipa'            => $ipa,
                'inggris'        => $inggris,
                'jumlah'         => $jumlah,
                'saw'            => $saw,
                'status'         => $status
                );
            $put = json_decode($this->curl->simple_put($this->API.'/User',$data,array(CURLOPT_BUFFERSIZE => 10),$id_user));

            redirect(base_url('User'));
        }
    }
    
    function addNilai(){
        $this->load->view('v_nilai');
    }
    
    function createNilai(){
        $this->form_validation->set_rules('matematika', 'matematika', 'required|numeric|trim', array('required' => 'Kolom Nama harus diisi','numeric' => 'Kolom Tidak Boleh String'));
        $this->form_validation->set_rules('indonesia', 'indonesia', 'required|numeric|trim', array('required' => 'Kolom Nama harus diisi','numeric' => 'Kolom Tidak Boleh String'));
        $this->form_validation->set_rules('ipa', 'ipa', 'required|numeric|trim', array('required' => 'Kolom Nama harus diisi','numeric' => 'Kolom Tidak Boleh String'));
        $this->form_validation->set_rules('inggris', 'inggris', 'required|numeric|trim', array('required' => 'Kolom Nama harus diisi','numeric' => 'Kolom Tidak Boleh String'));
        
        if ($this->form_validation->run() == false) {
            $this->load->view('v_nilai');
        }else{
            $id_user              = $this->input->post('id_user');
            $matematika           = $this->input->post('matematika');
            $indonesia            = $this->input->post('indonesia');
            $ipa                  = $this->input->post('ipa');
            $inggris              = $this->input->post('inggris');
            $jumlah               = $matematika+$indonesia+$ipa+$inggris;
            $saw                  = 0;
            $status               = 1;


            $data = array(
                'id_user'        => $id_user,
                'matematika'     => $matematika,
                'indonesia'      => $indonesia,
                'ipa'            => $ipa,
                'inggris'        => $inggris,
                'jumlah'         => $jumlah,
                'saw'            => $saw,
                'status'         => $status
                );
            $where = array(
                'id_user' => $id_user
            );

            $get = json_decode($this->curl->simple_get($this->API.'/User',$where,array(CURLOPT_BUFFERSIZE => 10)));


            if($get == NULL){
                $post = json_decode($this->curl->simple_post($this->API.'/User',$data,array(CURLOPT_BUFFERSIZE => 10)));
                $this->session->set_flashdata('success',true);
            }else{
                $this->session->set_flashdata('wrong',false);
            }
                redirect(base_url('User/addNilai'));
        }
    }
    
    function ganti(){
        $this->load->view('v_resetpass');
    }
    function gantiPass(){
        $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[6]|matches[password_conf]', array('required' => 'Kolom Password harus diisi', 'min_length' => 'Password minimum 6 karakter', 'matches' => 'Password tidak sama'));
        
        $this->form_validation->set_rules('password_conf', 'password_conf', 'required|trim|matches[password]', array('required' => 'Kolom Password harus diisi', 'matches' => 'Password tidak sama'));
        
        if ($this->form_validation->run() == false) {
            $this->load->view('v_resetpass');
        }else{
            $id       = $this->input->post('id');
            $password = $this->input->post('password');

            $where = array(
                'id' => $id
            );
            $get = json_decode($this->curl->simple_get($this->API.'/Login/user',$where,array(CURLOPT_BUFFERSIZE => 10)));

            foreach($get->{'data'} as $u){
                $data = array(
                    'id'            => $u->id, 
                    'username'      => $u->username, 
                    'password'      => SHA1($password), 
                    'nama'          => $u->nama, 
                    'tempat_lahir'  => $u->tempat_lahir, 
                    'tanggal_lahir' => $u->tanggal_lahir, 
                    'jk'            => $u->jk, 
                    'alamat'        => $u->alamat, 
                    'status_lulus'  => $u->status_lulus 
                );

            }

            $put = json_decode($this->curl->simple_put($this->API.'/Login',$data,array(CURLOPT_BUFFERSIZE => 10),$id));

            redirect(base_url('User/update/'.$this->session->userdata('id')));
        }
    }
}