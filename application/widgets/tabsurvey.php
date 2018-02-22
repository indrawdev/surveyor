<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabsurvey extends Widget {

	public function display($data) {
		if (!empty($this->uri->segment(3)) && !empty($this->uri->segment(4))) {
			$this->view('widgets/vtabsurvey', $data);
		} else {
			redirect('debitur');
		}
	}
}