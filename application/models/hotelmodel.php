<?php

defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * 
 */
class HotelModel extends CI_Model
{
	
	public function getHotel()
	{
		$query=$this->db->get('hotelinfo');
		if($query->num_rows()>0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

	public function submit()
	{
		$fieldArray = array(
			'hotel_name' =>$this->input->post('placename') , 
			'hotel_contact' =>$this->input->post('hotelcontact_text'),
			'touristplace_id'=>$this->input->post('location'),
			'hotel_booking_page'=>$this->input->post('hotelwebpage_text'));
			
		$this->db->insert('hotelinfo',$fieldArray);

		if($this->db->affected_rows()>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function getHotelInfoByHotelId($hotel_id)
	{
		$this->db->where('hotel_id',$hotel_id);
		$query=$this->db->get('hotelinfo');

		if($query->num_rows()>0)
			return $query->row();
		else
			return false;
	}

	public function update_hotelinfo($name,$contact,$touristplaceid)
	{
		// echo "sting";

		 $hotel_id=$this->uri->segment(2);

		 $hotel_data['hotel_name']=$name;
		 $hotel_data['hotel_contact']=$contact;
		 $hotel_data['hotel_booking_page']=$touristplaceid;

		//  echo "$hotel_id";
		//$this->db->set('hotel_name',$name);
		$this->db->where('hotel_id',$hotel_id);
		$this->db->update('hotelinfo',$hotel_data);
		if($this->db->affected_rows()>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function delete_hotel($id)
	{
		$this->db->where('hotel_id',$id);
		$this->db->delete('hotelinfo');

		if($this->db->affected_rows()>0)
		{
			return true;
		}
		else
		{
			return false;
		}


	}
}


?>