<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	public function index()
	{
		
	}
	public function usersignup(){


			
			if(isset($_POST['submit'])){

					$this->form_validation->set_rules('username','Username','required');
					$this->form_validation->set_rules('email','Email','required');
					$this->form_validation->set_rules('password','Password','required|min_length[5]');
					$this->form_validation->set_rules('phone','Phone','required');

					if($this->form_validation->run()==TRUE){

						

						$this->load->model('usermodel/usermodel');

						$name=$_POST['username'];
						$email=$_POST['email'];
						$password=$_POST['password'];
						$phone=$_POST['phone'];

						if($this->usermodel->signup($name,$email,$password,$phone)){

							$this->session->set_userdata('user',1);
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

		
		if($this->session->userdata('user')){
			
			$data=array();
			$data['navbar']=$this->load->view('navbar','',true);
			$this->load->view('userviews/book_security_service',$data);
			
		}
		else{

			redirect('usersignup');
		}

	}
}
?>