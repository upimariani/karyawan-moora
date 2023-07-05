<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAnalisis extends CI_Model
{
	public function variabel()
	{
		//data karyawan \
		$data['karyawan'] = $this->db->query("SELECT * FROM `tbl_karyawan`")->result();
		//kehadiran approve
		$data['c1'] = $this->db->query("SELECT SUM(stat_absensi) as jml, id_karyawan FROM `tbl_absensi` WHERE stat_absensi = '1' GROUP BY id_karyawan")->result();

		//kedisiplinan waktu ada di dalam controller

		//kepatuhan
		$data['c3'] = $this->db->query("SELECT COUNT(id_pelanggaran) as jml, tbl_karyawan.id_karyawan FROM `tbl_pelanggaran` RIGHT JOIN tbl_karyawan ON tbl_pelanggaran.id_karyawan=tbl_karyawan.id_karyawan GROUP BY tbl_karyawan.id_karyawan")->result();
		//pengelolaan alat
		$data['c4'] = $this->db->query("SELECT SUM(stat_kelola) as jml, tbl_karyawan.id_karyawan FROM `tbl_pengelolaan_alat` RIGHT JOIN tbl_karyawan ON tbl_pengelolaan_alat.id_karyawan=tbl_karyawan.id_karyawan GROUP BY tbl_karyawan.id_karyawan")->result();
		//masa kerja
		$data['c5'] = $this->db->query("SELECT ROUND(datediff('2023-07-12', tgl_mulai)/30) as tgl, id_karyawan FROM `tbl_karyawan`")->result();
		return $data;
	}
}

/* End of file mAnalisis.php */
