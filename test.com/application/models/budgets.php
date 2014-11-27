<?php 
class Budgets extends CI_Model {

    function __construct(){
	$this->load->database();
	   parent::__construct();
    }

######  Attribute  ###### 
    var $budgetsId ; ######  รหัสงบประมาณ  ######
    var $budgetsDate ; ######  วันที่งบประมาณเข้า  ######
    var $budgetsNum ; ######  จำนวนเงิน  ######
###### End Attribute  ###### 

 ###### SET : $budgetsId ######
    function setBudgetsId($budgetsId){
        $this->budgetsId = $budgetsId; 
     }
###### End SET : $budgetsId ###### 


###### GET : $budgetsId ######
    function getBudgetsId(){
        return $this->budgetsId; 
     }
###### End GET : $budgetsId ###### 


 ###### SET : $budgetsDate ######
    function setBudgetsDate($budgetsDate){
        $this->budgetsDate = $budgetsDate; 
     }
###### End SET : $budgetsDate ###### 


###### GET : $budgetsDate ######
    function getBudgetsDate(){
        return $this->budgetsDate; 
     }
###### End GET : $budgetsDate ###### 


 ###### SET : $budgetsNum ######
    function setBudgetsNum($budgetsNum){
        $this->budgetsNum = $budgetsNum; 
     }
###### End SET : $budgetsNum ###### 


###### GET : $budgetsNum ######
    function getBudgetsNum(){
        return $this->budgetsNum; 
     }
###### End GET : $budgetsNum ###### 

 ###### SET : $loanType ######
    function setLoanType($loanType){
        $this->loanType = $loanType; 
     }
###### End SET : $loanType ###### 


###### GET : $loanType ######
    function getLoanType(){
        return $this->loanType; 
     }
###### End GET : $loanType ###### 



function findByAll()
	{
		
		$query = $this->db->get('budgets')->result_array();
		//var_dump($query);
		//die();
		return $query;
	}


function addBudget()
	{
		$data = array(
			
			'budgetsDate' => $this->getBudgetsDate(),
			'budgetsNum' => $this->getBudgetsNum(),
			'loanType' => $this->getLoanType()
		);

		$this->db->insert('budgets',$data);
		return $this->db->insert_id();
		echo 'สำเสร็จ';
	}
	
	function update()
	{
		$data = array(
			
			'budgetsDate' => $this->getBudgetsDate(),
			'budgetsNum' => $this->getBudgetsNum()
			
		);

		$this->db->where('budgets.budgetsId',$this->getBudgetsId());
		$this->db->update('budgets',$data);
		//echo 'สำเสร็จ';
	}
	
		function getPK()
	{
		$this->db->where('budgetsId',$this->getBudgetsId());
		//$this->db->where('status','active');
		$query = $this->db->get('budgets')->result_array();
		return $query;

	}
}
?>