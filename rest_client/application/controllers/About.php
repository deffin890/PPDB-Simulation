<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller{
   
    var $API ="";
   
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/PPDB/rest_server";
    }
   

    function index(){      
        $this->load->view('v_about');
    }
}