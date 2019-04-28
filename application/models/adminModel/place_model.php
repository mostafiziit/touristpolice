<?php
class place_model extends CI_Model{

	public function edit($id){


		
		$this->db->where("id", $id);  

		return $this->db->get("touristplace");
	}


	public function update($id,$name,$description,$location,$path){


		$data['name']=$name;
		$data['description']=$description;
		$data['location']=$location;
		$data['path']=$path;
		$this->db->where("id", $id);  

		return $this->db->update("touristplace",$data);
	}

	public function delete(){

	}

	public function details(){

	}

}