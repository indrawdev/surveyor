<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Header extends Widget {

	public function display($data) {
		$this->view('widgets/vheader', $data);
	}
}