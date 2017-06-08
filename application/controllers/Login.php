<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
      parent::__construct();
    }

    function index()
    {
      $data = array(
          'message' => ''
      );
        
      $this->load->helper(array('form'));
      $this->load->model('Users_model');
      
      if($this->input->post()){
          $username = $this->input->post('inputEmail');
          $password = $this->input->post('inputPassword');
          
          //Check if username exists
          $username_exists = $this->Users_model->check_username($username);
          if($username_exists){
              $error = 'This username does not exist';
          } else {
              $user_login = $this->Users_model->check_user_login($username,$password);
              if($user_login){
                  //$error = 'login';
                  redirect('/Dashboard/');
              } else {
                  $error = 'Incorrect login details';
              }
          }
          
          $data['error'] = $error;
          $data['errora'] = $this->session->userdata('user_id');
          $data['errorb'] = $this->session->userdata('logged_in');
          
      }
      $this->load->view('login_view',$data);
    }
    
    public function logout() {
        //$array_items = array('user_id', 'logged_in');
        //$this->session->unset_userdata($array_items);
        $this->session->sess_destroy();
        redirect('/Dashboard/');
    }
}