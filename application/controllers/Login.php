<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		$this->template->title = 'LOGIN SURVEYOR';
		$this->template->javascript->add('assets/js/login.js');
		$data = array();
		$this->template->content->view('vlogin', $data);
		$this->template->publish();
	}

	public function ceklogin() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fs_username', 'Username', 'trim|required');
		$this->form_validation->set_rules('fs_password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['response'] = 'failed';
			$data['message'] = validation_errors();
			echo json_encode($data);
		} else {
			$username = trim(strtoupper($this->input->post('fs_username')));
			$password = trim(strtoupper($this->input->post('fs_password')));
			$xpass = md5($password . $username);

			$this->load->model('MLogin');
			$sSQL = $this->MLogin->validUserPass($username, $xpass);

			if (!empty($sSQL)) {
				$session = array(
					'login' => TRUE,
					'username' => $this->encryption->encrypt($sSQL->fs_username),
					'kodecabang' => $this->encryption->encrypt($sSQL->fs_kode_cabang)
				);
				$this->session->set_userdata($session);
				// UPDATE LAST LOGIN
				$data = array(
					'fs_ip_address' => $this->input->ip_address(),
					'fd_last_login' => date('Y-m-d H:i:s')
				);
				$where = "fs_kode_cabang = '".trim($sSQL->fs_kode_cabang)."' AND fs_kode_surveyor = '".trim($sSQL->fs_kode_surveyor)."'";
				$this->db->where($where);
				$this->db->update('tm_surveyor', $data);

				// START LOGGING
				$this->load->model('MLog');
				$this->MLog->logger('LOGIN', $username, 'MASUK KE SISTEM SURVEY');
				// END LOGGING

				$data['response'] = 'success';
				$data['redirect'] = 'debitur';
				$data['message'] = 'Please wait...';
				echo json_encode($data);
			} else {
				$data['response'] = 'failed';
				$data['message'] = 'Akun tidak ada...';
				echo json_encode($data);
			}
		}
	}

	public function logout() {
		$username = $this->encryption->decrypt($this->session->userdata('username'));

		// START LOGGING
		$this->load->model('MLog');
		$this->MLog->logger('LOGOUT', $username, 'KELUAR DARI SISTEM SURVEY');
		// END LOGGING

		$this->session->sess_destroy();
		redirect('login');
	}
}