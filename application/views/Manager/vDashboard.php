<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Dashboard Manager</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Info boxes -->
			<div class="row">
				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box">
						<span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

						<div class="info-box-content">
							<span class="info-box-text">Karyawan</span>
							<span class="info-box-number">
								<?= $dashboard['karyawan']->jml_karyawan ?>
							</span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<!-- /.col -->
				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box mb-3">
						<span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

						<div class="info-box-content">
							<span class="info-box-text">Kriteria</span>
							<span class="info-box-number"><?= $dashboard['kriteria']->jml_kriteria ?></span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<!-- /.col -->

				<!-- fix for small devices only -->
				<div class="clearfix hidden-md-up"></div>

				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box mb-3">
						<span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

						<div class="info-box-content">
							<span class="info-box-text">Karyawan Analisis</span>
							<span class="info-box-number"><?= $dashboard['karyawan_analisis']->jml_penilaian ?></span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<!-- /.col -->
				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box mb-3">
						<span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

						<div class="info-box-content">
							<span class="info-box-text">Karyawan Terbaik</span>
							<span class="info-box-number"><?= $dashboard['karyawan_terbaik']->terbaik ?> | <?= $dashboard['karyawan_terbaik']->nama_karyawan ?></span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
			<!-- /.row -->



			<!-- Main row -->
			<div class="row">
				<!-- Left col -->
				<div class="col-md-12">
					<!-- MAP & BOX PANE -->


					<div class="callout callout-success">
						<h5>Selamat Karyawan Terbaik!</h5>

						<p>Pada Karyawan atas nama <strong><?= $dashboard['karyawan_terbaik']->nama_karyawan ?></strong> Divisi. <strong><?= $dashboard['karyawan_terbaik']->divisi ?></strong> sebagai <strong><?= $dashboard['karyawan_terbaik']->jabatan ?></strong></p>
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->

				<!-- /.col -->
			</div>
			<!-- /.row -->

		</div>
		<!--/. container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->