<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data Pengelolaan Alat Karyawan</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">User</li>
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
						<i class="fas fa-user-plus"></i> Tambah Data Pengelolaan Alat
					</button>
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Informasi Alat Karyawan</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Nama Karyawan</th>
										<th class="text-center">Nama Alat</th>
										<th class="text-center">Tanggal Pemberian</th>
										<th class="text-center">Quantity</th>
										<th class="text-center">Status Kelola</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($pengelolaan as $key => $value) {
									?>
										<tr>
											<td class="text-center"><?= $no++ ?></td>
											<td class="text-center"><?= $value->nama_karyawan ?></td>
											<td class="text-center"><?= $value->nama_alat ?></td>
											<td class="text-center"><?= $value->tgl_pinjam ?></td>
											<td class="text-center"><?= $value->qty ?></td>
											<td class="text-center"><?php
																	if ($value->stat_kelola == '0') {
																	?>
													<span class="badge badge-success">Sedang Digunakan</span>
												<?php
																	} else if ($value->stat_kelola == '1') {
												?>
													<span class="badge badge-danger">Hilang</span>
												<?php
																	}
												?>


											</td>
											<td class="text-center">
												<div class="btn-group">
													<a href="<?= base_url('Pengawas/cPengelolaan/delete/' . $value->id_pengelolaan_alat) ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
													<button type="button" data-toggle="modal" data-target="#edit<?= $value->id_pengelolaan_alat ?>" class="btn btn-warning"><i class="fas fa-edit"></i></button>
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
										<th class="text-center">Nama Karyawan</th>
										<th class="text-center">Nama Alat</th>
										<th class="text-center">Tanggal Pemberian</th>
										<th class="text-center">Quantity</th>
										<th class="text-center">Status Kelola</th>
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
		<form action="<?= base_url('Pengawas/cPengelolaan/create') ?>" method="POST">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Tambah Data Pengelolaan Alat Karyawan</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="exampleInputEmail1">Nama Karyawan</label>
						<select class="form-control" name="karyawan" required>
							<option value="">--Pilih Karyawan---</option>
							<?php
							foreach ($karyawan as $key => $value) {
							?>
								<option value="<?= $value->id_karyawan ?>"><?= $value->nama_karyawan ?> | Divisi. <?= $value->divisi ?></option>
							<?php
							}
							?>

						</select>
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">Nama Alat</label>
						<input type="text" name="nama_alat" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Alat" required>
					</div>
					<div class="row">
						<div class="col-lg-6 form-group">
							<label for="exampleInputEmail1">Tanggal Pinjam</label>
							<input type="date" name="date" class="form-control" id="exampleInputEmail1" placeholder="Alamat" required>
						</div>
						<div class="col-lg-6 form-group">
							<label for="exampleInputEmail1">Quantity</label>
							<input type="number" name="qty" class="form-control" id="exampleInputEmail1" placeholder="Username" required>
						</div>
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
foreach ($pengelolaan as $key => $value) {
?>
	<div class="modal fade" id="edit<?= $value->id_pengelolaan_alat ?>">
		<div class="modal-dialog">
			<form action="<?= base_url('Pengawas/cPengelolaan/update/' . $value->id_pengelolaan_alat) ?>" method="POST">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Update Data Pengelolaan Alat Karyawan</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Nama Karyawan</label>
							<select class="form-control" name="karyawan" required>
								<option value="">--Pilih Karyawan---</option>
								<?php
								foreach ($karyawan as $key => $data) {
								?>
									<option value="<?= $data->id_karyawan ?>" <?php if ($value->id_karyawan == $data->id_karyawan) {
																					echo 'selected';
																				} ?>><?= $data->nama_karyawan ?> | Divisi. <?= $data->divisi ?></option>
								<?php
								}
								?>

							</select>
						</div>

						<div class="form-group">
							<label for="exampleInputEmail1">Nama Alat</label>
							<input type="text" name="nama_alat" value="<?= $value->nama_alat ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Alat" required>
						</div>
						<div class="row">
							<div class="col-lg-6 form-group">
								<label for="exampleInputEmail1">Tanggal Pinjam</label>
								<input type="date" name="date" value="<?= $value->tgl_pinjam ?>" class="form-control" id="exampleInputEmail1" placeholder="Alamat" required>
							</div>
							<div class="col-lg-6 form-group">
								<label for="exampleInputEmail1">Quantity</label>
								<input type="number" name="qty" value="<?= $value->qty ?>" class="form-control" id="exampleInputEmail1" placeholder="Username" required>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Status Peminjaman</label>
							<select class="form-control" name="status" required>
								<option value="">--Pilih Status Pinjam---</option>

								<option value="0" <?php if ($value->stat_kelola == '0') {
														echo 'selected';
													} ?>>Sedang Digunakan</option>
								<option value="1" <?php if ($value->stat_kelola == '1') {
														echo 'selected';
													} ?>>Hilang</option>


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