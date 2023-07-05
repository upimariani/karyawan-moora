<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mKaryawan extends CI_Model
{
	//karyawan
	public function select()
	{
		$this->db->select('*');
		$this->db->from('tbl_karyawan');
		return $this->db->get()->result();
	}
	public function insert($data)
	{
		$this->db->insert('tbl_karyawan', $data);
	}
	public function update($id, $data)
	{
		$this->db->where('id_karyawan', $id);
		$this->db->update('tbl_karyawan', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_karyawan', $id);
		$this->db->delete('tbl_karyawan');
	}
}

/* End of file mKaryawan.php */
