<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MLog extends CI_Model {

	public function logger($logname, $loguser, $logmessage, $logbranch)
	{
		$data = array(
			'log_time' => date('Y-m-d H:i:s'),
			'log_name' => strtoupper($logname),
			'log_user' => strtoupper($loguser),
			'log_message' => strtoupper($logmessage),
			'log_branch' => trim($logbranch),
			'ip_address' => $_SERVER['REMOTE_ADDR']
		);
		$this->db->insert('tb_log_survey', $data);
	}

}