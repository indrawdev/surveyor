<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MSurvey extends CI_Model {

	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
	}

	public function getReferensi($sKode) 
	{
		$xSQL = ("
			SELECT fs_nilai1_referensi, fs_nilai2_referensi, fs_nama_referensi
			FROM tm_referensi
			WHERE fs_kode_referensi = '".trim($sKode)."'
		");

		$xSQL = $xSQL.("
			ORDER BY fs_nilai1_referensi ASC
		");

		$sSQL = $this->db->query($xSQL);
		return $sSQL->result();
	}

	public function getRefSurvey($sKode)
	{
		$xSQL = ("
			SELECT fs_nilai1_referensi, fs_nilai2_referensi, fs_nama_referensi
			FROM tm_referensi_survey
			WHERE fs_kode_referensi = '".trim($sKode)."'
		");

		$xSQL = $xSQL.("
			ORDER BY fs_nilai1_referensi ASC
		");

		$sSQL = $this->db->query($xSQL);
		return $sSQL->result();
	}

	public function getDealer($sKdCab)
	{
		$xSQL = ("
			SELECT fs_kode_dealer1, fs_kode_dealer2, fs_nama_dealer
			FROM tm_dealer
			WHERE fs_kode_cabang = '".trim($sKdCab)."'
		");

		$xSQL = $xSQL.("
			ORDER BY fs_nama_dealer ASC
		");

		$sSQL = $this->db->query($xSQL);
		return $sSQL->result();
	}
}