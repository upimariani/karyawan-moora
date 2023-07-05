<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{

	public function index()
	{
		$this->load->view('Pengawas/Layout/head');
		$this->load->view('Pengawas/Layout/aside');
		$this->load->view('Pengawas/vDashboard');
		$this->load->view('Pengawas/Layout/footer');
	}
}

/* End of file cdashboard.php */
