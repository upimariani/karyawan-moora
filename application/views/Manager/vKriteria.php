<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data Kriteria Penilaian Metode MOORA</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Kriteria</li>
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
				<div class="col-12  ">
					<button type="button" class="btn btn-warning mb-3" data-toggle="modal" data-target="#modal-default">
						<i class="fas fa-user-plus"></i> Tambah Data Kriteria
					</button>
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Informasi Kriteria</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Sub Kriteria Pengukuran</th>
										<th class="text-center">Bobot</th>
										<th class="text-center">Type Kriteria</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($kriteria as $key => $value) {
									?>
										<tr>
											<td class="text-center"><?= $no++ ?></td>
											<td class="text-center"><?= $value->nama_kriteria ?></td>
											<td class="text-center"><?= $value->bobot ?></td>
											<td class="text-center"><?php
																	if ($value->type == '1') {
																	?>
													<span class="badge badge-success">Kehadiran</span>
												<?php
																	} else if ($value->type == '2') {

												?>
													<span class="badge badge-warning">Kedisiplinan Waktu</span>
												<?php
																	} else if ($value->type == '3') {

												?>
													<span class="badge badge-danger">Kepatuhan</span>
												<?php
																	} else if ($value->type == '4') {

												?>
													<span class="badge badge-info">Pengelolaan Alat</span>
												<?php
																	} else if ($value->type == '5') {

												?>
													<span class="badge badge-primary">Masa Kerja</span>
												<?php
																	}
												?>

											</td>
											<td class="text-center">
												<div class="btn-group">
													<a href="<?= base_url('Admin/cKelolaData/deleteuser/' . $value->id_kriteria) ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
													<button type="button" data-toggle="modal" data-target="#edit<?= $value->id_kriteria ?>" class="btn btn-warning"><i class="fas fa-edit"></i></button>
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
										<th class="text-center">Sub Kriteria Pengukuran</th>
										<th class="text-center">Bobot</th>
										<th class="text-center">Type Kriteria</th>
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

<div class="modal fade" id="modal-default">
	<div class="modal-dialog">
		<form action="<?= base_url('manager/ckriteria/create') ?>" method="POST">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Tambah Data Kriteria</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="exampleInputEmail1">Keterangan</label>
						<br>
						<small class="text-danger">Masukkan Pengukuran Minimal</small>
						<input type="text" name="keterangan" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Keterangan" required>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Bobot</label>
						<input type="text" name="bobot" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Bobot" required>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Kriteria</label>
						<select class="form-control" name="type" required>
							<option value="">--Pilih Kriteria---</option>
							<option value="1">Kehadiran</option>
							<option value="2">Kedisiplinan Waktu</option>
							<option value="3">Kepatuhan</option>
							<option value="4">Pengelolaan Alat</option>
							<option value="5">Masa Kerja</option>
						</select>
					</div>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</form>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php
foreach ($kriteria as $key => $value) {
?>
	<div class="modal fade" id="edit<?= $value->id_kriteria ?>">
		<div class="modal-dialog">
			<form action="<?= base_url('Manager/cKriteria/update/' . $value->id_kriteria) ?>" method="POST">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Tambah Data Kriteria</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Keterangan</label>
							<br>
							<small class="text-danger">Masukkan Pengukuran Minimal</small>
							<input type="text" name="keterangan" value="<?= $value->nama_kriteria ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Keterangan" required>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Bobot</label>
							<input type="text" name="bobot" value="<?= $value->bobot ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Bobot" required>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Kriteria</label>
							<select class="form-control" name="type" required>
								<option value="">--Pilih Kriteria---</option>
								<option value="1" <?php if ($value->type == '1') {
														echo 'selected';
													} ?>>Kehadiran</option>
								<option value="2" <?php if ($value->type == '2') {
														echo 'selected';
													} ?>>Kedisiplinan Waktu</option>
								<option value="3" <?php if ($value->type == '3') {
														echo 'selected';
													} ?>>Kepatuhan</option>
								<option value="4" <?php if ($value->type == '4') {
														echo 'selected';
													} ?>>Pengelolaan Alat</option>
								<option value="5" <?php if ($value->type == '5') {
														echo 'selected';
													} ?>>Masa Kerja</option>
							</select>
						</div>
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</form>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
<?php
}
?>