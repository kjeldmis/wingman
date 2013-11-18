<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index() // every function is a page. 
	{
		$this->load->view('main_menu'); //this is a view on the page (HTML). 
	}
	
	public function admin_options() 
	{
		$this->load->view('admin_options');
	}
	
	public function add_location()
	{
		$this->load->view('add_location');
	}
	
	//implemented
	
	
}
/*
 * -----
 * TASKS
 * -----
 * Make the location sites dynamic. 
 * Import of models in CI
 * Parse data between the location sites.
 * shorten URLs  
 * 
 * 
 */


/* End of file welcome.php */
/* Location: ./application/controllers/main.php */