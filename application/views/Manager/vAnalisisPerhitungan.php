<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Informasi Hasil Analisis Metode MOORA</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Metode MOORA</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.modal -->
	<!-- Main content -->
	<section class="content">
		<?php if ($this->session->userdata('success')) {
		?>
			<div class="alert alert-success alert-dismissible mt-3">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h5><i class="icon fas fa-check"></i> Alert!</h5>
				<?= $this->session->userdata('success') ?>
			</div>
		<?php
		} ?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">

					<?php
					$periode = $periode;
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
						$nama[] = $value->nama_karyawan;
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

					// echo '<br>' . $sqrtc1;
					// echo '<br>' . $sqrtc2;
					// echo '<br>' . $sqrtc3;
					// echo '<br>' . $sqrtc4;
					// echo '<br>' . $sqrtc5;


					// for ($bc = 0; $bc < sizeof($bc1); $bc++) {
					// 	echo $bc5[$bc];
					// 	echo '<br>';
					// }
					//bobot kehadiran
					for ($aa = 0; $aa < sizeof($bc1); $aa++) {
						$x1[] = round($bc1[$aa] / $sqrtc1, 3);
						//bobot = 30% = 0,30
						$ax1[] = round($x1[$aa] * 0.30, 3);
					}
					//bobot kedisiplinan waktu
					for ($ab = 0; $ab < sizeof($bc2); $ab++) {
						$x2[] = round($bc2[$ab] / $sqrtc2, 3);
						//bobot = 25% = 0,25
						$ax2[] = round($x2[$ab] * 0.25, 3);
					}
					//bobot kepatuhan
					for ($ac = 0; $ac < sizeof($bc3); $ac++) {
						$x3[] = round($bc3[$ac] / $sqrtc3, 3);
						//bobot = 20% = 0,20
						$ax3[] = round($x3[$ac] * 0.20, 3);
					}
					//bobot pengelolaan alat
					for ($ad = 0; $ad < sizeof($bc4); $ad++) {
						$x4[] = round($bc4[$ad] / $sqrtc4, 3);
						//bobot = 15% = 0,15
						$ax4[] = round($x4[$ad] * 0.15, 3);
					}
					//masa kerja
					for ($ae = 0; $ae < sizeof($bc5); $ae++) {
						$x5[] = round($bc5[$ae] / $sqrtc5, 3);
						//bobot = 10% = 0,10
						$ax5[] = round($x5[$ae] * 0.10, 3);
					}

					// for ($bc = 0; $bc < sizeof($bc1); $bc++) {
					// 	echo $bc1[$bc] . '|' . $x1[$bc];
					// 	echo '<br>';
					// }
					// $cek_data = $this->db->query("SELECT * FROM `tbl_penilaian`")->result();
					// foreach ($cek_data as $key => $value) {
					// 	$karyawan_penilaian[] = $value->id_karyawan;
					// }
					echo '<br>';
					$no = 1;
					for ($za = 0; $za < sizeof($bc1); $za++) {
						$a = round(($ax1[$za] + $ax2[$za] + $ax3[$za] + $ax4[$za] + $ax5[$za]), 3);
						$hasil[] = $a;
					}
					?>
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Informasi Data Penilaian dari Setiap Masing - Masing Karyawan</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table class="tabel table table-bordered table-striped">
								<thead>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Nama Karyawan</th>
										<th class="text-center">Data C1</th>
										<th class="text-center">Data C2</th>
										<th class="text-center">Data C3</th>
										<th class="text-center">Data C4</th>
										<th class="text-center">Data C5</th>

									</tr>
								</thead>
								<tbody>
									<?php
									for ($i = 0; $i < sizeof($datac1); $i++) {
									?>
										<tr>
											<td><?= $i + 1 ?></td>
											<td><?= $nama[$i] ?></td>
											<td><?= $datac1[$i] ?></td>
											<td><?= $datac2[$i] ?></td>
											<td><?= $datac3[$i] ?></td>
											<td><?= $datac4[$i] ?></td>
											<td><?= $datac5[$i] ?></td>

										</tr>
									<?php
									}
									?>
								</tbody>

								<tfoot>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Nama Karyawan</th>
										<th class="text-center">Data C1</th>
										<th class="text-center">Data C2</th>
										<th class="text-center">Data C3</th>
										<th class="text-center">Data C4</th>
										<th class="text-center">Data C5</th>

									</tr>
								</tfoot>
							</table>
						</div>


						<!-- /.card-body -->
					</div>
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Informasi Hasil Nilai dari Setiap Alternatif</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table class="tabel table table-bordered table-striped">
								<thead>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Nama Karyawan</th>

										<th class="text-center">Bobot C1</th>
										<th class="text-center">Bobot C2</th>
										<th class="text-center">Bobot C3</th>
										<th class="text-center">Bobot C4</th>
										<th class="text-center">Bobot C5</th>

									</tr>
								</thead>
								<tbody>
									<?php
									for ($i = 0; $i < sizeof($datac1); $i++) {
									?>
										<tr>
											<td><?= $i + 1 ?></td>
											<td><?= $nama[$i] ?></td>

											<td><?= $bc1[$i] ?></td>
											<td><?= $bc2[$i] ?></td>
											<td><?= $bc3[$i] ?></td>
											<td><?= $bc4[$i] ?></td>
											<td><?= $bc5[$i] ?></td>

										</tr>
									<?php
									}
									?>
								</tbody>

								<tfoot>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Nama Karyawan</th>

										<th class="text-center">Bobot C1</th>
										<th class="text-center">Bobot C2</th>
										<th class="text-center">Bobot C3</th>
										<th class="text-center">Bobot C4</th>
										<th class="text-center">Bobot C5</th>

									</tr>
								</tfoot>
							</table>
						</div>


						<!-- /.card-body -->
					</div>
					<!-- /.card -->
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Informasi Hasil Matriks Ternormalisasi</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table class="tabel table table-bordered table-striped">
								<thead>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Nama Karyawan</th>

										<th class="text-center">Nilai X1</th>
										<th class="text-center">Nilai X2</th>
										<th class="text-center">Nilai X3</th>
										<th class="text-center">Nilai X4</th>
										<th class="text-center">Nilai X5</th>
										<th class="text-center">Nilai AX1</th>
										<th class="text-center">Nilai AX2</th>
										<th class="text-center">Nilai AX3</th>
										<th class="text-center">Nilai AX4</th>
										<th class="text-center">Nilai AX5</th>
										<th class="text-center">Hasil</th>
									</tr>
								</thead>
								<tbody>
									<?php
									for ($i = 0; $i < sizeof($datac1); $i++) {
									?>
										<tr>
											<td><?= $i + 1 ?></td>
											<td><?= $nama[$i] ?></td>

											<td><?= $x1[$i] ?></td>
											<td><?= $x2[$i] ?></td>
											<td><?= $x3[$i] ?></td>
											<td><?= $x4[$i] ?></td>
											<td><?= $x5[$i] ?></td>
											<td><?= $ax1[$i] ?></td>
											<td><?= $ax2[$i] ?></td>
											<td><?= $ax3[$i] ?></td>
											<td><?= $ax4[$i] ?></td>
											<td><?= $ax5[$i] ?></td>
											<td><?= $hasil[$i] ?></td>
										</tr>
									<?php
									}
									?>
								</tbody>

								<tfoot>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Nama Karyawan</th>

										<th class="text-center">Nilai X1</th>
										<th class="text-center">Nilai X2</th>
										<th class="text-center">Nilai X3</th>
										<th class="text-center">Nilai X4</th>
										<th class="text-center">Nilai X5</th>
										<th class="text-center">Nilai AX1</th>
										<th class="text-center">Nilai AX2</th>
										<th class="text-center">Nilai AX3</th>
										<th class="text-center">Nilai AX4</th>
										<th class="text-center">Nilai AX5</th>
										<th class="text-center">Hasil</th>
									</tr>
								</tfoot>
							</table>
						</div>


						<!-- /.card-body -->
					</div>
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>