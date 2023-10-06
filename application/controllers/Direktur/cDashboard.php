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
		$this->load->view('Direktur/Layout/head');
		$this->load->view('Direktur/Layout/aside');
		$this->load->view('Direktur/vDashboard', $data);
		$this->load->view('Direktur/Layout/footer');
	}
}

/* End of file cDashboard.php */
