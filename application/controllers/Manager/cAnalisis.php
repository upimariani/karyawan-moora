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
		$data_select = array(
			'periode' => $this->mAnalisis->periode_analisis()
		);
		$this->load->view('Manager/Layout/head');
		$this->load->view('Manager/Layout/aside');
		$this->load->view('Manager/vPeriode', $data_select);
		$this->load->view('Manager/Layout/footer');
	}
	public function detail_periode($periode)
	{
		$data_select = array(
			'penilaian' => $this->mAnalisis->select($periode)
		);
		$this->load->view('Manager/Layout/head');
		$this->load->view('Manager/Layout/aside');
		$this->load->view('Manager/vAnalisis', $data_select);
		$this->load->view('Manager/Layout/footer');
	}
	public function hitung()
	{
		$periode = $this->input->post('periode');
		if ($periode == '7') {
			$tgl = '2023-07-30';
		} else if ($periode == '8') {
			$tgl = '2023-08-30';
		} else {
			$tgl = '2023-09-30';
		}
		$data = $this->mAnalisis->variabel($periode, $tgl);
		$bc = $this->mAnalisis->bobot();

		//c1-------------------------------------------------
		// echo '---------------------------------c1';
		foreach ($data['c1'] as $key => $value) {
			// echo $value->id_karyawan;
			// echo ' ' . $value->jml;
			$datac1[] = $value->jml;
			// echo '<br>';
		}
		// echo '<br>';
		// echo '<br>';
		foreach ($bc['bc1'] as $key => $value) {
			$sub_bc1[] = $value->nama_kriteria;
			$bobot_bc1[] = $value->bobot;
		}

		for ($i = 0; $i < sizeof($datac1); $i++) {
			if ($datac1[$i] >= $sub_bc1[0] && $datac1[$i] <= $sub_bc1[1] - 1) {
				$bc1[] = $bobot_bc1[0];
			} else if ($datac1[$i] >= $sub_bc1[1] && $datac1[$i] <= $sub_bc1[2] - 1) {
				$bc1[] = $bobot_bc1[1];
			} else if ($datac1[$i] >= $sub_bc1[2] && $datac1[$i] <= $sub_bc1[3] - 1) {
				$bc1[] = $bobot_bc1[2];
			} else if ($datac1[$i] >= $sub_bc1[3] && $datac1[$i] <= 26) {
				$bc1[] = $bobot_bc1[3];
			} else {
				$bc1[] = $bobot_bc1[0];
			}
			// echo '<br>';
		}
		$normalisasi_c1 = 0;
		for ($a = 0; $a < sizeof($bc1); $a++) {
			$normalisasi_c1 += pow($bc1[$a], 2);
		}


		// echo '---------------------------------c2';

		//c2-----------------------------------------------------------
		foreach ($data['karyawan'] as $key => $value) {
			$karyawan[] = $value->id_karyawan;
			$disiplin = $this->db->query("SELECT COUNT(id_absensi) as telat, tbl_karyawan.id_karyawan FROM `tbl_absensi` JOIN tbl_karyawan ON tbl_karyawan.id_karyawan=tbl_absensi.id_karyawan WHERE stat_absensi='9' AND tbl_karyawan.id_karyawan='" . $value->id_karyawan . "' AND MONTH(tgl_absensi)='" . $periode . "'")->result();
			foreach ($disiplin as $key => $z) {
				$item[] = $z->telat;
				$datac2[] = $z->telat;
				$item2[] = $z->id_karyawan;
			}
		}
		for ($z = 0; $z < sizeof($item); $z++) {
			// echo $item[$z];
			// echo $item2[$z];
			// echo '<br>';
		}
		foreach ($bc['bc2'] as $key => $value) {
			$sub_bc2[] = $value->nama_kriteria;
			$bobot_bc2[] = $value->bobot;
		}
		for ($j = 0; $j < sizeof($datac2); $j++) {
			if ($datac2[$j] == $sub_bc2[0]) {
				$bc2[] = $bobot_bc2[0];
			} else if ($datac2[$j] == $sub_bc2[1]) {
				$bc2[] = $bobot_bc2[1];
			} else if ($datac2[$j] == $sub_bc2[2]) {
				$bc2[] = $bobot_bc2[2];
			} else if ($datac2[$j] >= $sub_bc2[3]) {
				$bc2[] = $bobot_bc2[3];
			}
			// echo '<br>';
		}
		$normalisasi_c2 = 0;
		for ($b = 0; $b < sizeof($bc2); $b++) {
			$normalisasi_c2 += pow($bc2[$b], 2);
		}


		// echo '---------------------------------c3';

		//c3--------------------------------------------
		// echo '<br>';
		// echo '<br>';
		foreach ($data['karyawan'] as $key => $value) {
			$pelanggaran = $this->db->query("SELECT COUNT(id_pelanggaran) as jml, tbl_karyawan.id_karyawan FROM `tbl_pelanggaran` RIGHT JOIN tbl_karyawan ON tbl_pelanggaran.id_karyawan=tbl_karyawan.id_karyawan  WHERE MONTH(tgl_pelanggaran) ='" . $periode . "' AND tbl_karyawan.id_karyawan ='" . $value->id_karyawan . "'")->row();
			$datac3[] = $pelanggaran->jml;

			// echo $pelanggaran->id_karyawan;
			// echo $pelanggaran->jml;
			// echo '<br>';
		}

		foreach ($bc['bc3'] as $key => $value) {
			$sub_bc3[] = $value->nama_kriteria;
			$bobot_bc3[] = $value->bobot;
		}
		for ($k = 0; $k < sizeof($datac2); $k++) {
			if ($datac3[$k] == $sub_bc3[0]) {
				$bc3[] = $bobot_bc3[0];
			} else if ($datac3[$k] == $sub_bc3[1]) {
				$bc3[] = $bobot_bc3[1];
			} else if ($datac3[$k] == $sub_bc3[2]) {
				$bc3[] = $bobot_bc3[2];
			} else if ($datac3[$k] >= $sub_bc3[3]) {
				$bc3[] = $bobot_bc3[3];
			}
			// echo '<br>';
		}
		$normalisasi_c3 = 0;
		for ($c = 0; $c < sizeof($bc3); $c++) {
			$normalisasi_c3 += pow($bc3[$c], 2);
		}



		// echo '---------------------------------c4';

		//c4-------------------------------------------------------------
		// echo '<br>';
		// echo '<br>';
		foreach ($data['c4'] as $key => $value) {
			if ($value->jml == null) {
				$jml = '0';
			} else {
				$jml = $value->jml;
			}
			// echo $value->id_karyawan;
			$datac4[] = $jml;
			// echo ' ' . $jml;
			// echo '<br>';
		}
		foreach ($bc['bc4'] as $key => $value) {
			$sub_bc4[] = $value->nama_kriteria;
			$bobot_bc4[] = $value->bobot;
		}

		for ($l = 0; $l < sizeof($datac4); $l++) {

			if ($datac4[$l] >= $sub_bc4[0] && $datac4[$l] <= $sub_bc4[1] - 1) {
				$bc4[] = $bobot_bc4[0];
			} else if ($datac4[$l] >= $sub_bc4[1] && $datac4[$l] <= $sub_bc4[2] - 1) {
				$bc4[] = $bobot_bc4[1];
			} else if ($datac4[$l] >= $sub_bc4[2] && $datac4[$l] <= $sub_bc4[3] - 1) {
				$bc4[] = $bobot_bc4[2];
			} else if ($datac4[$l] >= $sub_bc4[3]) {
				$bc4[] = $bobot_bc4[3];
			} else if ($datac4[$l] == '0') {
				$bc4[] = $bobot_bc4[0];
			}
			// echo '<br>';
		}
		$normalisasi_c4 = 0;
		for ($d = 0; $d < sizeof($bc4); $d++) {
			$normalisasi_c4 += pow($bc4[$d], 2);
		}


		// echo '---------------------------------c5';


		//c5-------------------------------------------------
		// echo '<br>';
		// echo '<br>';
		foreach ($data['c5'] as $key => $value) {
			// echo $value->id_karyawan;
			// echo ' ' . $value->tgl;
			$datac5[] = $value->tgl;
			// echo '<br>';
		}
		foreach ($bc['bc5'] as $key => $value) {
			$sub_bc5[] = $value->nama_kriteria;
			$bobot_bc5[] = $value->bobot;
		}
		for ($m = 0; $m < sizeof($datac5); $m++) {
			if ($datac5[$m] >= $sub_bc5[0]) {
				$bc5[] = $bobot_bc5[0];
			} else if ($datac5[$m] >= $sub_bc5[1]) {
				$bc5[] = $bobot_bc5[1];
			} else if ($datac5[$m] >= $sub_bc5[2]) {
				$bc5[] = $bobot_bc5[2];
			} else if ($datac5[$m] >= $sub_bc5[3]) {
				$bc5[] = $bobot_bc5[3];
			}
			// echo '<br>';
		}
		$normalisasi_c5 = 0;
		for ($e = 0; $e < sizeof($bc5); $e++) {
			$normalisasi_c5 += pow($bc5[$e], 2);
		}

		$sqrtc1 = round(sqrt($normalisasi_c1), 3);
		$sqrtc2 = round(sqrt($normalisasi_c2), 3);
		$sqrtc3 = round(sqrt($normalisasi_c3), 3);
		$sqrtc4 = round(sqrt($normalisasi_c4), 3);
		$sqrtc5 = round(sqrt($normalisasi_c5), 3);

		// echo $sqrtc1;
		// echo $sqrtc2;
		// echo $sqrtc3;
		// echo $sqrtc4;
		// echo $sqrtc5;


		// for ($bc = 0; $bc < sizeof($bc1); $bc++) {
		// 	echo $datac1[$bc];
		// 	echo '<br>';
		// }
		//bobot kehadiran
		for ($aa = 0; $aa < sizeof($bc1); $aa++) {
			$x1[] = $bc1[$aa] / $sqrtc1;
			//bobot = 30% = 0,30
			$ax1[] = round($x1[$aa] * 0.30, 3);
		}
		//bobot kedisiplinan waktu
		for ($ab = 0; $ab < sizeof($bc2); $ab++) {
			$x2[] = $bc2[$ab] / $sqrtc2;
			//bobot = 25% = 0,25
			$ax2[] = round($x2[$ab] * 0.25, 3);
		}
		//bobot kepatuhan
		for ($ac = 0; $ac < sizeof($bc3); $ac++) {
			$x3[] = $bc3[$ac] / $sqrtc3;
			//bobot = 20% = 0,20
			$ax3[] = round($x3[$ac] * 0.20, 3);
		}
		//bobot pengelolaan alat
		for ($ad = 0; $ad < sizeof($bc4); $ad++) {
			$x4[] = $bc4[$ad] / $sqrtc4;
			//bobot = 15% = 0,15
			$ax4[] = round($x4[$ad] * 0.15, 3);
		}
		//masa kerja
		for ($ae = 0; $ae < sizeof($bc5); $ae++) {
			$x5[] = $bc5[$ae] / $sqrtc5;
			//bobot = 10% = 0,10
			$ax5[] = round($x5[$ae] * 0.10, 3);
		}

		// $cek_data = $this->db->query("SELECT * FROM `tbl_penilaian`")->result();
		// foreach ($cek_data as $key => $value) {
		// 	$karyawan_penilaian[] = $value->id_karyawan;
		// }

		$no = 1;
		for ($za = 0; $za < sizeof($bc1); $za++) {
			$a = $ax1[$za] + $ax2[$za] + $ax3[$za] + $ax4[$za] + $ax5[$za];
			// echo $a;
			// echo $no++;
			// echo '<br>';
			$data = array(
				'id_karyawan' => $karyawan[$za],
				'id_user' => '1',
				'tgl_proses' => date('d-m-Y'),
				'periode' => $periode,
				'nilai_kehadiran' => $ax1[$za],
				'nilai_keterlambatan' => $ax2[$za],
				'nilai_pelanggaran' => $ax3[$za],
				'nilai_pengelolaan' => $ax4[$za],
				'nilai_masa_kerja' => $ax5[$za],
				'hasil' => $a,
			);
			// if ($karyawan_penilaian[$za] == $karyawan[$za]) {
			// 	$this->db->where('id_karyawan', $karyawan[$za]);
			// 	$this->db->update('tbl_penilaian', $data);
			// } else {
			$this->db->insert('tbl_penilaian', $data);
			// }
		}
		redirect('Manager/cAnalisis');
	}
	public function hapus($id)
	{
		$this->db->where('periode', $id);
		$this->db->delete('tbl_penilaian');
		$this->session->set_flashdata('success', 'Data Analisis Berhasil Dihapus!');
		redirect('Manager/cAnalisis');
	}
}

/* End of file cAnalisis.php */
