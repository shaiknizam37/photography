<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Dashboard extends Register_Controller
{
 
  function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
      $this->load->view('register/dashboard');
  }
 
  public function register()
  {
    $this->load->library('form_validation');
    /*$this->form_validation->set_rules(
        'username', 'Username',
        'required|min_length[5]|max_length[12]|is_unique[users.username]',
        array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
        )
    );
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');*/
    /*$this->form_validation->set_rules(
        'first_name', 'First Name',
        'required|min_length[3]',
        array(
                'required'      => '%s should be atleast 3 characters.',
        )
    );
     $this->form_validation->set_rules(
        'last_name', 'Last Name',
        'required|min_length[3]',
        array(
                'required'      => '%s should be atleast 3 characters.',
        )
    );
    
    if ($this->form_validation->run() == FALSE)
    {
        $this->load->view('register/dashboard');
    }
    else
    {
       $this->load->view('register/failure');
    }*/
    print_r($this->input->post()) ;
  }
}