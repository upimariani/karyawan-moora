<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Informasi Absensi Karyawan</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Absensi</li>
					</ol>
				</div>
			</div>
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
				<div class="col-6  ">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Informasi Periode Absensi Karyawan</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Periode</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($view_absensi as $key => $value) {
									?>
										<?php
										$str = $value->tgl_absensi;
										$explode = explode("-", $str);
										// echo $explode[0]; //untuk tahun
										// echo $explode[1]; //untuk bulan
										// echo $explode[2]; //untuk tanggal
										?>
										<tr>
											<td class="text-center"><?= $no++ ?></td>
											<td class="text-center">Bln. <?= $explode[1] ?> Thn. <?= $explode[0] ?></td>

											<td class="text-center">
												<div class="btn-group">
													<a href="<?= base_url('Pengawas/cAbsensi/rincian/' . $explode[1] . '/' . $explode[0] . '/' . $value->id_karyawan) ?>" class="btn btn-warning"><i class="fas fa-info"></i></a>
												</div>
											</td>
										</tr>
									<?php
									}
									?>

								</tbody>

								<tfoot>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Periode</th>
										<th class="text-center">Action</th>
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