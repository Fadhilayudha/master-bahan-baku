<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Createconversi extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Create Conversi';
		$this->load->view('layouts/header', $data);
		$this->load->view('createconversi');
		$this->load->view('layouts/footer');
	}

}