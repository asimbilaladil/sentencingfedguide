<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public $user = "";

    public function __construct() {

        parent::__construct();
        $data = $this->session->userdata('email');
        if( $data != NULL ) {

        } else {
            redirect('Login');
        }
        $this->load->model('UserModel');
    }

    public function index() {

        $email = $this->session->userdata('email');

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

    public function upload() {

        $email = $this->input->post('email', true);

        $uploadPath = './uploads/' . $email;                //make upload path 

        if(!is_dir($uploadPath)) {                          // check if upload path exist
           mkdir($uploadPath ,0777);                        // make folder if not exist                    
            echo $uploadPath;
        }

        $config['upload_path']          = $uploadPath;
        $config['allowed_types']        = 'jpg|png';
        $config['overwrite']            = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            
            $error = array('error' => $this->upload->display_errors());

        } else {

            $upload_data = $this->upload->data();               //Returns array of containing all of the data related to the file you uploaded.
            $file_name = $upload_data['file_name'];             //get file name
            $uploadPath = $uploadPath . '/' . $file_name;       //upload path with file name


            $this->UserModel->update('email', $email, array('image' => $uploadPath));

            redirect('Home');

        }        
    }

}
