<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel_admin extends CI_Controller {


	public function addhotel(){

		
		$this->load->model('hotelmodel');
		$hotel_data['hotel_data']= $this->hotelmodel->getHotel();
		$this->load->view('adminviews/hotelview',$hotel_data);
	}


	public function insert_hotel()
	{

		$this->load->model('hotelmodel');

		//echo $_POST['placename'];
		$inserted_row= $this->hotelmodel->submit();

		if($inserted_row)
		{
			$hotel_data['hotel_data']= $this->hotelmodel->getHotel();
			$this->load->view('adminviews/hotelview',$hotel_data);
		}
		else
			alert("Sorry! Field NOT Found!!");

		
	}

	public function edit_hotel()
	{


		if(isset($_POST['submit'])){


			$name=$_POST['edit_placename'];
			$contact=$_POST['edit_hotelcontact_text'];
			$touristplaceid=$_POST['edit_toristplaceid_text'];
			$this->load->model('hotelmodel');
			$updated_row=$this->hotelmodel->update_hotelinfo($name,$contact,$touristplaceid);

				if($updated_row){

					

				 $this->session->set_flashdata("result","Succesfully Updated Hotel Information");
				redirect('hotelmanage');
					}
				else{
						
					 $this->session->set_flashdata("result","Failed To Updated!!");
				redirect('hotelmanage');
					}

		}
		else{

			$id=$this->uri->segment(2);
			$this->load->model('hotelmodel');
			$data['hoteldata']=$this->hotelmodel->getHotelInfoByHotelId($id);
			$this->load->view('adminviews/hotel_edit_view',$data);
		}
		

	}


	public function delete()
	{
		$id=$this->uri->segment(2);

		$this->load->model('hotelmodel');
		$deleted_row=$this->hotelmodel->delete_hotel($id);

		if($deleted_row){

					 $this->session->set_flashdata("result","Succesfully Deleted Hotel Information");
				redirect('hotelmanage');
					}
				else{
						
					 $this->session->set_flashdata("result","Failed To Delete!!");
				redirect('hotelmanage');
					}
	}


	
}