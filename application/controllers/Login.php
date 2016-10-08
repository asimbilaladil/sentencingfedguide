<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public $user = "";

    public function __construct() {

        parent::__construct();
        $this->load->library('facebook', array('appId' => '1746238735630300', 'secret' => 'afed1612b79712ea6b3ead1394bd489e'));
        $this->user = $this->facebook->getUser();
    }

    public function index() {

        $this->load->view('common/header');

        if ($this->user) {
            
            $data['user_profile'] = $this->facebook->api('/me/?fields=id,name,email,location');
            $data['logout_url'] = $this->facebook->getLogoutUrl(array('next' => base_url() . 'index.php/oauth_login/logout'));
            $this->session->set_userdata($data);

            redirect('home');
       
        } else {

            // Store users facebook login url
            $data['login_url'] = $this->facebook->getLoginUrl();

            $this->load->view('login', $data);
        }

        $this->load->view('common/footer');
    }


    // Logout from facebook
    public function logout() {
        session_destroy();
        redirect(base_url());
    }

}
