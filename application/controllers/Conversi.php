<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conversi extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Konversi';
		$this->load->view('layouts/header', $data);
		$this->load->view('listingconversi');
		$this->load->view('layouts/footer');
	}

	public function detail()
	{
		$data['title'] = 'Detail Konversi';
		$this->load->view('layouts/header', $data);
		$this->load->view('detailconversi');
		$this->load->view('layouts/footer');
	}

	public function edit()
	{
		$data['title'] = 'Edit Konversi';
		$this->load->view('layouts/header', $data);
		$this->load->view('editconversi');
		$this->load->view('layouts/footer');
	}

	public function preset()
	{
		$data['title'] = 'Edit Konversi';
		$this->load->view('layouts/header', $data);
		$this->load->view('presetconversi');
		$this->load->view('layouts/footer');
	}

}