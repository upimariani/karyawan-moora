<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAnalisis extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAnalisis');
	}
	public function index()
	{

		echo "Bismillah";
		echo '<br>';

		$data = $this->mAnalisis->variabel();




		foreach ($data['c1'] as $key => $value) {
			echo $value->id_karyawan;
			echo ' ' . $value->jml;
			echo '<br>';
		}
		echo '<br>';
		echo '<br>';




		foreach ($data['karyawan'] as $key => $value) {
			$disiplin = $this->db->query("SELECT COUNT(id_absensi) as telat, tbl_karyawan.id_karyawan FROM `tbl_absensi` JOIN tbl_karyawan ON tbl_karyawan.id_karyawan=tbl_absensi.id_karyawan WHERE stat_absensi='9' AND tbl_karyawan.id_karyawan='" . $value->id_karyawan . "'")->result();
			foreach ($disiplin as $key => $z) {
				$item[] = $z->telat;
				$item2[] = $z->id_karyawan;
			}
		}
		for ($z = 0; $z < sizeof($item); $z++) {
			echo $item[$z];
			echo $item2[$z];
			echo '<br>';
		}






		echo '<br>';
		echo '<br>';
		foreach ($data['c3'] as $key => $value) {
			echo $value->id_karyawan;
			echo ' ' . $value->jml;
			echo '<br>';
		}

		echo '<br>';
		echo '<br>';
		foreach ($data['c4'] as $key => $value) {
			if ($value->jml == null) {
				$jml = '0';
			} else {
				$jml = $value->jml;
			}
			echo $value->id_karyawan;
			echo ' ' . $jml;
			echo '<br>';
		}

		echo '<br>';
		echo '<br>';
		foreach ($data['c5'] as $key => $value) {
			echo $value->id_karyawan;
			echo ' ' . $value->tgl;
			echo '<br>';
		}

		// $this->load->view('Manager/Layout/head');
		// $this->load->view('Manager/Layout/aside');
		// $this->load->view('Manager/vAnalisis');
		// $this->load->view('Manager/Layout/footer');
	}
}

/* End of file cAnalisis.php */
