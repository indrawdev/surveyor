<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Debitur extends CI_Controller {

	public function __construct() {
		parent::__construct();
		/*
		if ($this->session->userdata('login') <> TRUE) {
			redirect('login');
		}
		*/
	}

	public function index() {
		$this->template->title = 'DAFTAR SURVEY';
		$cabang = $this->encryption->decrypt($this->session->userdata('kodecabang'));

		$this->load->model('MDebitur');
		$data['konsumen'] = $this->MDebitur->getDebitur($cabang);
		$this->template->content->view('vdebitur', $data);
		$this->template->publish();
	}
}