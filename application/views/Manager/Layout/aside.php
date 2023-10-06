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
				<a href="#" class="d-block">Selamat Datang, Manager</a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
				<li class="nav-item">
					<a href="<?= base_url('Manager/cDashboard') ?>" class="nav-link   <?php if ($this->uri->segment(1) == 'Manager' && $this->uri->segment(2) == 'cDashboard') {
																							echo 'active';
																						}  ?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>Dashboard</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?= base_url('Manager/cUser') ?>" class="nav-link  <?php if ($this->uri->segment(1) == 'Manager' && $this->uri->segment(2) == 'cUser') {
																					echo 'active';
																				}  ?>">
						<i class="nav-icon fas fa-users"></i>
						<p>
							User
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('Manager/cKaryawan') ?>" class="nav-link  <?php if ($this->uri->segment(1) == 'Manager' && $this->uri->segment(2) == 'cKaryawan') {
																						echo 'active';
																					}  ?>">
						<i class="nav-icon fas fa-user-tie"></i>
						<p>
							Karyawan
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('Manager/cKriteria') ?>" class="nav-link  <?php if ($this->uri->segment(1) == 'Manager' && $this->uri->segment(2) == 'cKriteria') {
																						echo 'active';
																					}  ?>">
						<i class="nav-icon fas fa-address-card"></i>
						<p>
							Kriteria Penilaian
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('Manager/cAnalisis') ?>" class="nav-link  <?php if ($this->uri->segment(1) == 'Manager' && $this->uri->segment(2) == 'cAnalisis') {
																						echo 'active';
																					}  ?>">
						<i class="nav-icon fas fa-calculator"></i>
						<p>
							Analisis Metode MOORA
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