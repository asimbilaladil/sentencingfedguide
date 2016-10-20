<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    public $user = "";

    public function __construct() {

        parent::__construct();

    }

    public function index() {

 
            
        $this->load->view('common_secondary/header');
        $this->load->view('website/Report', array('data' => null));
        $this->load->view('common_secondary/footer');
    }


}
