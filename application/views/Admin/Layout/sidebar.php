<body class="bg-theme bg-theme2">

	<!-- Start wrapper-->
	<div id="wrapper">

		<!--Start sidebar-wrapper-->
		<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
			<div class="brand-logo">
				<a href="index.html">
					<img src="<?= base_url('asset/dashtreme-master/') ?>assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
					<h5 class="logo-text">Admin</h5>
				</a>
			</div>
			<ul class="sidebar-menu do-nicescrol">
				<li class="sidebar-header">MAIN NAVIGATION</li>
				<li class="<?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cDashboard') {
								echo 'active';
							}  ?>">
					<a href="<?= base_url('Admin/cDashboard') ?>">
						<i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
					</a>
				</li>
				<li class="sidebar-header">KELOLA DATA MASTER</li>
				<li class="<?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cUser') {
								echo 'active';
							}  ?>">
					<a href="<?= base_url('Admin/cUser') ?>">
						<i class="zmdi zmdi-accounts-list"></i> <span>User</span>
					</a>
				</li>

				<li class="<?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cKategori') {
								echo 'active';
							}  ?>">
					<a href="<?= base_url('Admin/cKategori') ?>">
						<i class="zmdi zmdi-invert-colors"></i> <span>Kategori</span>
					</a>
				</li>

				<li class="<?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cProduk') {
								echo 'active';
							}  ?>">
					<a href="<?= base_url('Admin/cProduk') ?>">
						<i class="zmdi zmdi-format-list-bulleted"></i> <span>Produk</span>
					</a>
				</li>

				<li class="<?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cDiskon') {
								echo 'active';
							}  ?>">
					<a href="<?= base_url('Admin/cDiskon') ?>">
						<i class="zmdi zmdi-grid"></i> <span>Diskon</span>
					</a>
				</li>


				<li class="sidebar-header">LAPORAN</li>
				<li class="<?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cTransaksi') {
								echo 'active';
							}  ?>">
					<a href="<?= base_url('Admin/cTransaksi') ?>">
						<i class="zmdi zmdi-assignment-check"></i> <span>Laporan Transaksi</span>
					</a>
				</li>
				<li class="sidebar-header">ANALISIS</li>

				<li class="<?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cAnalisisPelanggan') {
								echo 'active';
							}  ?>">
					<a href="<?= base_url('Admin/cAnalisisPelanggan') ?>">
						<i class="zmdi zmdi-case-check"></i> <span>Analisis Retensi Pelanggan</span>
					</a>
				</li>
				<li>
					<a href="<?= base_url('cLogin/logout') ?>">
						<i class="zmdi zmdi-assignment-return"></i> <span>Logout</span>
					</a>
				</li>

			</ul>

		</div>
		<!--End sidebar-wrapper-->

		<!--Start topbar header-->
		<header class="topbar-nav">
			<nav class="navbar navbar-expand fixed-top">
				<ul class="navbar-nav mr-auto align-items-center">
					<li class="nav-item">
						<a class="nav-link toggle-menu" href="javascript:void();">
							<i class="icon-menu menu-icon"></i>
						</a>
					</li>
					<li class="nav-item">
						<form class="search-bar">
							<input type="text" class="form-control" placeholder="Enter keywords">
							<a href="javascript:void();"><i class="icon-magnifier"></i></a>
						</form>
					</li>
				</ul>

				<ul class="navbar-nav align-items-center right-nav-link">
					<li class="nav-item dropdown-lg">
						<a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
							<i class="fa fa-envelope-open-o"></i></a>
					</li>
					<li class="nav-item dropdown-lg">
						<a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
							<i class="fa fa-bell-o"></i></a>
					</li>
				</ul>
			</nav>
		</header>
		<!--End topbar header-->