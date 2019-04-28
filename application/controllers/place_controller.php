<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class place_controller extends CI_Controller {


	public function edit(){

		$id=$this->uri->segment(2);
		if($this->session->userdata('admin')==1){

			$this->load->model('adminModel/place_model');
			$query=$this->place_model->edit($id);
			$result=$query->row();
			$placeinfo=(array) $result;

			if(isset($_POST['submit'])){

				
				$type=explode('.',$_FILES["pic"]["name"]);
    			$type=$type[count($type)-1];
    			$url="./assets/upload/".uniqid(rand()).'.'.$type;

    			
    		
			if(is_uploaded_file($_FILES["pic"]["tmp_name"])){
	    		if(in_array($type,array("jpg","png","gif","jpeg"))){
	    				

							move_uploaded_file($_FILES["pic"]["tmp_name"],$url);

	    					$name=$_POST['placename'];
	    					$description=$_POST['description'];
	    					$location=$_POST['location'];
	    					$path=$url;
		    				$this->load->model('adminModel/place_model');

		    				if($this->place_model->update($id,$name,$description,$location,$path)){

								

		    					redirect('touristplace');
								/*$error['error']="New Tourist Place Added successfully";
								$this->load->view('adminviews/addplace',$error);*/
		    				}

		    				
	    				}
	    				else{

	    					$placeinfo['error']="Error in format or You didn't select any file.You can upload only .jpg, .png, .jpeg, .gif file";
	    					$this->load->view('adminviews/editplace',$placeinfo);

	    					
						
	    				}

	    			}
	    			else{
	    				
	    					$name=$_POST['placename'];
	    					$description=$_POST['description'];
	    					$location=$_POST['location'];
	    					$path=$placeinfo['path'];
	    					
		    				$this->load->model('adminModel/place_model');

		    				if($this->place_model->update($id,$name,$description,$location,$path)){

								

		    					redirect('touristplace');
								/*$error['error']="New Tourist Place Added successfully";
								$this->load->view('adminviews/addplace',$error);*/
		    				}
	    			}
	    		
	    		
			}
			else{

				
				$this->load->view('adminviews/editplace',$placeinfo);
			}
	    		
			
			
		}
		else{

			redirect('adminsignup');	
		}


		/*$array=(array) $result;
		
		foreach ($array as $key => $value) {

			echo $array[$key];
			print_r($key);
		}*/

		/*foreach ($result as $key => $value) {
			echo $result['0'];
		}*/
		
	}

	public function delete($id){
		
		echo $id;
	}

	public function details(){
		
	}
}