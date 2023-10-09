<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Informasi Periode Hasil Analisis Metode MOORA</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Metode MOORA</li>
					</ol>
				</div>
			</div>
			<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-default">
				Analisis Metode MOORA
			</button>
		</div><!-- /.container-fluid -->

	</section>
	<div class="modal fade" id="modal-default">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Analisis Periode</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?= base_url('Manager/cAnalisis/hitung') ?>" method="POST">
					<?php
					$cek_analisis7 = $this->db->query("SELECT periode FROM `tbl_penilaian` WHERE periode='7' GROUP BY periode")->row();
					$cek_analisis8 = $this->db->query("SELECT periode FROM `tbl_penilaian` WHERE periode='8' GROUP BY periode")->row();
					$cek_analisis9 = $this->db->query("SELECT periode FROM `tbl_penilaian` WHERE periode='9' GROUP BY periode")->row();

					?>
					<div class="modal-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Periode Analisis</label>
							<select class="form-control" name="periode" required>
								<option value="">---Pilih Periode---</option>

								<option value="7" <?php if ($cek_analisis7) {
														echo 'disabled';
													} ?>>Periode 7</option>
								<option value="8" <?php if ($cek_analisis8) {
														echo 'disabled';
													} ?>>Periode 8</option>
								<option value="9" <?php if ($cek_analisis9) {
														echo 'disabled';
													} ?>>Periode 9</option>

							</select>
						</div>
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				</form>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
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
				<div class="col-6  ">

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
										<th class="text-center">Periode / Bulan</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($periode as $key => $value) {
									?>
										<tr>
											<td class="text-center"><?= $no++ ?></td>
											<td class=" text-center"><?php if ($value->periode == '7') {
																			echo 'Juli';
																		} else if ($value->periode == '8') {
																			echo 'Agustus';
																		} else {
																			echo 'September';
																		} ?></td>
											<td class="text-center"><a href="<?= base_url('Manager/cAnalisis/detail_periode/' . $value->periode) ?>" class="btn btn-warning">View</a>
												<a href="<?= base_url('Manager/cAnalisis/hapus/' . $value->periode) ?>" class="btn btn-danger">Hapus</a>
											</td>
										</tr>
									<?php
									}
									?>
								</tbody>

								<tfoot>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Periode / Bulan</th>
										<th class="text-center">View Detail</th>
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