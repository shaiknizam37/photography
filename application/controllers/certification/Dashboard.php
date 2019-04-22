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
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules(
        'email', 'Email-Id',
        'required',
        array(
                'required'      => 'Enter Valid  %s.',
        )
      );
      $this->form_validation->set_rules(
          'password', 'Password',
          'required',
          array(
                  'required'      =>  'Invalid  %s.',
          )
        );
    if ($this->form_validation->run() == FALSE)
    {
      $this->load->view('certification/login');
    }
    else
    {
          $this->load->model('trainee_personal_data');
          $query = $this->db->select('no')->get_where('trainee_personal_data', array('email' => $this->input->post('email'),'password'=>$this->input->post('password')))->result();
          $data=array(
            'size'=>sizeof($query)
          );
           $this->load->view('certification/dashboard',$data);
    }
  }
}
