<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		$this->template->title = 'Login Surveyor';
		$data = array();
		$this->template->content->view('vlogin', $data);
		$this->template->publish();
	}
}
