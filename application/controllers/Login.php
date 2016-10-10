<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public $user = "";

    public function __construct() {

        parent::__construct();
        $this->load->library('facebook', array('appId' => '1817748195152831', 'secret' => '93fd508813778a9dcc2fd64a4c1c05d0'));
        $this->user = $this->facebook->getUser();
        $this->load->model('UserModel');
    }

    public function index() {

        $this->load->view('common/header');

        if ($this->user) {
            
            $data['user_profile'] = $this->facebook->api('/me/?fields=id,name,email,location');
            $data['logout_url'] = $this->facebook->getLogoutUrl(array('next' => base_url() . 'index.php/oauth_login/logout'));

            $email = $data['user_profile']['email'];
            $name = $data['user_profile']['name'];
            $id = $data['user_profile']['id'];
            
            if (!$this->UserModel->userExist($email)) {

                $this->UserModel->insert( array(
                    'email'       => $email,
                    'name'        => $name,
                    'facebook_id' => $id
                ));

            }

            $this->session->set_userdata($data);

            redirect('home');
       
        } else {

            // Store users facebook login url
            $data['login_url'] = $this->facebook->getLoginUrl(array('scope'=>'email'));

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
