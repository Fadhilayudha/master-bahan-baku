<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bahanbaku extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Master Bahan Baku';
		$this->load->view('layouts/header', $data);
		$this->load->view('listingbahanbaku');
		$this->load->view('layouts/footer');
	}

	public function detail()
	{
		$data['title'] = 'Detail Product';
		$this->load->view('layouts/header', $data);
		$this->load->view('detailbahanbaku');
		$this->load->view('layouts/footer');
	}

	public function edit()
	{
		$data['title'] = 'Edit Product';
		$this->load->view('layouts/header', $data);
		$this->load->view('editbahanbaku');
		$this->load->view('layouts/footer');
	}
}