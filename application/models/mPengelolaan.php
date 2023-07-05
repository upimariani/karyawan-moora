<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mPengelolaan extends CI_Model
{
	public function select()
	{
		$this->db->select('*');
		$this->db->from('tbl_pengelolaan_alat');
		$this->db->join('tbl_karyawan', 'tbl_pengelolaan_alat.id_karyawan = tbl_karyawan.id_karyawan', 'left');

		return $this->db->get()->result();
	}
	public function insert($data)
	{
		$this->db->insert('tbl_pengelolaan_alat', $data);
	}
	public function update($id, $data)
	{
		$this->db->where('id_pengelolaan_alat', $id);
		$this->db->update('tbl_pengelolaan_alat', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_pengelolaan_alat', $id);
		$this->db->delete('tbl_pengelolaan_alat');
	}
}

/* End of file mPengelolaan.php */
