<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {


	public function adminSignUp(){

		
		if(!$this->session->userdata('admin')){


				if(isset($_POST['submit'])){
					$this->form_validation->set_rules('username','Username','required');
					$this->form_validation->set_rules('email','Email','required');
					$this->form_validation->set_rules('password','Password','required|min_length[5]');
					$this->form_validation->set_rules('phone','Phone','required');
					$this->form_validation->set_rules('type','Usertype','required');

					if($this->form_validation->run()==TRUE){

						

						$this->load->model('adminModel/adminmodel');

						$name=$_POST['username'];
						$email=$_POST['email'];
						$password=$_POST['password'];
						$phone=$_POST['phone'];
						$type=$_POST['type'];

						if($this->adminmodel->signup($name,$email,$password,$phone,$type)){

							$this->session->set_userdata('admin','1');
							redirect('adminpanel');
						}
					}
					else{

						
					}
				}
				else{

						$data=array();
						$data['navbar']=$this->load->view('navbar','',true);
						$this->load->view('adminviews/adminSignup',$data);
				}
				
					
		}
		else{

			$data=array();
			$data['navbar']=$this->load->view('navbar','',true);
			$this->load->view('adminviews/adminpanel',$data);
		}
	}

	public function manageuser(){

		
		if($this->session->userdata('admin')==1){

			$data=array();
			$data['navbar']=$this->load->view('navbar','',true);
			$this->load->model('adminModel/adminmodel');
			$query=$this->adminmodel->getAllUserData();
			$data['userdata']=$query->result();
			$this->load->view('adminviews/manageuser',$data);
		}
		else{
			$data=array();
			$data['navbar']=$this->load->view('navbar','',true);
			$this->load->view('adminviews/adminSignup',$data);
			
		}
	}

	public function delete($id){
 

			if(isset($id)){

				$this->load->model('adminModel/adminmodel');
				$result=$this->adminmodel->delete($id);

				if($result){

					$this->session->set_flashdata('successs','User deleted successfully');
				}
				else{

					$this->session->set_flashdata("successs","Fail to delete user");
				}

				redirect('manageuser');
			}
			
		
	}

	public function touristplace(){

		if($this->session->userdata('admin')==1){

			$data=array();
			$data['navbar']=$this->load->view('navbar','',true);
			$this->load->model('adminModel/adminmodel');
			$query=$this->adminmodel->getAllTouristPlace();
			$data['placeinfo']=$query->result();
			$this->load->view('adminviews/touristplace',$data);
		}
		else{
			$data=array();
			$data['navbar']=$this->load->view('navbar','',true);
			$this->load->view('adminviews/adminSignup',$data);
			
		}
	}

	public function addplace(){

		if($this->session->userdata('admin')==1){

			if(isset($_POST['submit'])){

				$type=explode('.',$_FILES["pic"]["name"]);
    			$type=$type[count($type)-1];
    			$url="./assets/upload/".uniqid(rand()).'.'.$type;

    			$error=array();
    			if($type){

	    			if(in_array($type,array("jpg","png","gif","jpeg"))){
	    				if(is_uploaded_file($_FILES["pic"]["tmp_name"])){

							move_uploaded_file($_FILES["pic"]["tmp_name"],$url);

	    					$name=$_POST['placename'];
	    					$description=$_POST['description'];
	    					$location=$_POST['location'];
	    					$path=$url;
		    				$this->load->model('adminModel/adminmodel');

		    				if($this->adminmodel->addPlace($name,$description,$location,$path)){

								

		    					redirect('touristplace');
								/*$error['error']="New Tourist Place Added successfully";
								$this->load->view('adminviews/addplace',$error);*/
		    				}

		    				
	    				}
	    				else{

	    					
							$error['error']="fail to upload image";
							$this->load->view('adminviews/addplace',$error);

	    				}

	    			}
	    			else{
	    				
	    				$error['error']="Error in format or You didn't select any file.You can upload only .jpg, .png, .jpeg, .gif file";
	    				$this->load->view('adminviews/addplace',$error);
	    			}
	    		}
	    		else{

					$error['error']="You didn't select any image.";
	    			$this->load->view('adminviews/addplace',$error);
	    		}
			}
			else{

				$error['error']=null;
				$this->load->view('adminviews/addplace',$error);
			}
	    		
			
			
		}
		else{

			$data=array();
			$data['navbar']=$this->load->view('navbar','',true);
			$this->load->view('adminviews/adminSignup',$data);
			
		}

	}

	public function deploy(){

		if($this->session->userdata('admin')==1){
			
			$data=array();
			$this->load->model('adminModel/adminmodel');
			$query=$this->adminmodel->getAllDeployedData();
			$data['deployinfo']=$query->result();
			$this->load->view('adminviews/deploy',$data);
		}
		else{

			$data=array();
			$data['navbar']=$this->load->view('navbar','',true);
			$this->load->view('adminviews/adminSignup',$data);
		}
	}

	public function newdeploy(){

		if($this->session->userdata('admin')==1){
			$error['error']=null;
			$error['type']="add";
			$this->load->view('adminviews/newdeploy',$error);

		}else{


			$data=array();
			$data['navbar']=$this->load->view('navbar','',true);
			$this->load->view('adminviews/adminSignup',$data);
		}
	}

	public function add_deploy(){

		
			if(isset($_POST['submit'])){

				$district=$_POST["district"];
				$areaname=$_POST["areaname"];
				$officer_name=$_POST["officer_name"];
				$routename=$_POST["routename"];
				$phone=$_POST["phone"];
				$type=$_POST["type"];
				

				$this->load->model('adminModel/adminmodel');
				
				echo $type;
				if($type=='edit'){
					$id=$_POST["id"];
					echo $id."dddd";
					if($this->adminmodel->editDeploy($district,$areaname,$officer_name,$routename,$phone,$id)){

						redirect('deploy');
					}
				}
				else{

					if($this->adminmodel->addNewDeploy($district,$areaname,$officer_name,$routename,$phone)){

						/*$data=array();
						$query=$this->adminmodel->getAllDeployedData();
						$data['deployinfo']=$query->result();
						$data['error']="successfully Added New Duty";
						$this->load->view('adminviews/deploy',$data);*/
						redirect('deploy');
						
					}
				}
				



			}
		
	}
	public function edit_deploy($id){


		$this->load->model('adminModel/adminmodel');
		$query=$this->adminmodel->getSingleDeployedData($id);
		$data=(array)$query->row();


		$data['type']="edit";
		$data['id']=$id;
		$this->load->view('adminviews/newdeploy',$data);

		/*$arr=(array) $data;
		print_r($arr);*/
	}

	public function delete_deploy($id){

		$this->load->model('adminModel/adminmodel');
		$query=$this->adminmodel->delete_deploy($id);
		if($query){

			redirect('deploy');
		}
	}
	
}
