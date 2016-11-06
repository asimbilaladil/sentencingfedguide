<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    public $user = "";

    public function __construct() {

        parent::__construct();
        $this->load->model('ReportModel');
    }

    public function index() {

 
            
        $this->load->view('common_secondary/header');
        $this->load->view('website/Report', array('data' => null));
        $this->load->view('common_secondary/footer');
    }


    public function getForm() {

        $id = $this->input->get('id', true); 
        $result = $this->ReportModel->getFormById($id);
        echo json_encode($result);
    } 

}
