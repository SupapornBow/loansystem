<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Boss extends CI_Controller {

	public function index()
	{
		 $logindata=$this->session->userdata('logindata');
		 $this->load->view('homelogin',$logindata);
	}

	public function logout()
	{
		$this->session->unset_userdata('logindata');
		 header("Location: /index.php/checkLogin");
	}

	///////////********************////////////////////
	function showVillager()
		{
			$data['villager'] = $this->villager->findByAll();
			$this->load->view('showVillager',$data);

			/*var_dump($data);
			die();*/
		}

		function showAddVillager()
		{
			$data['villager'] = $this->villager->findByAll();
			$this->load->view('addVillager',$data);

			/*var_dump($data);
			die();*/
		}

		function searchVillager()
	{
		$villagerName = $this->input->post('villagerName');    
		
		$data['villager'] = $this->villager->findByKeyword('villagerName', $villagerName);  //ค้นหาจากชื่อ สมาชิกเพื่อบันทึก

		$this->load->view('searchVillager', $data);
	}
	
	function addVillager()
	{
		$this->villager->setVillagerId($villagerId);
		$data['villager'] = $this->villager->getPK();

		$this->load->view('addVillager');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */