<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPelanggaran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mPelanggaran');
		$this->load->model('mKaryawan');
	}
	public function index()
	{
		$data = array(
			'pelanggaran' => $this->mPelanggaran->select(),
			'karyawan' => $this->mKaryawan->select()
		);
		$this->load->view('Pengawas/Layout/head');
		$this->load->view('Pengawas/Layout/aside');
		$this->load->view('Pengawas/vPelanggaran', $data);
		$this->load->view('Pengawas/Layout/footer');
	}
	public function create()
	{
		$data = array(
			'id_karyawan' => $this->input->post('karyawan'),
			'alasan_pelanggaran' => $this->input->post('alasan'),
			'tgl_pelanggaran' => $this->input->post('tgl')
		);
		$this->mPelanggaran->insert($data);
		$this->session->set_flashdata('success', 'Data Pelanggaran Berhasil Disimpan!');
		redirect('Pengawas/cPelanggaran', 'refresh');
	}
	public function update($id)
	{
		$data = array(
			'id_karyawan' => $this->input->post('karyawan'),
			'alasan_pelanggaran' => $this->input->post('alasan'),
			'tgl_pelanggaran' => $this->input->post('tgl')
		);
		$this->mPelanggaran->update($id, $data);
		$this->session->set_flashdata('success', 'Data Pelanggaran Berhasil Diperbaharui!');
		redirect('Pengawas/cPelanggaran', 'refresh');
	}
	public function delete($id)
	{
		$this->mPelanggaran->delete($id);
		$this->session->set_flashdata('success', 'Data Pelanggaran Berhasil Dihapus!');
		redirect('Pengawas/cPelanggaran', 'refresh');
	}
}

/* End of file cPelanggaran.php */
