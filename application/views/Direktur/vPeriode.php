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
										<th class="text-center">View Detail</th>
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
											<td class="text-center"><a href="<?= base_url('Direktur/cLaporan/detail_periode/' . $value->periode) ?>" class="btn btn-warning">View</a></td>
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