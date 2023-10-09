<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLaporan extends CI_Controller
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
		$this->load->view('Direktur/Layout/head');
		$this->load->view('Direktur/Layout/aside');
		$this->load->view('Direktur/vPeriode', $data_select);
		$this->load->view('Direktur/Layout/footer');
	}
	public function detail_periode($periode)
	{
		$data_select = array(
			'penilaian' => $this->mAnalisis->select($periode),
			'periode' => $periode
		);
		$this->load->view('Direktur/Layout/head');
		$this->load->view('Direktur/Layout/aside');
		$this->load->view('Direktur/vLaporan', $data_select);
		$this->load->view('Direktur/Layout/footer');
	}


	public function cetak($periode)
	{
		// memanggil library FPDF
		require('asset/fpdf/fpdf.php');

		// intance object dan memberikan pengaturan halaman PDF
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->AddPage();

		$pdf->SetFont('Times', 'B', 14);

		$pdf->Image('asset/logo.jpg', 3, 3, 40);
		$pdf->Cell(200, 10, 'LAPORAN HASIL ANALISIS KARYAWAN TERBAIK', 0, 1, 'C');
		$pdf->Cell(200, 20, 'CV. ANUGRAH PUTRA TUNGGAL', 0, 0, 'C');

		$pdf->SetLineWidth(1);
		$pdf->Line(10, 43, 200, 43);
		$pdf->SetLineWidth(0);
		$pdf->Line(10, 42, 200, 42);
		$pdf->Cell(10, 30, '', 0, 1);


		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(10, 7, 'No', 1, 0, 'C');
		$pdf->Cell(50, 7, 'Nama Karyawan', 1, 0, 'C');
		$pdf->Cell(50, 7, 'Divisi', 1, 0, 'C');
		$pdf->Cell(40, 7, 'Jabatan', 1, 0, 'C');
		$pdf->Cell(40, 7, 'Hasil', 1, 0, 'C');


		$pdf->Cell(10, 7, '', 0, 1);
		$pdf->SetFont('Times', '', 10);
		$no = 1;

		$data = $this->mAnalisis->select($periode);
		foreach ($data as $key => $value) {
			$pdf->Cell(10, 6, $no++, 1, 0, 'C');
			$pdf->Cell(50, 6, $value->nama_karyawan, 1, 0);
			$pdf->Cell(50, 6, $value->divisi, 1, 0);
			$pdf->Cell(40, 6, $value->jabatan, 1, 0);
			$pdf->Cell(40, 6, $value->hasil, 1, 1);
		}

		$pdf->SetFont('Times', 'B', 10);
		$pdf->Cell(20, 7, '', 0, 1);
		$pdf->Cell(130, 6, '', 0, 0, 'C');
		$pdf->Cell(40, 6, 'Mengetahui', 0, 1);
		$pdf->Cell(130, 6, '', 0, 0, 'C');
		$pdf->Cell(40, 6, 'Direktur CV. Anugrah Putra Tunggal', 0, 1);
		$pdf->Cell(60, 10, '', 0, 1);
		$pdf->Cell(130, 6, '', 0, 0, 'C');
		$pdf->Cell(40, 6, '(..............................)', 0, 1);
		$pdf->Output();
	}
}

/* End of file cLaporan.php */
