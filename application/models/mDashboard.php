<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mDashboard extends CI_Model
{
	public function dashboard()
	{
		$data['karyawan'] = $this->db->query("SELECT COUNT(id_karyawan) as jml_karyawan FROM `tbl_karyawan`")->row();
		$data['kriteria'] = $this->db->query("SELECT COUNT(id_kriteria) as jml_kriteria FROM `tbl_kriteria`")->row();
		$data['karyawan_analisis'] = $this->db->query("SELECT COUNT(id_penilaian) as jml_penilaian FROM `tbl_penilaian`")->row();
		$data['karyawan_terbaik'] = $this->db->query("SELECT MAX(hasil) as terbaik, nama_karyawan, divisi, jabatan FROM `tbl_penilaian` JOIN tbl_karyawan ON tbl_karyawan.id_karyawan=tbl_penilaian.id_karyawan")->row();
		return $data;
	}
}

/* End of file mDashboard.php */
