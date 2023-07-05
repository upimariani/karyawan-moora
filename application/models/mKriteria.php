<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mKriteria extends CI_Model
{
	//kriteria
	public function select()
	{
		$this->db->select('*');
		$this->db->from('tbl_kriteria');
		return $this->db->get()->result();
	}
	public function insert($data)
	{
		$this->db->insert('tbl_kriteria', $data);
	}
	public function update($id, $data)
	{
		$this->db->where('id_kriteria', $id);
		$this->db->update('tbl_kriteria', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_kriteria', $id);
		$this->db->delete('tbl_kriteria');
	}
}

/* End of file mKriteria.php */
