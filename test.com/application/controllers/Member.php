<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {

		function __construct()
	{
		parent::__construct();
		$this->checkStatus();
     }
	 
	 function checkStatus(){
	 $session_data = $this->session->userdata('logindata'); /// แรกข้อมูลที่เก็บใน session ชื่อ loginData
	 $status = $session_data['villagerStatus'];/// ให้ข้อมูลใน array session_data ชื่อ status เท่ากับ $satus
	 if($status!="member"){//เช็คค่า $satus ว่าเป็น admin หรือไม่ ถ้าไม่ให้ทำตาม Process
		echo '<script> alert("!!!คุณไม่มีสิทธิในการใช้งานส่วนนี้");
		   	 window.location.assign("'.base_url().'index.php/CheckLogin");
		   </script>';/// ไปยัง contorller CheckLogin ฟังชั่น redirects โดยใช้ Javascript
	 }
  }
  
  function index()
	{
		//$data['list']=$this->loan->findByAll();
		$data['login'] = $this->session->userdata('logindata');
		//var_dump($data);
		//die();
		$this->load->view('homeMember',$data);
	 }
	 
	 
	 function listAllLoan()
	{
		$data['list']=$this->Loan->findByAllLoan();
		//var_dump($data);
		//die();
		$this->load->view('showLoan',$data);
	}
  
  function addLoans()
	{
		$loanNum = $this->input->post('loanNum');	
		$dateLoan = $this->input->post('dateLoan');	
		$guarantorId = $this->input->post('guarantorId');
		$paymentDate = $this->input->post('paymentDate');	
		$paymentStatus = $this->input->post('paymentStatus');
		$statusLoan = $this->input->post('statusLoan');
		$villagerId = $this->input->post('villagerId');	
		

		$this->loan->setLoanNum($loanNum);
		$this->loan->setDateLoan($dateLoan);
		$this->loan->setGuarantorId($guarantorId);
		$this->loan->setPaymentDate($paymentDate);
		$this->loan->setPaymentStatus($paymentStatus);
		$this->loan->setStatusLoan($statusLoan);
		$this->loan->setVillagerId($villagerId);
		

		$id = $this->loan->addLoan();
			//$this->load->view('showMember',$data);
		//redirect("Member/listMember","refresh");
		//echo $id;
	}
	
	
#############################################################
/*
function addView()
	

*/#############################################################
	function addViewLoan()
	{
		$this->load->view('addLoan');
		
	}
	
	
	function getPKdata($loanId)
	{
		$this->loan->setLoanId($loanId);
		$data['loan']=$this->loan->getPK();
		$this->load->view('editLoan',$data);
	}
}
?>
