<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-warning elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
		<img src="<?= base_url('asset/logo.jpg') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
		<h5 class="brand-text font-weight-light">CV.Anugrah <br>Putra Tunggal</h5>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
			</div>
			<div class="info">
				<a href="#" class="d-block">Selamat Datang, Direktur</a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
				<li class="nav-item">
					<a href="<?= base_url('Direktur/cDashboard') ?>" class="nav-link   <?php if ($this->uri->segment(1) == 'Direktur' && $this->uri->segment(2) == 'cDashboard') {
																							echo 'active';
																						}  ?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('Direktur/cLaporan') ?>" class="nav-link  <?php if ($this->uri->segment(1) == 'Direktur' && $this->uri->segment(2) == 'cLaporan') {
																						echo 'active';
																					}  ?>">
						<i class="nav-icon fas fa-book"></i>
						<p>
							Cetak Laporan
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('cAuth/logout') ?>" class="nav-link">
						<i class="nav-icon fas fa-sign-out-alt"></i>
						<p>SignOut</p>
					</a>
				</li>

			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>