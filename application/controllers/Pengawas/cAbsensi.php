<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAbsensi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAbsensi');
	}
	public function index()
	{
		$data = array(
			'karyawan' => $this->mAbsensi->karyawan()
		);
		$this->load->view('Pengawas/Layout/head');
		$this->load->view('Pengawas/Layout/aside');
		$this->load->view('Pengawas/vAbsensi', $data);
		$this->load->view('Pengawas/Layout/footer');
	}
	public function create()
	{
		$waktu = $this->input->post('time');
		if ($waktu > '07:00:00') {
			$absensi = '9';
		} else {
			$absensi = '1';
		}

		$data = array(
			'id_karyawan' => $this->input->post('karyawan'),
			'tgl_absensi' => $this->input->post('tgl'),
			'stat_absensi' => $absensi,
			'time' => $this->input->post('time')
		);
		$this->mAbsensi->insert($data);
		$this->session->set_flashdata('success', 'Data Absensi Berhasil Disimpan!');
		redirect('Pengawas/cAbsensi');
	}
	public function view($id)
	{
		$data = array(
			'view_absensi' => $this->mAbsensi->select($id)
		);
		$this->load->view('Pengawas/Layout/head');
		$this->load->view('Pengawas/Layout/aside');
		$this->load->view('Pengawas/vDetailAbsensi', $data);
		$this->load->view('Pengawas/Layout/footer');
	}
	public function rincian($bulan, $tahun, $id_karyawan)
	{
		$data = array(
			'bulan' => $bulan,
			'tahun' => $tahun,
			'id_karyawan' => $id_karyawan,
			'view_absensi' => $this->mAbsensi->rincian($bulan, $tahun, $id_karyawan)
		);
		$this->load->view('Pengawas/Layout/head');
		$this->load->view('Pengawas/Layout/aside');
		$this->load->view('Pengawas/vRincianAbsensi', $data);
		$this->load->view('Pengawas/Layout/footer');
	}
	public function delete($bulan, $tahun, $id_karyawan, $id)
	{
		$this->mAbsensi->delete($id);
		$this->session->set_flashdata('success', 'Data Absensi Berhasil Dihapus!');
		redirect('Pengawas/cAbsensi/rincian/' . $bulan . '/' . $tahun . '/' . $id_karyawan);
	}
}

/* End of file cAbsensi.php */
