<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Absensi Karyawan</h1>
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
				<div class="col-7  ">

					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Informasi Karyawan</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Nama Karyawan</th>
										<th class="text-center">Jenis Kelamin</th>
										<th class="text-center">Divisi</th>
										<th class="text-center">Jabatan</th>
										<th class="text-center">View</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($karyawan as $key => $value) {
									?>
										<tr>
											<td class="text-center"><?= $no++ ?></td>
											<td class="text-center"><?= $value->nama_karyawan ?></td>
											<td class="text-center"><?= $value->jk_karyawan ?></td>
											<td class="text-center"><?= $value->divisi ?></td>
											<td class="text-center"><?= $value->jabatan ?></td>
											<td class="text-center">
												<div class="btn-group">
													<a href="<?= base_url('Pengawas/cAbsensi/view/' . $value->id_karyawan) ?>" class="btn btn-success"><i class="fas fa-info"></i></a>
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
										<th class="text-center">Jenis Kelamin</th>
										<th class="text-center">Divisi</th>
										<th class="text-center">Jabatan</th>
										<th class="text-center">View</th>
									</tr>
								</tfoot>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->
				<div class="col-md-5">
					<!-- general form elements -->
					<div class="card card-danger">
						<div class="card-header">
							<h3 class="card-title">Absensi Karyawan</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form role="form" action="<?= base_url('Pengawas/cAbsensi/create') ?>" method="POST">
							<div class="card-body">
								<div class="form-group">
									<label for="exampleInputEmail1">Nama Karyawan</label>
									<select class="form-control" name="karyawan">
										<option>---PIlih Nama Karyawan---</option>
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
									<label for="exampleInputPassword1">Status Kehadiran</label>
									<select class="form-control" name="status">
										<option value="1">Hadir</option>
										<option value="2">Alfa</option>
										<option value="3">Sakit</option>
									</select>
								</div>

								<div class="form-group">
									<label for="exampleInputPassword1">Tanggal</label>
									<input type="date" name="tgl" class="form-control" id="exampleInputPassword1" placeholder="Password">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Waktu</label>
									<input type="time" name="time" step="1" class="form-control" id="exampleInputPassword1" placeholder="Password">
								</div>

							</div>
							<!-- /.card-body -->

							<div class="card-footer">
								<button type="submit" class="btn btn-success">Simpan</button>
							</div>
						</form>
					</div>
					<!-- /.card -->
				</div>
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>