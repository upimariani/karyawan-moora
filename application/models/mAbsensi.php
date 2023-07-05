<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAbsensi extends CI_Model
{
	public function karyawan()
	{
		$this->db->select('*');
		$this->db->from('tbl_karyawan');
		return $this->db->get()->result();
	}
	public function select($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_absensi');
		$this->db->group_by('MONTH(tgl_absensi)');
		$this->db->where('id_karyawan', $id);
		return $this->db->get()->result();
	}
	public function rincian($bulan, $tahun, $id_karyawan)
	{
		return $this->db->query("SELECT TIME(time) as waktu, tgl_absensi, id_karyawan, stat_absensi, time, id_absensi FROM `tbl_absensi` WHERE MONTH(tgl_absensi) = '" . $bulan . "' AND YEAR(tgl_absensi) = '" . $tahun . "' AND id_karyawan='" . $id_karyawan . "'")->result();
	}
	public function insert($data)
	{
		$this->db->insert('tbl_absensi', $data);
	}
	public function update($id, $data)
	{
		$this->db->where('id_absensi', $id);
		$this->db->update('tbl_absensi', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_absensi', $id);
		$this->db->delete('tbl_absensi');
	}
}

/* End of file mAbsensi.php */
