<?php
class usermodel extends CI_Model{

	 public function signup($name,$email,$password,$phone){

	 	$data['name']=$name;
	 	$data['email']=$email;
	 	$data['password']=md5($password);
	 	$data['phone_number']=$phone;

		return $this->db->insert('user_table',$data);
	}

}
?>