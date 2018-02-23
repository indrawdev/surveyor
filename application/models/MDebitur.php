<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MDebitur extends CI_Model {

	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
	}

	public function getDebitur($sKdCab)
	{
		$xSQL = ("
			SELECT fs_kode_cabang, fn_no_apk, fs_nama_konsumen
			FROM tx_aktifitas_surveyor
			WHERE fs_kode_cabang = '".trim($sKdCab)."'
			AND fs_flag_survey = '0'
			AND fs_flag_koreksi = '0'
		");

		$xSQL = $xSQL.("
			ORDER BY fd_tanggal_buat DESC
		");

		$sSQL = $this->db->query($xSQL);
		return $sSQL->result();
	}
}