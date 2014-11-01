<?php 
class ControMember extends CI_Controller {

    function __construct(){
	   parent::__construct();
    }
	
	function index()
	{
		
		$this->load->view('test');
	}


#############################################################
/*
function add()
	post ????????????? ???????view ?? set ?????? Model

*/
#############################################################
	function add()
	{
		$loanShare = $this->input->post('loanShare');	
		$loanNum = $this->input->post('loanNum');	
		$loanCredit = $this->input->post('loanCredit');
		
		var_dump($_POST);
				
		$this->Loanmember->setLoanShare($loanShare);
		$this->Loanmember->setLoanNum($loanNum);
		$this->Loanmember->setLoanCredit($loanCredit);
		
		$id = $this->Loanmember->addMember();
		echo $id;
	}
	
	
	#############################################################
/*
function addView()
	

*/
#############################################################
	function addView()
	{
		$this->load->view('addLoanmember');
	}


#############################################################
/*
function show()
	

*/
#############################################################
function show()
	{
		$data['loanmember']= $this->Loanmember->getallData();
		$this->load->view('showMember',$data);
	}
function showLoanmemberVillager(){
	$data = $this->Loanmember->getLoanmemberVillager();
	var_dump($data);
}
}
?>