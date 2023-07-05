<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cUser extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mUser');
	}
	public function index()
	{
		$data = array(
			'user' => $this->mUser->select()
		);
		$this->load->view('Manager/Layout/head');
		$this->load->view('Manager/Layout/aside');
		$this->load->view('Manager/vUser', $data);
		$this->load->view('Manager/Layout/footer');
	}
	public function create()
	{
		$data = array(
			'nama_user' => $this->input->post('nama'),
			'no_hp_user' => $this->input->post('no_hp'),
			'alamat_user' => $this->input->post('alamat'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'level_user' => $this->input->post('level'),
			'jk_user' => $this->input->post('jk')
		);
		$this->mUser->insert($data);
		$this->session->set_flashdata('success', 'Data User Berhasil Disimpan!');
		redirect('Manager/cUser');
	}
	public function update($id)
	{
		$data = array(
			'nama_user' => $this->input->post('nama'),
			'no_hp_user' => $this->input->post('no_hp'),
			'alamat_user' => $this->input->post('alamat'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'level_user' => $this->input->post('level'),
			'jk_user' => $this->input->post('jk')
		);
		$this->mUser->update($id, $data);
		$this->session->set_flashdata('success', 'Data User Berhasil Update!');
		redirect('Manager/cUser');
	}
	public function delete($id)
	{
		$this->mUser->delete($id);
		$this->session->set_flashdata('success', 'Data User Berhasil Dihapus!');
		redirect('Manager/cUser');
	}
}

/* End of file cUser.php */
