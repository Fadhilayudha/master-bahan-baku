<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Createbahanbaku extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Create Product';
		$this->load->view('layouts/header', $data);
		$this->load->view('createbahanbaku');
		$this->load->view('layouts/footer');
	}

}