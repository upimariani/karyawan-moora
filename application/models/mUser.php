<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mUser extends CI_Model
{
	//user
	public function select()
	{
		$this->db->select('*');
		$this->db->from('tbl_user');
		return $this->db->get()->result();
	}
	public function insert($data)
	{
		$this->db->insert('tbl_user', $data);
	}
	public function update($id, $data)
	{
		$this->db->where('id_user', $id);
		$this->db->update('tbl_user', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_user', $id);
		$this->db->delete('tbl_user');
	}
}

/* End of file mUser.php */
