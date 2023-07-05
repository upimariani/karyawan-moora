<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPengelolaan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mPengelolaan');
		$this->load->model('mKaryawan');
	}
	public function index()
	{
		$data = array(
			'pengelolaan' => $this->mPengelolaan->select(),
			'karyawan' => $this->mKaryawan->select()
		);
		$this->load->view('Pengawas/Layout/head');
		$this->load->view('Pengawas/Layout/aside');
		$this->load->view('Pengawas/vPengelolaan', $data);
		$this->load->view('Pengawas/Layout/footer');
	}
	public function create()
	{
		$data = array(
			'id_karyawan' => $this->input->post('karyawan'),
			'nama_alat' => $this->input->post('nama_alat'),
			'qty' => $this->input->post('qty'),
			'tgl_pinjam' => $this->input->post('date'),
			'stat_kelola' => '0',
		);
		$this->mPengelolaan->insert($data);
		$this->session->set_flashdata('success', 'Data Pengelolaan Alat Karyawan berhasil Disimpan!');
		redirect('Pengawas/cPengelolaan');
	}
	public function update($id)
	{
		$data = array(
			'id_karyawan' => $this->input->post('karyawan'),
			'nama_alat' => $this->input->post('nama_alat'),
			'qty' => $this->input->post('qty'),
			'tgl_pinjam' => $this->input->post('date'),
			'stat_kelola' => $this->input->post('status'),
		);
		$this->mPengelolaan->update($id, $data);
		$this->session->set_flashdata('success', 'Data Pengelolaan Alat Karyawan berhasil Diperbaharui!');
		redirect('Pengawas/cPengelolaan');
	}
	public function delete($id)
	{
		$this->mPengelolaan->delete($id);
		$this->session->set_flashdata('success', 'Data Pengelolaan Alat Karyawan berhasil dihapus!');
		redirect('Pengawas/cPengelolaan');
	}
}

/* End of file cPengelolaan.php */
