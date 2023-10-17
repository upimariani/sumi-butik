<body class="bg-theme bg-theme2">

	<!-- Start wrapper-->
	<div id="wrapper">

		<!--Start sidebar-wrapper-->
		<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
			<div class="brand-logo">
				<a href="index.html">
					<img src="<?= base_url('asset/dashtreme-master/') ?>assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
					<h5 class="logo-text">Pemilik</h5>
				</a>
			</div>
			<ul class="sidebar-menu do-nicescrol">
				<li class="sidebar-header">MAIN NAVIGATION</li>
				<li class="<?php if ($this->uri->segment(1) == 'Pemilik' && $this->uri->segment(2) == 'cDashboard') {
								echo 'active';
							}  ?>">
					<a href="<?= base_url('Pemilik/cDashboard') ?>">
						<i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
					</a>
				</li>



				<li class="sidebar-header">LAPORAN</li>
				<li class="<?php if ($this->uri->segment(1) == 'Pemilik' && $this->uri->segment(2) == 'cTransaksi') {
								echo 'active';
							}  ?>">
					<a href="<?= base_url('Pemilik/cTransaksi') ?>">
						<i class="zmdi zmdi-assignment-check"></i> <span>Laporan Transaksi</span>
					</a>
				</li>
				<li class="sidebar-header">ANALISIS</li>

				<li class="<?php if ($this->uri->segment(1) == 'Pemilik' && $this->uri->segment(2) == 'cAnalisisRetensi') {
								echo 'active';
							}  ?>">
					<a href="<?= base_url('Pemilik/cAnalisisRetensi') ?>">
						<i class="zmdi zmdi-book"></i> <span>Analisis Retensi Pelanggan</span>
					</a>
				</li>
				<li class="sidebar-header">KOMUNIKASI</li>

				<li class="<?php if ($this->uri->segment(1) == 'Pemilik' && $this->uri->segment(2) == 'cKritikSaran') {
								echo 'active';
							}  ?>">
					<a href="<?= base_url('Pemilik/cKritikSaran') ?>">
						<i class="zmdi zmdi-info"></i> <span>Kritik dan Saran Pelanggan</span>
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