<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cKriteria extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mKriteria');
	}
	public function index()
	{
		$data = array(
			'kriteria' => $this->mKriteria->select()
		);
		$this->load->view('Manager/Layout/head');
		$this->load->view('Manager/Layout/aside');
		$this->load->view('Manager/vKriteria', $data);
		$this->load->view('Manager/Layout/footer');
	}
	public function create()
	{
		$data = array(
			'nama_kriteria' => $this->input->post('keterangan'),
			'bobot' => $this->input->post('bobot'),
			'type' => $this->input->post('type')
		);
		$this->mKriteria->insert($data);
		$this->session->set_flashdata('success', 'Data Kriteria Berhasil Disimpan!');
		redirect('Manager/cKriteria');
	}
	public function update($id)
	{
		$data = array(
			'nama_kriteria' => $this->input->post('keterangan'),
			'bobot' => $this->input->post('bobot'),
			'type' => $this->input->post('type')
		);
		$this->mKriteria->update($id, $data);
		$this->session->set_flashdata('success', 'Data Kriteria Berhasil Update!');
		redirect('Manager/cKriteria');
	}
}

/* End of file cKriteria.php */
