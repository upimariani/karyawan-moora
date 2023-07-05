<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cKaryawan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mKaryawan');
	}

	public function index()
	{
		$data = array(
			'karyawan' => $this->mKaryawan->select()
		);
		$this->load->view('Manager/Layout/head');
		$this->load->view('Manager/Layout/aside');
		$this->load->view('Manager/vKaryawan', $data);
		$this->load->view('Manager/Layout/footer');
	}
	public function create()
	{
		$data = array(
			'nama_karyawan' => $this->input->post('nama'),
			'jk_karyawan' => $this->input->post('jk'),
			'alamat_karyawan' => $this->input->post('alamat'),
			'no_hp_karyawan' => $this->input->post('no_hp'),
			'divisi' => $this->input->post('divisi'),
			'jabatan' => $this->input->post('jabatan'),
			'tgl_mulai' => $this->input->post('tgl')
		);
		$this->mKaryawan->insert($data);
		$this->session->set_flashdata('success', 'Data Karyawan Berhasil Disimpan!');
		redirect('Manager/cKaryawan');
	}
	public function update($id)
	{
		$data = array(
			'nama_karyawan' => $this->input->post('nama'),
			'jk_karyawan' => $this->input->post('jk'),
			'alamat_karyawan' => $this->input->post('alamat'),
			'no_hp_karyawan' => $this->input->post('no_hp'),
			'divisi' => $this->input->post('divisi'),
			'jabatan' => $this->input->post('jabatan'),
			'tgl_mulai' => $this->input->post('tgl')
		);
		$this->mKaryawan->update($id, $data);
		$this->session->set_flashdata('success', 'Data Karyawan Berhasil Update!');
		redirect('Manager/cKaryawan');
	}
	public function delete($id)
	{
		$this->mKaryawan->delete($id);
		$this->session->set_flashdata('success', 'Data Karyawan Berhasil Dihapus!');
		redirect('Manager/cKaryawan');
	}
}

/* End of file cKaryawan.php */
