<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAnalisis extends CI_Model
{
	public function periode_analisis()
	{
		return $this->db->query("SELECT * FROM `tbl_penilaian` GROUP BY periode")->result();
	}
	public function variabel($periode, $tgl_akhir_analisis)
	{
		$date = date('Y-m-d');
		//data karyawan \
		$data['karyawan'] = $this->db->query("SELECT * FROM `tbl_karyawan`")->result();
		//kehadiran approve
		$data['c1'] = $this->db->query("SELECT COUNT(stat_absensi) as jml, tbl_karyawan.id_karyawan, nama_karyawan FROM `tbl_absensi` JOIN tbl_karyawan ON tbl_karyawan.id_karyawan=tbl_absensi.id_karyawan WHERE stat_absensi = '1' AND MONTH(tgl_absensi)='" . $periode . "' GROUP BY tbl_absensi.id_karyawan")->result();

		//kedisiplinan waktu ada di dalam controller

		//kepatuhan
		// $data['c3'] = 
		//pengelolaan alat
		$data['c4'] = $this->db->query("SELECT SUM(stat_kelola) as jml, tbl_karyawan.id_karyawan FROM `tbl_pengelolaan_alat` RIGHT JOIN tbl_karyawan ON tbl_pengelolaan_alat.id_karyawan=tbl_karyawan.id_karyawan WHERE MONTH(tgl_pinjam)='" . $periode . "' GROUP BY tbl_karyawan.id_karyawan")->result();
		//masa kerja 
		$data['c5'] = $this->db->query("SELECT ROUND(datediff('" . $tgl_akhir_analisis . "', tgl_mulai)/30) as tgl, id_karyawan FROM `tbl_karyawan`")->result();
		return $data;
	}
	public function bobot()
	{
		$data['bc1'] = $this->db->query("SELECT * FROM `tbl_kriteria` WHERE type='1'")->result();
		$data['bc2'] = $this->db->query("SELECT * FROM `tbl_kriteria` WHERE type='2'")->result();
		$data['bc3'] = $this->db->query("SELECT * FROM `tbl_kriteria` WHERE type='3'")->result();
		$data['bc4'] = $this->db->query("SELECT * FROM `tbl_kriteria` WHERE type='4'")->result();
		$data['bc5'] = $this->db->query("SELECT * FROM `tbl_kriteria` WHERE type='5'")->result();
		return $data;
	}
	public function select($periode)
	{
		$this->db->select('*');
		$this->db->from('tbl_penilaian');
		$this->db->join('tbl_karyawan', 'tbl_penilaian.id_karyawan = tbl_karyawan.id_karyawan', 'left');
		$this->db->where('periode', $periode);

		$this->db->order_by('hasil', 'desc');

		return $this->db->get()->result();
	}
}

/* End of file mAnalisis.php */
