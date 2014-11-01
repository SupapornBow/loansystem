<?php
/*
#########################
Model: Villager
ผู้พัฒนา: น.ส.สุภาพร  บัวลิถึง
พัฒนาเมื่อ: 2014-10-29 11:11 AM
ภายในประกอบด้วย
Database: loansystem
========
Villager (villager)
========
- villagerId
- villagerName
- villagerLastname
- villagerSex
- villagerAddress
- villagerTel
- villagerIdcard
- villagerStatus
========
+ add()
+ findByPK($bookId)
+ findByKeyword($field, $value)
+ findByAll()
+ delete()
#########################
*/
class Villager extends CI_Model
{
	var $villagerId; //PK
	var $villagerName; //ชื่อสมาชิกหมู่บ้าน
	var $villagerLastname; //นามสกุล
	var $villagerSex; //เพศ
	var $villagerAddress; //ที่อยู่
	var $villagerTel; //เบอร์โทร
	var $villagerIdcard; //หมายเลขบัตรประชาชน
	var $villagerStatus; //สถานะสมาชิกหมู่บ้าน
	
	function __construct()
	{
		$this->load->database();
		parent::__construct();
	}
	
	###### SET : villagerId (PK) ######
	function setVillagerId($villagerId)
	{
		$this->villagerId = $villagerId;
	}

	###### GET : villagerId (PK) ######
	function getVillagerId()
	{
		return $this->villagerId;
	}

	###### SET : villagerName (ชื่อสมาชิกหมู่บ้าน) ######
	function setVillagerName($villagerName)
	{
		$this->villagerName = $villagerName;
	}

	###### GET : villagerName (ชื่อสมาชิกหมู่บ้าน) ######
	function getVillagerName()
	{
		return $this->villagerName;
	}

	###### SET : villagerLastname (นามสกุล) ######
	function setVillagerLastname($villagerLastname)
	{
		$this->villagerLastname = $villagerLastname;
	}

	###### GET : villagerLastname (นามสกุล) ######
	function getVillagerLastname()
	{
		return $this->villagerLastname;
	}

	###### SET : villagerSex (เพศ) ######
	function setVillagerSex($villagerSex)
	{
		$this->villagerSex = $villagerSex;
	}

	###### GET : villagerSex (เพศ) ######
	function getVillagerSex()
	{
		return $this->villagerSex;
	}
	
	###### SET : villagerAddress (ที่อยู่) ######
	function setVillagerAddress($villagerAddress)
	{
		$this->villagerAddress = $villagerAddress;
	}

	###### GET : villagerAddress (ที่อยู่) ######
	function getVillagerAddress()
	{
		return $this->villagerAddress;
	}

	###### SET : villagerTel (เบอร์โทร) ######
	function setVillagerTel($villagerTel)
	{
		$this->villagerTel = $villagerTel;
	}

	###### GET : villagerTel (เบอร์โทร) ######
	function getVillagerTel()
	{
		return $this->villagerTel;
	}

	###### SET : villagerIdcard (หมายเลขบัตรประชาชน) ######
	function setVillagerIdcard($villagerIdcard)
	{
		$this->villagerIdcard = $villagerIdcard;
	}

	###### GET : villagerIdcard (หมายเลขบัตรประชาชน) ######
	function getVillagerIdcard()
	{
		return $this->villagerIdcard;
	}

	###### SET : villagerStatus (สถานะสมาชิกหมู่บ้าน) ######
	function setVillagerStatus($villagerStatus)
	{
		$this->villagerStatus = $villagerStatus;
	}

	###### GET : villagerStatus (สถานะสมาชิกหมู่บ้าน) ######
	function getVillagerStatus()
	{
		return $this->villagerStatus;
	}
#############################################################
/*
function findByAll()
	

*/
#############################################################

	function findByAll()
	{
		$query = $this->db->get('villager')->result_array();
		return $query;
	}
	
#############################################################
/*
function getPK()
	

*/
#############################################################
	function getPK()
	{
		$this->db->where('villagerId',$this->getVillagerId());
		$query = $this->db->get('villager')->result_array();
		return $query;
	}

#############################################################
/*
function findByKeyword($field, $value)
	

*/
#############################################################
	function findByKeyword($field, $value)
	{

		$this->db->like($field, $value);	
		
		$query = $this->db->get('villager')->result_array();

		return $query;
	}

#############################################################
/*
function addVilllager()
	

*/
#############################################################
	function addVilllager()
	{
		$data = array(
			'loanShare' => $this->getLoanShare(),
			'loanNum' => $this->getLoanNum(),
			'loanCredit' => $this->getLoanCredit()
		);
		
		$this->db->insert('loanmember',$data);
		return $this->db->insert_id();
		//echo 'สำเสร็จ';
	}
#############################################################
/*
function getallData()
	แสดงข้อมูลทั้งหมด

*/
#############################################################
	function getallData()
	{
		return $this->db->get('villager')->result_array();
	}
	
	function updateTest()
	{
		$data = array(
			'villagerName' => $this->getVillagerName(),
			'villagerLastname' => $this->getVillagerLastname(),
			'villagerSex' => $this->getVillagerSex(),
			'villagerAddress' => $this->getVillagerAddress(),
			'villagerTel' => $this->getVillagerTel(),
			'villagerIdcard' => $this->getVillagerIdcard(),
			'villagerStatus' => $this->getVillagerStatus()
		);
		$this->db->where('villagerId',$this->getVillagerId());
		$this->db->update('villager',$data);
		//echo 'สำเสร็จ';
	}
	
#############################################################
/*
function deleteData()
	

*/
#############################################################
	function deleteData()
	{
		$this->db->where('villagerId',$this->getVillagerId());
		$this->db->delete('villager');
		
	}
}
?>