<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Certification_Controller
{

  function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
      $this->load->view('certification/login');
  }
  public function login()
  {

    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('<div style="color:red">', '</div>');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
    if ($this->form_validation->run() == FALSE)
    {
           $this->load->view('certification/login');
    }
    else
    {
           $this->load->view('certification/dashboard');
    }
  }
}
