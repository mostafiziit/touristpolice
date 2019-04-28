<?php
class adminmodel extends CI_Model{

	 public function signup($name,$email,$password,$phone,$type){

	 	$data['name']=$name;
	 	$data['email']=$email;
	 	$data['password']=md5($password);
	 	$data['phone_number']=$phone;
	 	$data['type']=$type;

		return $this->db->insert('admin',$data);
	}

	public function getAllUserData(){


		return $this->db->get('user_table');
	}
	public function getAllTouristPlace(){


		return $this->db->get('touristplace');
	}

	public function delete($id){

			

 			$this->db->where("id", $id);  
           
		return $this->db->delete("user_table");
	}

	public function addPlace($name,$description,$location,$path){

			$placeInfo=array();
			$placeInfo['name']=$name;
			$placeInfo['description']=$description;
			$placeInfo['location']=$location;
			$placeInfo['path']=$path;

		return $this->db->insert('touristplace',$placeInfo);
	}

	public function addNewDeploy($district,$areaname,$officer_name,$routename,$phone){

		$deploy_table['district']=$district;
		$deploy_table['area_name']=$areaname;
		$deploy_table['officer_name']=$officer_name;
		$deploy_table['route_name']=$routename;
		$deploy_table['phone_number']=$phone;

		return $this->db->insert('deploy_table',$deploy_table);
	}

	public function getAllDeployedData(){

		return $this->db->get('deploy_table');	
	}

	public function getSingleDeployedData($id){

		$this->db->where("id", $id);  
           
		return $this->db->get("deploy_table");
	}

	public function editDeploy($district,$areaname,$officer_name,$routename,$phone,$id){

		$deploy_table['district']=$district;
		$deploy_table['area_name']=$areaname;
		$deploy_table['officer_name']=$officer_name;
		$deploy_table['route_name']=$routename;
		$deploy_table['phone_number']=$phone;

		$this->db->where("id", $id); 
		return $this->db->update('deploy_table',$deploy_table);
	}

	public function delete_deploy($id){

		$this->db->where("id", $id);

		return $this->db->delete('deploy_table');
	}

}
?>