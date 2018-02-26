<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MSurvey extends CI_Model {

	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
	}

	public function checkAPK($sKdCab, $nNoApk)
	{
		$xSQL = ("
			SELECT fs_kode_cabang, fn_no_apk, fs_nama_konsumen
			FROM tx_aktifitas_surveyor
			WHERE fs_kode_cabang = '".trim($sKdCab)."'
			AND fn_no_apk = '".trim($nNoApk)."'
		");

		$sSQL = $this->db->query($xSQL);
		return $sSQL;
	}

	public function checkDokumen($sKode)
	{
		$xSQL = ("
			SELECT fs_kode_dokumen, fs_nama_dokumen
			FROM tm_data_pendukung
			WHERE fs_kode_dokumen = '".trim($sKode)."'
		");

		$sSQL = $this->db->query($xSQL);
		return $sSQL;
	}

	public function getReferensi($sKode) 
	{
		$xSQL = ("
			SELECT fs_nilai1_referensi, fs_nilai2_referensi, fs_nama_referensi
			FROM tm_referensi
			WHERE fs_kode_referensi = '".trim($sKode)."'
		");

		$xSQL = $xSQL.("
			ORDER BY fs_nama_referensi ASC
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
			ORDER BY fs_nama_referensi ASC
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

	public function getAktifitas($sKdCab, $nNoApk)
	{
		$xSQL = ("
			SELECT *
			FROM tx_aktifitas_surveyor
			WHERE fs_kode_cabang = '".trim($sKdCab)."'
			AND fn_no_apk = '".trim($nNoApk)."'
		");

		$sSQL = $this->db->query($xSQL);
		return $sSQL->row();
	}

	public function getDokumen()
	{
		$xSQL = ("
			SELECT fs_kode_dokumen, fs_nama_dokumen
			FROM tm_data_pendukung
			WHERE fs_jenis_pembiayaan = 'P'
		");

		$xSQL = $xSQL.("
			ORDER BY fs_nama_dokumen ASC
		");

		$sSQL = $this->db->query($xSQL);
		return $sSQL->result();
	}

	public function getListDokumen($sKdCab, $nNoApk)
	{
		$xSQL = ("
			SELECT a.fs_kode_dokumen, a.fs_dokumen_upload, b.fs_nama_dokumen
			FROM tx_apk_data_pendukung a
			LEFT JOIN tm_data_pendukung b ON b.fs_kode_dokumen = a.fs_kode_dokumen
			WHERE a.fs_kode_cabang = '".trim($sKdCab)."'
			AND a.fn_no_apk = '".trim($nNoApk)."'
		");

		$xSQL = $xSQL.("
			ORDER BY b.fs_nama_dokumen ASC
		");

		$sSQL = $this->db->query($xSQL);
		return $sSQL->result();
	}
}