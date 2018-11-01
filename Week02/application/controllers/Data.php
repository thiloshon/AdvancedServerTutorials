<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data extends CI_Controller {

	
	public function index()
	{
		$data['name'] = 'Peter';
		$data['weather'] = 'mind numbingly miserable';
		$data['status'] = 'won';
		$this->load->view('myview2', $data);
	}
}
