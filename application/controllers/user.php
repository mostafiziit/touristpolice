<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	
	public function user_login(){

		if(isset($_POST['submit'])){

			$email=$_POST['email'];
			$password=md5($_POST['password']);

			$this->load->model('usermodel/usermodel');
			if($this->usermodel->user_logIn($email,$password)>0){

				$this->session->set_userdata('user_state',"logged_in");
				redirect('home');
			}
			else{

				$this->session->set_flashdata("result","Invalid Username Or Password");
				redirect('welcome_page');
			}
		}

	}

	public function user_logout(){

		$this->session->set_userdata('user_state',"log_out");
		redirect('welcome_page');
	}
	public function usersignup(){


			
			if(isset($_POST['submit'])){

					$this->form_validation->set_rules('name','Username','required');
					$this->form_validation->set_rules('email','Email','required');
					$this->form_validation->set_rules('password','Password','required|min_length[5]');
					$this->form_validation->set_rules('phone','Phone','required');

					if($this->form_validation->run()==TRUE){

						

						$this->load->model('usermodel/usermodel');

						$name=$_POST['name'];
						$email=$_POST['email'];
						$password=$_POST['password'];
						$phone=$_POST['phone'];

						if($this->usermodel->signup($name,$email,$password,$phone)){

							$this->session->set_userdata('user_state',"logged_in");
							$this->session->set_userdata('useremail',$email);
							$this->session->set_userdata('password',$password);

							redirect('home');
							
						}
						else{

							echo "Fail to sign up";
						}
						
					}
					else{

						$data=array();
						$data['navbar']=$this->load->view('navbar','',true);
						$this->load->view('userviews/usersignup',$data);
					}
				}
				else{

					$data=array();
					$data['navbar']=$this->load->view('navbar','',true);
					$this->load->view('userviews/usersignup',$data);
				}	
					
		

			
	}

	public function add_security_service(){

		
		if($this->session->userdata('user_state')){

			if(isset($_POST['submit'])){

				$this->load->model('usermodel/usermodel');
				$id=$this->usermodel->getUserId($this->session->userdata('useremail'),$this->session->userdata('password'));
				$data['location']=$_POST['location'];
				$data['user_id']=$id->id;
				$data['officer_id']=$_POST['officer_id'];
				$data['start_date']=$_POST['start_date'];
				$data['end_date']=$_POST['end_date'];
				$data['area_id']=$_POST['palce_id'];


				if($data['area_id']=="no place to suggest"){

					$this->session->set_flashdata("error","Fail to Booked Service.please select a valid place");
					redirect('security_service');
				}
				else if($data['officer_id']=="no place to suggest"){

					
					$this->session->set_flashdata("error","Fail to Booked Service.please select a officer");
					redirect('security_service');
				}
				else{

					if($this->usermodel->add_service($data)){

						$this->session->set_flashdata("error","Successfully Booked Service.");

						redirect('home');
					}
					else{

						$this->session->set_flashdata("error","Fail to Booked Service.There is an error in info..");
					}

				}

				


			}
			else{

				$data=array();
				$this->load->model('usermodel/usermodel');
				$data['officers_info']=$this->usermodel->getOfficersData('Dhaka');
				$data['navbar']=$this->load->view('navbar','',true);
				$this->load->view('userviews/book_security_service',$data);
			}
			
			
			
		}
		else{

			redirect('usersignup');
		}

	}

	public function search_places(){

		
		if(isset($_POST["location"])){

			
			$this->load->model('usermodel/usermodel');
			$row=$this->usermodel->search_places($_POST["location"]);
			$output='';

			if(count($row)>0){

				foreach ($row as $value) {
					
					$output.='<option style="color:black" value='.$value->id.'>'.$value->name.',location: '.$value->location.'</option>';
				}

			}
			else{

				$output.='<option style="color:black"> no place to suggest</option>';
			}

			

			echo $output;





		}
	}
	public function search_officers(){

		
		if(isset($_POST["location"])){

			
			$this->load->model('usermodel/usermodel');
			$row=$this->usermodel->search_officers($_POST["location"]);
			$output='';

			if(count($row)>0){

				foreach ($row as $value) {
					
					$output.='<option style="color:black" value='.$value->id.'>'.$value->name.',location: '.$value->location.'</option>';
				}

			}
			else{

				$output.='<option style="color:black"> no place to suggest</option>';
			}

			

			echo $output;




		}
	}

	public function touristArea(){

		$data=array();
		$data['navbar']=$this->load->view('navbar','',true);
		$this->load->view('userviews/touristArea',$data);
	}
}
?>