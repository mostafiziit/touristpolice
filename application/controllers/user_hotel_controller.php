<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class User_hotel_controller extends CI_Controller
{
	
	public function index() 
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('hotel_feature');
		$this->load->view('footer');
	}
}


?>