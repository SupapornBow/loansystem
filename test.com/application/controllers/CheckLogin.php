<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class checkLogin extends CI_Controller {

    function __construct(){
	   parent::__construct();
    }
	 function index($a=""){
	$data['magessError']=$a;
	$this->load->view('showLogin',$data);
	 }

	 function logins(){
	 	$username = $this->input->post('username');
		$password = $this->input->post('password');

	    $this->user->setUsername($username);
	    $this->user->setPassword($password);

	    $data= $this->user->login();

	   

	if($data){
		for ($i=0;$i<count($data);$i++){
				$session = array(
					'user_id'=> 	$data[$i]['user_Id'],
					'username'=> 	$data[$i]['username'],
					'status'=> 	$data[$i]['status'],
				);
		}
			$this->session->set_userdata('logindata',$session);
			 $logindata=$this->session->userdata('logindata');

			 if($logindata['status']=='boss'){
			 header("Location: /index.php/Boss");
			 }else if($logindata['status']=='member'){
			  header("Location: /index.php/Member");
			 }else{
			  header("Location: /index.php/checkLogin");
			 }

	}else{
	$mes['magessError']= "ไม่มี";
	$this->load->view('showLogin',$mes);


	}
	
	 }
}
?>