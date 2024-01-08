<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data Pelanggaran Karyawan</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Pelanggaran</li>
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
						<i class="fas fa-user-plus"></i> Tambah Data Pelanggaran
					</button>
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Informasi Pelanggaran</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Nama Karyawan</th>
										<th class="text-center">Alasan Pelanggaran</th>
										<th class="text-center">Tanggal Pelanggaran</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($pelanggaran as $key => $value) {
									?>
										<tr>
											<td class="text-center"><?= $no++ ?></td>
											<td class="text-center"><?= $value->nama_karyawan ?></td>
											<td class="text-center"><?= $value->alasan_pelanggaran ?></td>
											<td class="text-center"><?= $value->tgl_pelanggaran ?></td>
											<td class="text-center">
												<div class="btn-group">
													<a href="<?= base_url('Pengawas/cPelanggaran/delete/' . $value->id_pelanggaran) ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
													<button type="button" data-toggle="modal" data-target="#edit<?= $value->id_pelanggaran ?>" class="btn btn-warning"><i class="fas fa-edit"></i></button>
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
										<th class="text-center">Alasan Pelanggaran</th>
										<th class="text-center">Tanggal Pelanggaran</th>
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
		<form action="<?= base_url('Pengawas/cPelanggaran/create') ?>" method="POST">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Tambah Data Pelanggaran</h4>
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
						<label for="exampleInputEmail1">Tanggal Pelanggaran</label>
						<input type="date" name="tgl" class="form-control" maxlength="13" minlength="11" id="exampleInputEmail1" placeholder="No Telepon" required>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Alasan Pelanggaran</label>
						<select class="form-control" name="alasan">
							<option value="">---Pilih Alasan---</option>
							<option value="Tidak memakai seragam/rompi">Tidak memakai seragam/rompi</option>
							<option value="Tidak memakai sarung tangan">Tidak memakai sarung tangan</option>
							<option value="Tidak memakai sepatu">Tidak memakai sepatu</option>

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
foreach ($pelanggaran as $key => $value) {
?>
	<div class="modal fade" id="edit<?= $value->id_pelanggaran ?>">
		<div class="modal-dialog">
			<form action="<?= base_url('Pengawas/cPelanggaran/update/' . $value->id_pelanggaran) ?>" method="POST">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Update Data Pelanggaran</h4>
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
							<label for="exampleInputEmail1">Tanggal Pelanggaran</label>
							<input type="date" name="tgl" value="<?= $value->tgl_pelanggaran ?>" class="form-control" id="exampleInputEmail1" placeholder="No Telepon" required>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Alasan Pelanggaran</label>
							<select class="form-control" name="alasan">
								<option value="">---Pilih Alasan---</option>
								<option value="Tidak memakai seragam/rompi" <?php if ($value->alasan_pelanggaran == 'Tidak memakai seragam/rompi') {
																				echo 'selected';
																			} ?>>Tidak memakai seragam/rompi</option>
								<option value="Tidak memakai sarung tangan" <?php if ($value->alasan_pelanggaran == 'Tidak memakai sarung tangan') {
																				echo 'selected';
																			} ?>>Tidak memakai sarung tangan</option>
								<option value="Tidak memakai sepatu" <?php if ($value->alasan_pelanggaran == 'Tidak memakai sepatu') {
																			echo 'selected';
																		} ?>>Tidak memakai sepatu</option>

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