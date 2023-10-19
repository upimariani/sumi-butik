<body>
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

	<div class="wrapper">
		<header class="header-top" header-theme="light">
			<div class="container-fluid">
				<div class="d-flex justify-content-between">
					<div class="top-menu d-flex align-items-center">
						<button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
						<div class="header-search">
							<div class="input-group">
								<span class="input-group-addon search-close"><i class="ik ik-x"></i></span>
							</div>
						</div>
						<button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
					</div>
					<div class="top-menu d-flex align-items-center">
						<?php
						$jml = 0;
						$notif_pesan = $this->db->query("SELECT * FROM `chatting` GROUP BY id_pelanggan")->result();
						foreach ($notif_pesan as $key => $value) {
							$jml += 1;
						}
						?>

						<button type="button" class="nav-link ml-10 right-sidebar-toggle"><i class="ik ik-message-square"></i><span class="badge bg-success"><?= $jml ?></span></button>



					</div>
				</div>
			</div>
		</header>

		<div class="page-wrap">
			<div class="app-sidebar colored">
				<div class="sidebar-header">
					<a class="header-brand" href="index.html">
						<div class="logo-img">
							<img src="<?= base_url('asset/themekit-master/') ?>src/img/brand-white.svg" class="header-brand-img" alt="lavalite">
						</div>
						<span class="text">SumiButik</span>
					</a>
					<button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
					<button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
				</div>

				<div class="sidebar-content">
					<div class="nav-container">
						<nav id="main-menu-navigation" class="navigation-main">
							<div class="nav-lavel">Navigation</div>
							<div class="nav-item <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cDashboard') {
														echo 'active';
													}  ?>">
								<a href="<?= base_url('Admin/cDashboard') ?>"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
							</div>

							<div class="nav-lavel">KELOLA DATA MASTER</div>

							<div class="nav-item <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cUser') {
														echo 'active';
													}  ?>">
								<a href="<?= base_url('Admin/cUser') ?>"><i class="ik ik-user-plus"></i><span>User</span></a>
							</div>
							<div class="nav-item <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cKategori') {
														echo 'active';
													}  ?>">
								<a href="<?= base_url('Admin/cKategori') ?>"><i class="ik ik-moon"></i><span>Kategori</span></a>
							</div>
							<div class="nav-item <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cProduk') {
														echo 'active';
													}  ?>">
								<a href="<?= base_url('Admin/cProduk') ?>"><i class="ik ik-tag"></i><span>Produk</span></a>
							</div>
							<div class="nav-item <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cDiskon') {
														echo 'active';
													}  ?>">
								<a href="<?= base_url('Admin/cDiskon') ?>"><i class="ik ik-percent"></i><span>Diskon</span></a>
							</div>
							<div class="nav-lavel">Laporan</div>

							<div class="nav-item <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cTransaksi') {
														echo 'active';
													}  ?>">
								<?php
								$jml_pesanan = $this->db->query("SELECT COUNT(id_po) as jml FROM `po` WHERE status_order='1'")->row();
								?>
								<a href="<?= base_url('Admin/cTransaksi') ?>"><i class="ik ik-shopping-cart"></i><span>Laporan Transaksi</span> <span class="badge badge-warning"><?= $jml_pesanan->jml ?></span> </a>
							</div>
							<div class="nav-lavel">ANALISIS</div>
							<div class="nav-item <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cAnalisisPelanggan') {
														echo 'active';
													}  ?>">
								<a href="<?= base_url('Admin/cAnalisisPelanggan') ?>"><i class="ik ik-bar-chart-line"></i><span>Analisis Retensi Pelanggan</span></a>
							</div>
							<div class="nav-lavel">KOMUNIKASI</div>
							<div class="nav-item <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cKritikSaran') {
														echo 'active';
													}  ?>">
								<a href="<?= base_url('Admin/cKritikSaran') ?>"><i class="ik ik-slack"></i><span>Kritik dan Saran</span></a>
							</div>
							<div class="nav-item">
								<a href="<?= base_url('cLogin/logout') ?>"><i class="ik ik-power"></i><span>LogOut</span></a>
							</div>
						</nav>
					</div>
				</div>
			</div>