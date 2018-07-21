<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Pages extends CI_Controller
{
	function view($page = 'home')
	{
		if (!file_exists(APPPATH.'views/'.$page.'.php')) {
			show_404();
		}

		$data['title'] = ucfirst($page);

		$this->load->view('templates/header', $data);
		$this->load->view($page, $data);
		$this->load->view('templates/footer', $data);
	}	
}
