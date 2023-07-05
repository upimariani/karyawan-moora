<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{

	public function index()
	{
		$this->load->view('Manager/Layout/head');
		$this->load->view('Manager/Layout/aside');
		$this->load->view('Manager/vDashboard');
		$this->load->view('Manager/Layout/footer');
	}
}

/* End of file cDashboard.php */
