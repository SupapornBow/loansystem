<?php 
class Guarantor extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $guarantorId ; ######  รหัสผู้ค้ำ  ######
    var $guarantorPrefixes ; ######  คำนำหน้า  ######
    var $guarantorName ; ######  ชื่อผู้ค้ำ  ######
    var $guarantorLastname ; ######  นามสกุล  ######
    var $guarantorBirthday ; ######  วันเกิด  ######
    var $guarantorAddress ; ######  ที่อยู่  ######
    var $guarantorTel ; ######  เบอร์โทร  ######
    var $guarantorCareer ; ######  อาชีพ  ######
    var $guarantorIdcard ; ######  เลขบัตรประชาชน  ######
###### End Attribute  ###### 

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


 ###### SET : $guarantorPrefixes ######
    function setGuarantorPrefixes($guarantorPrefixes){
        $this->guarantorPrefixes = $guarantorPrefixes; 
     }
###### End SET : $guarantorPrefixes ###### 


###### GET : $guarantorPrefixes ######
    function getGuarantorPrefixes(){
        return $this->guarantorPrefixes; 
     }
###### End GET : $guarantorPrefixes ###### 


 ###### SET : $guarantorName ######
    function setGuarantorName($guarantorName){
        $this->guarantorName = $guarantorName; 
     }
###### End SET : $guarantorName ###### 


###### GET : $guarantorName ######
    function getGuarantorName(){
        return $this->guarantorName; 
     }
###### End GET : $guarantorName ###### 


 ###### SET : $guarantorLastname ######
    function setGuarantorLastname($guarantorLastname){
        $this->guarantorLastname = $guarantorLastname; 
     }
###### End SET : $guarantorLastname ###### 


###### GET : $guarantorLastname ######
    function getGuarantorLastname(){
        return $this->guarantorLastname; 
     }
###### End GET : $guarantorLastname ###### 


 ###### SET : $guarantorBirthday ######
    function setGuarantorBirthday($guarantorBirthday){
        $this->guarantorBirthday = $guarantorBirthday; 
     }
###### End SET : $guarantorBirthday ###### 


###### GET : $guarantorBirthday ######
    function getGuarantorBirthday(){
        return $this->guarantorBirthday; 
     }
###### End GET : $guarantorBirthday ###### 


 ###### SET : $guarantorAddress ######
    function setGuarantorAddress($guarantorAddress){
        $this->guarantorAddress = $guarantorAddress; 
     }
###### End SET : $guarantorAddress ###### 


###### GET : $guarantorAddress ######
    function getGuarantorAddress(){
        return $this->guarantorAddress; 
     }
###### End GET : $guarantorAddress ###### 


 ###### SET : $guarantorTel ######
    function setGuarantorTel($guarantorTel){
        $this->guarantorTel = $guarantorTel; 
     }
###### End SET : $guarantorTel ###### 


###### GET : $guarantorTel ######
    function getGuarantorTel(){
        return $this->guarantorTel; 
     }
###### End GET : $guarantorTel ###### 


 ###### SET : $guarantorCareer ######
    function setGuarantorCareer($guarantorCareer){
        $this->guarantorCareer = $guarantorCareer; 
     }
###### End SET : $guarantorCareer ###### 


###### GET : $guarantorCareer ######
    function getGuarantorCareer(){
        return $this->guarantorCareer; 
     }
###### End GET : $guarantorCareer ###### 


 ###### SET : $guarantorIdcard ######
    function setGuarantorIdcard($guarantorIdcard){
        $this->guarantorIdcard = $guarantorIdcard; 
     }
###### End SET : $guarantorIdcard ###### 


###### GET : $guarantorIdcard ######
    function getGuarantorIdcard(){
        return $this->guarantorIdcard; 
     }
###### End GET : $guarantorIdcard ###### 


function addGuarantor()
	{
		$data = array(
			
			'guarantorPrefixes' => $this->getGuarantorPrefixes(),
			'guarantorName' => $this->getGuarantorName(),
			'guarantorLastname' => $this->getGuarantorLastname(),
			'guarantorBirthday' => $this->getGuarantorBirthday(),
			'guarantorAddress' => $this->getGuarantorAddress(),
			'guarantorTel' => $this->getGuarantorTel(),
			'guarantorCareer' => $this->getGuarantorCareer(),
			'guarantorIdcard' => $this->getGuarantorIdcard()
			
		);
		

		$this->db->insert('guarantor',$data);
		return $this->db->insert_id();
		echo 'สำเสร็จ';
	}
	
	
	function update()
	{
		$data = array(
			
			'guarantorPrefixes' => $this->getGuarantorPrefixes(),
			'guarantorName' => $this->getGuarantorName(),
			'guarantorLastname' => $this->getGuarantorLastname(),
			'guarantorBirthday' => $this->getGuarantorBirthday(),
			'guarantorAddress' => $this->getGuarantorAddress(),
			'guarantorTel' => $this->getGuarantorTel(),
			'guarantorCareer' => $this->getGuarantorCareer(),
			'guarantorIdcard' => $this->getGuarantorIdcard()
			
		);

		$this->db->where('guarantor.guarantorId',$this->getGuarantorId());
		$this->db->update('guarantor',$data);
		//echo 'สำเสร็จ';
	}

}
?>