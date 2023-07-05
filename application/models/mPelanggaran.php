<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mPelanggaran extends CI_Model
{
	public function select()
	{
		$this->db->select('*');
		$this->db->from('tbl_pelanggaran');
		$this->db->join('tbl_karyawan', 'tbl_pelanggaran.id_karyawan = tbl_karyawan.id_karyawan', 'left');

		return $this->db->get()->result();
	}
	public function insert($data)
	{
		$this->db->insert('tbl_pelanggaran', $data);
	}
	public function update($id, $data)
	{
		$this->db->where('id_pelanggaran', $id);
		$this->db->update('tbl_pelanggaran', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_pelanggaran', $id);
		$this->db->delete('tbl_pelanggaran');
	}
}

/* End of file mPelanggaran.php */
