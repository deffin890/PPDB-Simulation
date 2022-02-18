<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class User extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('User_model');
    }

    public function index_get()
	{
        $id_user = $this->get('id_user');
        
        $where = array(
            'id_user' => $id_user
        );
        
        $get = $this->User_model->getNilai($where)->result();
        
        if($get){
            $this->response([
                'status' => true,
                'data' => $get
            ],REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'data nilai not found'
            ],REST_Controller::HTTP_NOT_FOUND);
        }
    }


    public function index_delete(){
        $id = $this->delete('id');
        if($id == NULL){
            $this->response([
                'status' => false,
                'message' => 'provide an id'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if($this->User_model->deleteNilai($id) > 0){
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'deleted.'
                ],REST_Controller::HTTP_NO_CONTENT);
            }else{
                $this->response([
                    'status' => false,
                    'message' => 'id not found'
                ],REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }
    
    public function index_post(){
        $data = array(
            'id_user' => $this->post('id_user'),
            'matematika' => $this->post('matematika'),
            'indonesia' => $this->post('indonesia'),
            'ipa' => $this->post('ipa'),
            'inggris' => $this->post('inggris'),
            'jumlah' => $this->post('jumlah'),
            'saw' => $this->post('saw'),
            'status' => $this->post('status')
        );
        
        if($this->User_model->createNilai($data) > 0){
            $this->response([
                    'status' => true,
                    'message' => 'new data has been created'
                ],REST_Controller::HTTP_CREATED);
        }else{
                $this->response([
                    'status' => false,
                    'message' => 'failed to create new data'
                ],REST_Controller::HTTP_BAD_REQUEST);
            }
    }
    
     public function index_put(){
        $id = $this->put('id_user');
        $data = array(
            'id_user' => $this->put('id_user'),
            'matematika' => $this->put('matematika'),
            'indonesia' => $this->put('indonesia'),
            'ipa' => $this->put('ipa'),
            'inggris' => $this->put('inggris'),
            'jumlah' => $this->put('jumlah'),
            'saw' => $this->put('saw'),
            'status' => $this->put('status')
        );
         
        $put = $this->User_model->updateNilai($data,$id);
        if($put > 0){
            $this->response([
                    'status' => true,
                    'message' => 'data has been updated'
                ],REST_Controller::HTTP_NO_CONTENT);
        }else{
                $this->response([
                    'status' => false,
                    'message' => 'failed to update data'
                ],REST_Controller::HTTP_BAD_REQUEST);
            }
    }
}
?>