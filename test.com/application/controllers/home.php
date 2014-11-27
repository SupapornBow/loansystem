<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
    {
				parent::__construct();
				//this condition checks the existence of session if user is not accessing  
				//login method as it can be accessed without user session
				if( !$this->session->userdata('logged_in') && $this->router->method != 'login' )
				{
					redirect('login'); 
				}
    }

	function index()
    {
				if($this->session->userdata('logged_in'))
				{
					$session_data = $this->session->userdata('logged_in');
					$data['email'] = $session_data['email'];
					$this->load->view('#', $data);
					$this->load->view('#', $data);
				 }
				 else
				 {
					//If no session, redirect to login page
					redirect('login', 'refresh');
				 }
    }


    function logout()
	 {
				$this->session->unset_userdata('logged_in');
				session_destroy();
				redirect('home', 'refresh');
	 }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */