<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mDashboard');
	}

	public function index()
	{
		$data = array(
			'dashboard' => $this->mDashboard->dashboard()
		);
		$this->load->view('Pengawas/Layout/head');
		$this->load->view('Pengawas/Layout/aside');
		$this->load->view('Pengawas/vDashboard', $data);
		$this->load->view('Pengawas/Layout/footer');
	}
}

/* End of file cdashboard.php */
