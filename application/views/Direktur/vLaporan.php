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
			<a href="<?= base_url('Direktur/cLaporan/cetak') ?>" class="btn btn-success">Cetak Laporan</a>
		</div><!-- /.container-fluid -->
	</section>

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
				<div class="col-12  ">

					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Informasi Hasil Karyawan Terbaik Metode MOORA</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Nama Karyawan</th>
										<th class="text-center">Tgl Proses</th>
										<th class="text-center">Nilai Kehadiran</th>
										<th class="text-center">Nilai Keterlambatan</th>
										<th class="text-center">Nilai Pelanggaran</th>
										<th class="text-center">Nilai Pengelolaan Alat</th>
										<th class="text-center">Nilai Masa Kerja</th>
										<th class="text-center">Hasil</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($penilaian as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->nama_karyawan ?></td>
											<td><?= $value->tgl_proses ?></td>
											<td><?= $value->nilai_kehadiran ?></td>
											<td><?= $value->nilai_keterlambatan ?></td>
											<td><?= $value->nilai_pelanggaran ?></td>
											<td><?= $value->nilai_pengelolaan ?></td>
											<td><?= $value->nilai_masa_kerja ?></td>
											<td><?= $value->hasil ?></td>
										</tr>
									<?php
									}
									?>
								</tbody>

								<tfoot>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Nama Karyawan</th>
										<th class="text-center">Tgl Proses</th>
										<th class="text-center">Nilai Kehadiran</th>
										<th class="text-center">Nilai Keterlambatan</th>
										<th class="text-center">Nilai Pelanggaran</th>
										<th class="text-center">Nilai Pengelolaan Alat</th>
										<th class="text-center">Nilai Masa Kerja</th>
										<th class="text-center">Hasil</th>
									</tr>
								</tfoot>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>