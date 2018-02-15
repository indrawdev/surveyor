<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends CI_Controller {

	public function index() {
		$this->template->title = 'Form Survey';
		$this->template->stylesheet->add('assets/css/custom.css', array('media' => 'all'));
		$this->template->javascript->add('assets/js/survey.js');

		$this->load->model('MSurvey');
		// TAB C1
		$data['jenis_aplikasi'] = $this->MSurvey->getReferensi('jenis_piutang');
		$data['status_konsumen'] = $this->MSurvey->getReferensi('status_konsumen');
		$data['jenis_pembiayaan'] = $this->MSurvey->getReferensi('jenis_pembiayaan');
		$data['jenis_kelamin'] = $this->MSurvey->getReferensi('jenis_kelamin');

		// TAB C2
		$data['pekerjaan'] = $this->MSurvey->getReferensi('pekerjaan');
		$data['pendidikan'] = $this->MSurvey->getReferensi('pendidikan');

		// TAB C3
		$data['cek_lingkungan'] = $this->MSurvey->getRefSurvey('character_check_lingkungan');
		$data['rekomendasi'] = $this->MSurvey->getRefSurvey('character_rekomendasi_lingkungan');

		// TAB C4
		$data['status_kepemilikan'] = $this->MSurvey->getRefSurvey('capital_status_kepemilikan');
		$data['bukti_kepemilikan'] = $this->MSurvey->getRefSurvey('capital_bukti_kepemilikan');
		$data['dinding_rumah'] = $this->MSurvey->getRefSurvey('capital_dinding_rumah');
		$data['tempat_kendaraan'] = $this->MSurvey->getRefSurvey('capital_tempat_kendaraan');
		$data['jalanan_rumah'] = $this->MSurvey->getRefSurvey('capital_jalanan_rumah');
		$data['lebar_jalanan'] = $this->MSurvey->getRefSurvey('capital_lebar_jalanan');
		$data['kondisi_lingkungan'] = $this->MSurvey->getRefSurvey('capital_kondisi_lingkungan');
		$data['perabotan_rumah'] = $this->MSurvey->getRefSurvey('capital_perabotan_rumah');

		$this->template->content->view('vsurvey', $data);
		$this->template->publish();
	}

	public function select() {
		
	}

	public function submitc1() {

	}

	public function submitc2() {

	}

	public function submitc3() {

	}

	public function submitc4() {

	}
}