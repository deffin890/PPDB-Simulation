<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Login extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('Login_model');
    }

    public function index_get()
	{
        $username = $this->get('username');
        $password = SHA1($this->get('password'));
        
        $where = array(
            'username' => $username,
            'password' => $password
        );
        
        $user = $this->Login_model->getUser($where)->result();
        
        if($user){
            $this->response([
                'status' => true,
                'data' => $user
            ],REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'username/password not found',
            ],REST_Controller::HTTP_NOT_FOUND);
        }
    }
    
    public function user_get()
	{
        $id = $this->get('id');
        
        $where = array(
            'id' => $id
        );
        
        $user = $this->Login_model->getUser($where)->result();
        
        if($user){
            $this->response([
                'status' => true,
                'data' => $user
            ],REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'id not found',
            ],REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete(){
        $id = $this->delete('id');
        if($id == NULL){
            $this->response([
                'status' => false,
                'message' => 'provide an id',
            ],REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if($this->Login_model->deleteUser($id) > 0){
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'deleted.'
                ],REST_Controller::HTTP_NO_CONTENT);
            }else{
                $this->response([
                    'status' => false,
                    'message' => 'id not found',
                ],REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }
    
    public function index_post(){
        $data = array(
            'username' => $this->post('username'),
            'password' => SHA1($this->post('password')),
            'nama' => $this->post('nama'),
            'tempat_lahir' => $this->post('tempat_lahir'),
            'tanggal_lahir' => $this->post('tanggal_lahir'),
            'jk' => $this->post('jk'),
            'alamat' => $this->post('alamat'),
            'status_lulus' => $this->post('status_lulus')
        );
        
        if($this->Login_model->createUser($data) > 0){
            $this->response([
                    'status' => true,
                    'message' => 'new user has been created'
                ],REST_Controller::HTTP_CREATED);
        }else{
                $this->response([
                    'status' => false,
                    'message' => 'failed to create new data',
                ],REST_Controller::HTTP_BAD_REQUEST);
            }
    }
    
     public function index_put(){
        $id = $this->put('id');
        $data = array(
            'id' => $this->put('id'),
            'username' => $this->put('username'),
            'password' => $this->put('password'),
            'nama' => $this->put('nama'),
            'tempat_lahir' => $this->put('tempat_lahir'),
            'tanggal_lahir' => $this->put('tanggal_lahir'),
            'jk' => $this->put('jk'),
            'alamat' => $this->put('alamat'),
            'status_lulus' => $this->put('status_lulus')
        );
         
        $put = $this->Login_model->updateUser($data,$id);
        if($put > 0){
            $this->response([
                    'status' => true,
                    'message' => 'user has been updated'
                ],REST_Controller::HTTP_NO_CONTENT);
        }else{
                $this->response([
                    'status' => false,
                    'message' => 'failed to update data',
                ],REST_Controller::HTTP_BAD_REQUEST);
            }
    }

}
?>