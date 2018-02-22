<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MLogin extends CI_Model {

	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
	}

	public function validUserPass($sUser, $sPass)
	{
		$xSQL = ("
			SELECT fs_kode_cabang, fs_kode_surveyor, 
				fs_username, fs_password
			FROM tm_surveyor
			WHERE fs_username = '".trim($sUser)."'
			AND fs_password = '".trim($sPass)."'
			AND fs_aktif = '1'
		");

		$sSQL = $this->db->query($xSQL);
		return $sSQL->row();
	}
}