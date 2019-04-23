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
    }else{
        $query = $this->db->select('*')->get_where('trainee_persional_data', array('email' =>$this->input->post('email'),'password'=>$this->input->post('password')))->result();
        if(sizeof($query)==1){
            $this->load->view('certification/dashboard',array('data'=>$query));
        }else{
            $this->load->view('certification/login',array('data'=>'Invalid Credentials'));
        }
        
    }
  }
}
