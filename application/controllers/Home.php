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
        $this->load->model('UserModel');
    }

    public function index() {

        $email = $this->session->userdata('user_profile')['email'];

        $user = $this->UserModel->userExist($email);

        $data['user'] = $user;

        $data['user_profile'] = $this->session->userdata('user_profile');
        $data['logout_url']   = $this->session->userdata('logout_url');
        $this->load->view('common_secondary/header');
        $this->load->view('website/home', array('data' => $data));
        $this->load->view('common_secondary/footer');
    }

    public function update() {
        $email = $this->input->post('email', true);
        $title = $this->input->post('title', true);
        $description = $this->input->post('description', true);

        $data = array();

        if ($title) {
            $data['title'] = $this->input->post('title', true);
        }

        if ($description) {
            $data['description'] = $this->input->post('description', true);
        }

        $this->UserModel->update('email', $email, $data);

        redirect('Home');

    }

}
