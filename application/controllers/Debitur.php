<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Debitur extends CI_Controller {

	public function index() {
		$this->template->title = 'Daftar Survey';
		$data = array();
		$this->template->content->view('vdebitur', $data);
		$this->template->publish();
	}
}