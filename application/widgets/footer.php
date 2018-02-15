<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Footer extends Widget {

	public function display($data) {
		$this->view('widgets/vfooter', $data);
	}
}