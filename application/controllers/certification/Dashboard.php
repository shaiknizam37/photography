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
      $this->load->view('certification/login');
  }
}
