<?php 
class User extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $user_Id ; ######  รหัสผู้ใช้งาน  ######
    var $username ; ######  ชื่อผู้ใช้งาน  ######
    var $password ; ######  รหัสผ่าน  ######
    var $status ; ######  สถานะ  ######
###### End Attribute  ###### 

 ###### SET : $user_Id ######
    function setUser_Id($user_Id){
        $this->user_Id = $user_Id; 
     }
###### End SET : $user_Id ###### 


###### GET : $user_Id ######
    function getUser_Id(){
        return $this->user_Id; 
     }
###### End GET : $user_Id ###### 


 ###### SET : $username ######
    function setUsername($username){
        $this->username = $username; 
     }
###### End SET : $username ###### 


###### GET : $username ######
    function getUsername(){
        return $this->username; 
     }
###### End GET : $username ###### 


 ###### SET : $password ######
    function setPassword($password){
        $this->password = $password; 
     }
###### End SET : $password ###### 


###### GET : $password ######
    function getPassword(){
        return $this->password; 
     }
###### End GET : $password ###### 


 ###### SET : $status ######
    function setStatus($status){
        $this->status = $status; 
     }
###### End SET : $status ###### 


###### GET : $status ######
    function getStatus(){
        return $this->status; 
     }
###### End GET : $status ###### 

function login(){
	$this->db->where('username',$this->getUsername());
	$this->db->where('password',$this->getPassword());
	$this->db->limit(1);
	$data=$this->db->get('user')->result_array();
	


	if(!$data){
		return FALSE;
	}
	else{
		return $data;
	}

}

}
?>