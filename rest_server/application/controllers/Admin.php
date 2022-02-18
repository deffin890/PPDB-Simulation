<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Admin extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('Admin_model');
    }

    public function userCount_get()
	{
        $where = array(
            'username !=' => "admin"
        );
        
        $get = $this->Admin_model->userCount($where)->num_rows();
        
        if($get){
            $this->response([
                'status' => true,
                'data' => $get
            ],REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'data user not found'
            ],REST_Controller::HTTP_NOT_FOUND);
        }
    }
    
    public function lakiCount_get()
	{ 
        $where = array(
            'jk' => "Laki-Laki",
            'username !=' => "admin"
        );
        
        $get = $this->Admin_model->lakiCount($where)->num_rows();
        
        if($get){
            $this->response([
                'status' => true,
                'data' => $get
            ],REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'data male not found'
            ],REST_Controller::HTTP_NOT_FOUND);
        }
    }
    
    public function perempuanCount_get()
	{ 
        $where = array(
            'jk' => "Perempuan",
            'username != ' => "admin",
            
        );
        
        $get = $this->Admin_model->perempuanCount($where)->num_rows();
        
        if($get){
            $this->response([
                'status' => true,
                'data' => $get
            ],REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'data female not found'
            ],REST_Controller::HTTP_NOT_FOUND);
        }
    }
    
    public function data_get()
	{ 
        
        $get = $this->Admin_model->allData()->result();
        
        if($get){
            $this->response([
                'status' => true,
                'data' => $get
            ],REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'all data not found'
            ],REST_Controller::HTTP_NOT_FOUND);
        }
    }
    
    public function max_get()
	{ 
        
        $get = $this->Admin_model->maxData()->result();
        
        if($get){
            $this->response([
                'status' => true,
                'data' => $get
            ],REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'all data not found'
            ],REST_Controller::HTTP_NOT_FOUND);
        }
    }
    
    public function nilai_get()
	{ 
        
        $get = $this->Admin_model->nilaiData()->result();
        
        if($get){
            $this->response([
                'status' => true,
                'data' => $get
            ],REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'all data not found'
            ],REST_Controller::HTTP_NOT_FOUND);
        }
    }
    
    public function saw_put(){
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
         
        $put = $this->Admin_model->updateNilai($data,$id);
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
    
    public function getSaw_get()
	{
        $get = $this->Admin_model->getSaw()->result();
        
        if($get){
            $this->response([
                'status' => true,
                'data' => $get
            ],REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'data user not found'
            ],REST_Controller::HTTP_NOT_FOUND);
        }
    }
    
    public function getLulus_get()
	{
        $where = array(
            'status_lulus' => 2
        );
        
        $get = $this->Admin_model->getLulus($where)->result();
        
        if($get){
            $this->response([
                'status' => true,
                'data' => $get
            ],REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'data user not found'
            ],REST_Controller::HTTP_NOT_FOUND);
        }
    }
    
    public function countLulus_get()
	{
        $where = array(
            'status_lulus' => 2
        );
        
        $get = $this->Admin_model->getLulus($where)->num_rows();
        
        if($get){
            $this->response([
                'status' => true,
                'data' => $get
            ],REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'data user not found'
            ],REST_Controller::HTTP_NOT_FOUND);
        }
    }
    
    public function countTidak_get()
	{
        $where = array(
            'status_lulus' => 1
        );
        
        $get = $this->Admin_model->getLulus($where)->num_rows();
        
        if($get){
            $this->response([
                'status' => true,
                'data' => $get
            ],REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'data user not found'
            ],REST_Controller::HTTP_NOT_FOUND);
        }
    }
    

}
?>