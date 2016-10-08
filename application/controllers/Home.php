<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public $user = "";

    public function __construct() {

        parent::__construct();
        $data = $this->session->userdata('user_profile');
        if( $data != NULL ) {

        } else {
            redirect('Login');
        }

    }

    public function index() {


        $data['user_profile'] = $this->session->userdata('user_profile');
        $data['logout_url']   = $this->session->userdata('logout_url');


        $this->load->view('common_secondary/header');
        $this->load->view('website/home', $data);
        $this->load->view('common_secondary/footer');


    }

}
