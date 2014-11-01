<?php 
class Loanmember extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $loanId ; ######  รหัสการกู้  ######
    var $loanShare ; ######  จำนวนหุ้น  ######
    var $loanNum ; ######  จำนวนเงินกู้  ######
    var $loanCredit ; ######  วงเงินการกู้  ######
###### End Attribute  ###### 


 ###### SET : $loanId ######
    function setLoanId($loanId){
        $this->loanId = $loanId; 
     }
###### End SET : $loanId ###### 


###### GET : $loanId ######
    function getLoanId(){
        return $this->loanId; 
     }
###### End GET : $loanId ###### 


 ###### SET : $loanShare ######
    function setLoanShare($loanShare){
        $this->loanShare = $loanShare; 
     }
###### End SET : $loanShare ###### 


###### GET : $loanShare ######
    function getLoanShare(){
        return $this->loanShare; 
     }
###### End GET : $loanShare ###### 


 ###### SET : $loanNum ######
    function setLoanNum($loanNum){
        $this->loanNum = $loanNum; 
     }
###### End SET : $loanNum ###### 


###### GET : $loanNum ######
    function getLoanNum(){
        return $this->loanNum; 
     }
###### End GET : $loanNum ###### 


 ###### SET : $loanCredit ######
    function setLoanCredit($loanCredit){
        $this->loanCredit = $loanCredit; 
     }
###### End SET : $loanCredit ###### 


###### GET : $loanCredit ######
    function getLoanCredit(){
        return $this->loanCredit; 
     }
###### End GET : $loanCredit ###### 

#############################################################
/*
function findByAll()
	

*/
#############################################################
	function findByAll()
	{
		$query = $this->db->get('loanmember')->result_arrary();
		return $query;
	}

#############################################################
/*
function getPK()
	

*/
#############################################################
	function getPK()
	{
		$this->db->where('loanId',$this->getLoanId());
		$query = $this->db->get('loanmember')->result_array();
		return $query;
	}

#############################################################
/*
function addVilllager()
	

*/
#############################################################
	function addMember()
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
		return $this->db->get('loanmember')->result_array();
	}
	
	#############################################################
/*
function updateMember()
	

*/
#############################################################
	function updateMember()
	{
		$data = array(
			'loanShare' => $this->getLoanShare(),
			'loanNum' => $this->getLoanNum(),
			'loanCredit' => $this->getLoanCredit()
		);
		$this->db->where('loanId',$this->getLoanId());
		$this->db->update('loanmember',$data);
		//echo 'สำเสร็จ
	}
	
	function getLoanmemberVillager()
	{
		$this->db->join('villager','villager.villagerId = loanmember.villagerId');
		$query = $this->db->get('loanmember')->result_array();
		return $query;
	}
}
?>