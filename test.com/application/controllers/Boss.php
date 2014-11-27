<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Boss extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->checkStatus();
     }
	 
	 function checkStatus(){
	 $session_data = $this->session->userdata('logindata'); /// แรกข้อมูลที่เก็บใน session ชื่อ loginData
	 $status = $session_data['villagerStatus'];/// ให้ข้อมูลใน array session_data ชื่อ status เท่ากับ $satus
	 if($status!="boss"){//เช็คค่า $satus ว่าเป็น admin หรือไม่ ถ้าไม่ให้ทำตาม Process
		echo '<script> alert("!!!คุณไม่มีสิทธิในการใช้งานส่วนนี้");
		   	 window.location.assign("'.base_url().'index.php/CheckLogin");
		   </script>';/// ไปยัง contorller CheckLogin ฟังชั่น redirects โดยใช้ Javascript
	 }
  }

	function index()
	{
		$data['list']=$this->villager->findByAll();
		$data['login'] = $this->session->userdata('logindata');
		//var_dump($data);
		//die();
		$this->load->view('homeBoss',$data);
	 }
	///////////********************////////////////////
	function listMemberAll()
	{
		$data['list']=$this->villager->findByAll();
		//var_dump($data);
		//die();
		$this->load->view('showAll',$data);
	}
	
	function listMember()
	{
		$data['list']=$this->villager->findByAllActive();
		//var_dump($data);
		//die();
		$this->load->view('showMember',$data);
	}
	

	function listBoss()
	{
		$data['list']=$this->villager->findByAllBoss();
		//var_dump($data);
		//die();
		$this->load->view('showBoss',$data);
	}


	function listBudgets()
	{
		$data['list']=$this->Budgets->findByAll();
		//var_dump($data);
		//die();
		$this->load->view('showBudgets',$data);
	}
	
	
	

	function add()
	{
		$prefixes = $this->input->post('prefixes');	
		$villagerName = $this->input->post('villagerName');	
		$villagerLastname = $this->input->post('villagerLastname');
		$villagerBirthday = $this->input->post('villagerBirthday');	
		$villagerAddress = $this->input->post('villagerAddress');
		$villagerIdcard = $this->input->post('villagerIdcard');
		$villagerTel = $this->input->post('villagerTel');	
		$villagerCareer = $this->input->post('villagerCareer');	
		$villagerShare = $this->input->post('villagerShare');
		$loanCredit = $this->input->post('loanCredit');

		

		$this->villager->setPrefixes($prefixes);
		$this->villager->setVillagerName($villagerName);
		$this->villager->setVillagerLastname($villagerLastname);
		$this->villager->setVillagerBirthday($villagerBirthday);
		$this->villager->setVillagerAddress($villagerAddress);
		$this->villager->setVillagerIdcard($villagerIdcard);
		$this->villager->setVillagerTel($villagerTel);
		$this->villager->setVillagerCareer($villagerCareer);
		$this->villager->setVillagerShare($villagerShare);
		$this->villager->setLoanCredit($loanCredit);


		$id = $this->villager->addVilllager();
			//$this->load->view('showMember',$data);
		redirect("Boss/listMember","refresh");
		//echo $id;
	}
	
	
#############################################################
/*
function addView()
	

*/#############################################################
	function addView()
	{
		$this->load->view('addMember');
		
	}


	function addVillagerBoss()
	{
		$prefixes = $this->input->post('prefixes');	
		$villagerName = $this->input->post('villagerName');	
		$villagerLastname = $this->input->post('villagerLastname');
		$villagerBirthday = $this->input->post('villagerBirthday');	
		$villagerAddress = $this->input->post('villagerAddress');
		$villagerIdcard = $this->input->post('villagerIdcard');
		$villagerTel = $this->input->post('villagerTel');	
		$villagerCareer = $this->input->post('villagerCareer');	
		$villagerShare = $this->input->post('villagerShare');
		$loanCredit = $this->input->post('loanCredit');

		

		$this->villager->setPrefixes($prefixes);
		$this->villager->setVillagerName($villagerName);
		$this->villager->setVillagerLastname($villagerLastname);
		$this->villager->setVillagerBirthday($villagerBirthday);
		$this->villager->setVillagerAddress($villagerAddress);
		$this->villager->setVillagerIdcard($villagerIdcard);
		$this->villager->setVillagerTel($villagerTel);
		$this->villager->setVillagerCareer($villagerCareer);
		$this->villager->setVillagerShare($villagerShare);
		$this->villager->setLoanCredit($loanCredit);


		$id = $this->villager->addBoss();
			//$this->load->view('showMember',$data);
		redirect("Boss/listBoss","refresh");
		//echo $id;
	}
	
	
#############################################################
/*
function addView()
	

*/#############################################################
	function addViewBoss()
	{
		$this->load->view('addBoss');
		
	}


	function addBudgets()
	{
		
		$budgetsDate = $this->input->post('budgetsDate');	
		$budgetsNum = $this->input->post('budgetsNum');
		$value=$budgetsNum/2;
		
		$this->Budgets->setBudgetsDate($budgetsDate);
		$this->Budgets->setBudgetsNum($value);
		
		for($i=2;$i>0;$i--){
			if($i==2){
				$loanType='man';
				}else if($i==1){
					$loanType='woman';
				}
		$this->Budgets->setLoanType($loanType);
		
		
		$id = $this->Budgets->addBudget();
		}
		
		//$this->load->view('showMember',$data);
		redirect("Boss/listBudgets","refresh");
		//echo $id;
	}
	
	
#############################################################
/*
function addView()
	

*/#############################################################
	function addViewBudgets()
	{
		$this->load->view('addBudgets');
		
	}
	
	
	
	function showBudgets()
	{
		$data['list']= $this->Budgets->findByAll();
		//var_dump($data);
		//die();
		$this->load->view('showBudgets',$data);
	}




	function updateMember($villagerId)
	{

		$prefixes = $this->input->post('prefixes');
		$villagerName = $this->input->post('villagerName');
		$villagerLastname = $this->input->post('villagerLastname');
		$villagerAddress = $this->input->post('villagerAddress');
		$villagerIdcard = $this->input->post('villagerIdcard');
		$villagerTel = $this->input->post('villagerTel');
		$villagerCareer = $this->input->post('villagerCareer');
		$villagerShare = $this->input->post('villagerShare');
		$loanCredit = $this->input->post('loanCredit');


		$this->villager->setVillagerId($villagerId);
		$this->villager->setPrefixes($prefixes);
		$this->villager->setVillagerName($villagerName);
		$this->villager->setVillagerLastname($villagerLastname);
		$this->villager->setVillagerAddress($villagerAddress);
		$this->villager->setVillagerIdcard($villagerIdcard);
		$this->villager->setVillagerTel($villagerTel);
		$this->villager->setVillagerCareer($villagerCareer);
		$this->villager->setVillagerShare($villagerShare);
		$this->villager->setLoanCredit($loanCredit);
		
		$this->villager->update();//??????? function update ?? Model
		redirect("Boss/listMember","refresh");
	
	}
	
	
	function updateBudgets($budgetsId)
	{

		$budgetsDate = $this->input->post('budgetsDate');
		$budgetsNum = $this->input->post('budgetsNum');
		
		//var_dump($_POST);
		//die();
		
		$this->Budgets->setBudgetsId($budgetsId);
		$this->Budgets->setBudgetsDate($budgetsDate);
		$this->Budgets->setBudgetsNum($budgetsNum);
		
		
		
		
		$this->Budgets->update();//??????? function update ?? Model
		redirect("Boss/listBudgets","refresh");
	
	}


	function deleteMember($villagerId)
	{
		$this->villager->setVillagerId($villagerId);
		$this->villager->deleteData();
		$this->listMember();
	}


	function getPKdata($villagerId)
	{
		$this->villager->setVillagerId($villagerId);
		$data['villager']=$this->villager->getPK();
		$this->load->view('editMember',$data);
	}
	
	function getPKdataType($budgetsId)
	{
		$this->Budgets->setBudgetsId($budgetsId);
		$data['budgets']=$this->Budgets->getPK();
		$this->load->view('editBudgets',$data);
	}

	function searchData(){
	$text = $this->input->post('textSearch');
	$this->villager->setTextSearch($text);
	$data['list'] = $this->villager->searchData();
	$this->load->view('search',$data);

}

	function searchVillager()
	{
		$villagerName = $this->input->post('villagerName');    
		$data['villager'] = $this->villager->findByKeyword('villagerName', $villagerName);  //ค้นหาจากชื่อ สมาชิกเพื่อบันทึก
		$this->load->view('searchVillager', $data);
	}
	
	
	function getAllLoan()
	{
			$data['listLoan']=$this->Loan->getAllLoan();
			//var_dump($data);
			$this->load->view('showLoan', $data);
			
	}
	
	
}
?>