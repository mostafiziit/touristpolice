<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data=array();
		$data['navbar']=$this->load->view('navbar','',true);
		$this->load->view('welcome_page',$data);
	}
	public function home(){
		$data=array();
		$data['navbar']=$this->load->view('navbar','',true);
		$this->load->view('home',$data);
	}
	public function touristplace(){
		$data=array();
		$data['navbar']=$this->load->view('navbar','',true);
		$this->load->view('touristplace',$data);
	}
	public function adminsignup(){

			$data=array();
			$data['navbar']=$this->load->view('navbar','',true);
			$this->load->view('adminviews/adminSignup',$data);
	}
}
