<?php 
class Villager extends CI_Model {

    function __construct()
	{
		$this->load->database();
	   parent::__construct();
    }

######  Attribute  ###### 
    var $villagerId ; ######  รหัสสมาชิก  ######
    var $prefixes ; ######  คำนำหน้า  ######
    var $villagerName ; ######  ชื่อสมาชิก  ######
    var $villagerLastname ; ######  นามสกุล  ######
    var $villagerBirthday ; ######  วันเกิด  ######
    var $villagerAddress ; ######  ที่อยู่  ######
    var $villagerTel ; ######  เบอร์โทร  ######
    var $villagerCareer ; ######  อาชีพ  ######
    var $villagerShare ; ######  จำนวนหุ้น  ######
    var $villagerIdcard ; ######  เลขบัตรประชาชน  ######
    var $villagerStatus ; ######  สถานะ  ######
    var $typeId ; ######  รหัสประเภทการกู้  ######
	var $userName;
	var $passWord;
	var $loanCredit;

###### End Attribute  ###### 

 ###### SET : $villagerId ######
    function setVillagerId($villagerId){
        $this->villagerId = $villagerId; 
     }
###### End SET : $villagerId ###### 


###### GET : $villagerId ######
    function getVillagerId(){
        return $this->villagerId; 
     }
###### End GET : $villagerId ###### 


 ###### SET : $prefixes ######
    function setPrefixes($prefixes){
        $this->prefixes = $prefixes; 
     }
###### End SET : $prefixes ###### 


###### GET : $prefixes ######
    function getPrefixes(){
        return $this->prefixes; 
     }
###### End GET : $prefixes ###### 


 ###### SET : $villagerName ######
    function setVillagerName($villagerName){
        $this->villagerName = $villagerName; 
     }
###### End SET : $villagerName ###### 


###### GET : $villagerName ######
    function getVillagerName(){
        return $this->villagerName; 
     }
###### End GET : $villagerName ###### 


 ###### SET : $villagerLastname ######
    function setVillagerLastname($villagerLastname){
        $this->villagerLastname = $villagerLastname; 
     }
###### End SET : $villagerLastname ###### 


###### GET : $villagerLastname ######
    function getVillagerLastname(){
        return $this->villagerLastname; 
     }
###### End GET : $villagerLastname ###### 


 ###### SET : $villagerBirthday ######
    function setVillagerBirthday($villagerBirthday){
        $this->villagerBirthday = $villagerBirthday; 
     }
###### End SET : $villagerBirthday ###### 


###### GET : $villagerBirthday ######
    function getVillagerBirthday(){
        return $this->villagerBirthday; 
     }
###### End GET : $villagerBirthday ###### 


 ###### SET : $villagerAddress ######
    function setVillagerAddress($villagerAddress){
        $this->villagerAddress = $villagerAddress; 
     }
###### End SET : $villagerAddress ###### 


###### GET : $villagerAddress ######
    function getVillagerAddress(){
        return $this->villagerAddress; 
     }
###### End GET : $villagerAddress ###### 


 ###### SET : $villagerTel ######
    function setVillagerTel($villagerTel){
        $this->villagerTel = $villagerTel; 
     }
###### End SET : $villagerTel ###### 


###### GET : $villagerTel ######
    function getVillagerTel(){
        return $this->villagerTel; 
     }
###### End GET : $villagerTel ###### 


 ###### SET : $villagerCareer ######
    function setVillagerCareer($villagerCareer){
        $this->villagerCareer = $villagerCareer; 
     }
###### End SET : $villagerCareer ###### 


###### GET : $villagerCareer ######
    function getVillagerCareer(){
        return $this->villagerCareer; 
     }
###### End GET : $villagerCareer ###### 


 ###### SET : $villagerShare ######
    function setVillagerShare($villagerShare){
        $this->villagerShare = $villagerShare; 
     }
###### End SET : $villagerShare ###### 


###### GET : $villagerShare ######
    function getVillagerShare(){
        return $this->villagerShare; 
     }
###### End GET : $villagerShare ###### 


 ###### SET : $villagerIdcard ######
    function setVillagerIdcard($villagerIdcard){
        $this->villagerIdcard = $villagerIdcard; 
     }
###### End SET : $villagerIdcard ###### 


###### GET : $villagerIdcard ######
    function getVillagerIdcard(){
        return $this->villagerIdcard; 
     }
###### End GET : $villagerIdcard ###### 


 ###### SET : $villagerStatus ######
    function setVillagerStatus($villagerStatus){
        $this->villagerStatus = $villagerStatus; 
     }
###### End SET : $villagerStatus ###### 


###### GET : $villagerStatus ######
    function getVillagerStatus(){
        return $this->villagerStatus; 
     }
###### End GET : $villagerStatus ###### 


 ###### SET : $typeId ######
    function setTypeId($typeId){
        $this->typeId = $typeId; 
     }
###### End SET : $typeId ###### 


###### GET : $typeId ######
    function getTypeId(){
        return $this->typeId; 
     }
###### End GET : $typeId ###### 


 ###### SET : $userName ######
    function setUserName($userName){
        $this->userName = $userName; 
     }
###### End SET : $userName###### 


###### GET : $userName ######
    function getUserName(){
        return $this->userName; 
     }
###### End GET : $userName ###### 


###### SET : $passWord ######
    function setPassWord($passWord){
        $this->passWord = $passWord; 
     }
###### End SET : $passWord###### 


###### GET : $passWord ######
    function getPassWord(){
        return $this->passWord; 
     }
###### End GET : $passWord ###### 

###### SET : $passWord ######
    function setLoanCredit($loanCredit){
        $this->loanCredit = $loanCredit; 
     }
###### End SET : $passWord###### 


###### GET : $passWord ######
    function getLoanCredit(){
        return $this->loanCredit; 
     }
###### End GET : $passWord ###### 


	function login()
	{
		$this->db->where('userName', $this->getUserName());
		$this->db->where('passWord', $this->getPassWord());
		$this->db->where('status','active');
		$query = $this->db->get('villager')->result_array();
		if($query)
		{
			return $query;
		}
		else
		 {
			return FALSE;
		}
	}
	

function findByAllActive()
	{
		$this->db->where('status','active');
		$query = $this->db->get('villager')->result_array();
		//var_dump($query);
		//die();
		return $query;
	}
	
	function findByAll()
	{
		$query = $this->db->get('villager')->result_array();
		//var_dump($query);
		//die();
		return $query;
	}
	
	function findByAllBoss()
	{
		$query = $this->db->get('villager')->result_array();
		//var_dump($query);
		//die();
		return $query;
	}
	
	
	function addVilllager()
	{
		$data = array(
			
			'prefixes' => $this->getPrefixes(),
			'villagerName' => $this->getVillagerName(),
			'villagerLastname' => $this->getVillagerLastname(),
			'villagerBirthday' => $this->getVillagerBirthday(),
			'villagerAddress' => $this->getVillagerAddress(),
			'villagerIdcard' => $this->getVillagerIdcard(),
			'villagerTel' => $this->getVillagerTel(),
			'villagerCareer' => $this->getVillagerCareer(),
			'villagerShare' => $this->getVillagerShare(),
			'loanCredit' => $this->getLoanCredit()
			
		);

		$this->db->insert('villager',$data);
		return $this->db->insert_id();
		echo 'สำเสร็จ';
	}


	function addBoss()
	{
		$data = array(
			
			'prefixes' => $this->getPrefixes(),
			'villagerName' => $this->getVillagerName(),
			'villagerLastname' => $this->getVillagerLastname(),
			'villagerBirthday' => $this->getVillagerBirthday(),
			'villagerAddress' => $this->getVillagerAddress(),
			'villagerIdcard' => $this->getVillagerIdcard(),
			'villagerTel' => $this->getVillagerTel(),
			'villagerCareer' => $this->getVillagerCareer(),
			'villagerShare' => $this->getVillagerShare(),
			'villagerStatus' => 'boss',
			'loanCredit' => $this->getLoanCredit()
			
		);

		$this->db->insert('villager',$data);
		return $this->db->insert_id();
		echo 'สำเสร็จ';
	}

	function update()
	{
		$data = array(
			
			'prefixes' => $this->getPrefixes(),
			'villagerName' => $this->getVillagerName(),
			'villagerLastname' => $this->getVillagerLastname(),
			'villagerAddress' => $this->getVillagerAddress(),
			'villagerIdcard' => $this->getVillagerIdcard(),
			'villagerTel' => $this->getVillagerTel(),
			'villagerCareer' => $this->getVillagerCareer(),
			'villagerShare' => $this->getVillagerShare(),
			'loanCredit' => $this->getLoanCredit()
		);

		$this->db->where('villager.villagerId',$this->getVillagerId());
		$this->db->update('villager',$data);
		//echo 'สำเสร็จ';
	}



		function getPK()
	{
		$this->db->where('villagerId',$this->getVillagerId());
		$this->db->where('status','active');
		$query = $this->db->get('villager')->result_array();
		return $query;

	}


	function deleteData()
	{
		$data = array(
			
			'status'=>'nonActive'
			
		);

		$this->db->where('villagerId',$this->getVillagerId());
		$this->db->update('villager',$data);
	}


	function setTextSearch($textSearch){
        $this->textSearch = $textSearch;
     }
    function getTextSearch(){
        return $this->textSearch;
     }


	function searchData()
	{
		$this->db->like('villagerId ', $this->getTextSearch());
		$this->db->or_like('villagerName ', $this->getTextSearch());
	return $this->db->get('villager')->result_array();
	}


	function findByKeyword($field, $value)
	{
		$this->db->like($field, $value);	
		$query = $this->db->get('villager')->result_array();
		return $query;
	}
	
}
?>