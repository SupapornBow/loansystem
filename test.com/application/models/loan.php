<?php 
class Loan extends CI_Model {

    function __construct(){
		$this->load->database();
	   parent::__construct();
    }

######  Attribute  ###### 
    var $loanId ; ######  รหัสการกู้ยืม  ######
    var $loanNum ; ######  จำนวนเงินกู้  ######
    var $loanCredit ; ######  จำนวนวงเงิน  ######
    var $dateLoan ; ######  วันที่กู้  ######
    var $guarantorId ; ######  รหัสผู้ค้ำ  ######
    var $paymentDate ; ######  วันที่ชำระ  ######
    var $paymentStatus ; ######  สถานะการชำระ  ######
    var $statusLoan ; ######  สถานะการกู้  ######
    var $villagerId ; ######  รหัสสมาชิก  ######
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


 ###### SET : $dateLoan ######
    function setDateLoan($dateLoan){
        $this->dateLoan = $dateLoan; 
     }
###### End SET : $dateLoan ###### 


###### GET : $dateLoan ######
    function getDateLoan(){
        return $this->dateLoan; 
     }
###### End GET : $dateLoan ###### 


 ###### SET : $guarantorId ######
    function setGuarantorId($guarantorId){
        $this->guarantorId = $guarantorId; 
     }
###### End SET : $guarantorId ###### 


###### GET : $guarantorId ######
    function getGuarantorId(){
        return $this->guarantorId; 
     }
###### End GET : $guarantorId ###### 


 ###### SET : $paymentDate ######
    function setPaymentDate($paymentDate){
        $this->paymentDate = $paymentDate; 
     }
###### End SET : $paymentDate ###### 


###### GET : $paymentDate ######
    function getPaymentDate(){
        return $this->paymentDate; 
     }
###### End GET : $paymentDate ###### 


 ###### SET : $paymentStatus ######
    function setPaymentStatus($paymentStatus){
        $this->paymentStatus = $paymentStatus; 
     }
###### End SET : $paymentStatus ###### 


###### GET : $paymentStatus ######
    function getPaymentStatus(){
        return $this->paymentStatus; 
     }
###### End GET : $paymentStatus ###### 


 ###### SET : $statusLoan ######
    function setStatusLoan($statusLoan){
        $this->statusLoan = $statusLoan; 
     }
###### End SET : $statusLoan ###### 


###### GET : $statusLoan ######
    function getStatusLoan(){
        return $this->statusLoan; 
     }
###### End GET : $statusLoan ###### 


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



	function addLoan()
	{
		$data = array(
			'loanId' => date('Ymd').$this->getVillagerId(),
			'loanNum' => $this->getLoanNum(),
			'dateLoan' => $this->getDateLoan(),
			'guarantorId' => $this->getGuarantorId(),
			'paymentDate' => $this->getPaymentDate(),
			'paymentStatus' => $this->getPaymentStatus(),
			'statusLoan' => $this->getStatusLoan(),
			'villagerId' => $this->getVillagerId()
		);

		$this->db->insert('loan',$data);
		return $this->db->insert_id();
		echo 'สำเสร็จ';
	}
	
	
	function updateStatusLoan()
	{
		$data = array(
			'statusLoan' => $this->getLoanId(),
		);

		$this->db->where('loan.loanId',$this->getLoanId());
		$this->db->update('loan',$data);
		//echo 'สำเสร็จ';
	}
	
	
		function updatePaymentLoan()
	{
		$data = array(
			'paymentLoan' => $this->paymentLoan(),
		);

		$this->db->where('loan.loanId',$this->getLoanId());
		$this->db->update('loan',$data);
		//echo 'สำเสร็จ';
	}
	
	function getAllLoan()
	{
		
		$this->db->join('guarantor','guarantor.guarantorId = loan.guarantorId');
		$this->db->join('villager','villager.villagerId = loan.villagerId');
		return $this->db->get('loan')->result_array();
	}
	}
?>