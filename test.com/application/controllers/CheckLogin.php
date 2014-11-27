<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class CheckLogin extends CI_Controller {

    function __construct(){
	   parent::__construct();
    }
	 function index($a=""){
	$data['magessError']=$a;
	$this->load->view('showLogin',$data);
	 }

	 function login(){
	 	$username = $this->input->post('username');
		$password = $this->input->post('password');
		
	    $this->villager->setUserName($username);
	    $this->villager->setPassWord($password);

	    $data= $this->villager->login();

	   

	if($data){
		for ($i=0;$i<count($data);$i++){
				$session = array(
					'villagerId'=> 	$data[$i]['villagerId'],
					'userName'=> 	$data[$i]['userName'],
					'status'=> 	$data[$i]['status'],
					'name'=> 	$data[$i]['villagerName'].' '.$data[$i]['villagerLastname'],
					'villagerStatus'=> 	$data[$i]['villagerStatus']
				);
		}
			$this->session->set_userdata('logindata',$session);
			 $logindata=$this->session->userdata('logindata');

			 if($logindata['villagerStatus']=='boss'){
			 header("Location: /index.php/Boss");
			 }else if($logindata['villagerStatus']=='member'){
			  header("Location: /index.php/Member");
			 }else{
			 	$this->index('ไม่มี');
			 }

	}else{
	$mes['magessError']= "ไม่มี";
	$this->load->view('showLogin',$mes);


	}
	
	 }
	 
	 function logOut()
	 {
		 $this->session->unset_userdata('logindata');
		 $this->index('');
	}
	 
}
?>