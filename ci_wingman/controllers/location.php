<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Location extends CI_Controller{
	
	public $pdata = array();
	
	
	function index()// default web page. 
	{
		
	}
	
	function add_location()
	{
		$this->form_validation->set_rules('locationName', 'Location Name', 'required');
		$this->form_validation->set_rules('locationName', 'Location Name', 'callback_location_exists');
		
		
		// Done: create callback rule that checks if location exists. 
		
		if ($this->form_validation->run() == TRUE)
		{
			//form is accepted.
			$data = $this->input->post(); 
			$this->session->set_userdata('locationName', $data['locationName']);
			
			if($data['plant_storage'] == 'plant')
			{
				//plant is selected. 
				$this->load->model('mlocation');
				$this->mlocation->create($data['locationName'], 'plant');
				redirect('location/add_location_row');
			}
			
			if($data['plant_storage'] == 'storage')
			{
				//plant is selected.
				$this->load->model('mlocation');
				$this->mlocation->create($data['locationName'], 'storage');
				
				redirect('location/add_location_row');
				
			}
		}
		else
		{
			//form is invalid 
			
			$this->load->view('add_location');
		}
	}
	
	function add_location_row_finish() 
	{
		$this->load->view('add_location_row_finish');
	}
	
	function add_location_row()
	{
		
		$this->form_validation->set_rules('row', 'Row', 'required');
		$this->form_validation->set_rules('space', 'Space', 'required');
		
		if ($this->form_validation->run() == TRUE)
		{
			//form is accepted.
			$data = $this->input->post();
			$this->load->model('mlocation');
			$result = $this->mlocation->getID($this->session->userdata('locationName'));				
			$this->mlocation->createRow((int)$result, (int)$data['row'], (int)$data['space']);	
			redirect('location/add_location_row_finish');
		}
		
		else 
		{
			//redirect('location/add_location_row');
			$this->load->view('add_location_row');
		}	
	}
	
	
	function location_exists($locationName)
	{
		$this->load->model('mlocation');
		$exists = $this->mlocation->exists($locationName);
		
		if($exists == TRUE)
		{
			$this->form_validation->set_message('Location already exists');
			return FALSE;
		}
		if($locationName == '')
		{
			$this->form_validation->set_message('Location must have a name');
			return FALSE;
		}
		else{return TRUE;}	
	}
}



/*------
 * TASKS
 * -----
 * Done: Check that session is enabled in autoconfig. 
 * TODO: Save locationName as associative array in session.  
 * TODO: Save rows as associative array in session. 
 * TODO: Output success message from add_location to add_location_row. 
 * TODO: Append row creation details to session array.  
 * 
 * 
 */