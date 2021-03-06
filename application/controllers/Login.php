<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public $user = "";

    public function __construct() {

        parent::__construct();

        //production
        $this->load->library('facebook', array('appId' => '1817748195152831', 'secret' => '93fd508813778a9dcc2fd64a4c1c05d0'));

        //development
/*        $this->load->library('facebook', array('appId' => '1746238735630300', 'secret' => 'afed1612b79712ea6b3ead1394bd489e'));*/

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
            $data['email'] = $email;
            
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

    public function register() {

        $name = $this->input->post('fullname', true);
        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);

        $data = array(
            'name' => $name,
            'email' => $email,
            'password' => $password
        );
        $this->UserModel->insert($data);
        redirect('Login');
    }

    public function simpleLogin() {

        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);

        $data = array(
            'email' => $email,
            'password' => $password
        );

        $result = $this->UserModel->login($data);
        if($result != null){
            $data = array (
                "id" => $result->id,
                "email" => $result->email,
                "name" => $result->name,
                "title" => $result->title,
                "description" => $result->description,
                "image" => $result->image

            );

            $this->session->set_userdata($data);
            redirect('home');
        }
        redirect('Login');

    }    
}
