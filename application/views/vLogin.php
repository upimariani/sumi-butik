<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>LOGIN</title>
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
	<!-- Bootstrap core CSS-->
	<link href="<?= base_url('asset/dashtreme-master/') ?>assets/css/bootstrap.min.css" rel="stylesheet" />
	<!-- animate CSS-->
	<link href="<?= base_url('asset/dashtreme-master/') ?>assets/css/animate.css" rel="stylesheet" type="text/css" />
	<!-- Icons CSS-->
	<link href="<?= base_url('asset/dashtreme-master/') ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
	<!-- Custom Style-->
	<link href="<?= base_url('asset/dashtreme-master/') ?>assets/css/app-style.css" rel="stylesheet" />

</head>

<body class="bg-theme bg-theme2">

	<!-- start loader -->
	<div id="pageloader-overlay" class="visible incoming">
		<div class="loader-wrapper-outer">
			<div class="loader-wrapper-inner">
				<div class="loader"></div>
			</div>
		</div>
	</div>
	<!-- end loader -->

	<!-- Start wrapper-->
	<div id="wrapper">

		<div class="loader-wrapper">
			<div class="lds-ring">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
		<div class="card card-authentication1 mx-auto my-5">
			<div class="card-body">
				<div class="card-content p-2">
					<div class="text-center">
						<!-- <img src="assets/images/logo-icon.png" alt="logo icon"> -->
					</div>
					<div class="card-title text-uppercase text-center py-3">Sign In</div>
					<?php
					if ($this->session->userdata('success')) {
					?>
						<div class="alert alert-success alert-dismissible" role="alert">

							<div class="alert-icon">
								<i class="zmdi zmdi-notifications-none"></i>
							</div>
							<div class="alert-message">
								<strong>Sukses!</strong> <?= $this->session->userdata('success') ?>
							</div>
						</div>
					<?php
					}
					?>
					<?php
					if ($this->session->userdata('error')) {
					?>
						<div class="alert alert-danger alert-dismissible" role="alert">

							<div class="alert-icon">
								<i class="zmdi zmdi-notifications-none"></i>
							</div>
							<div class="alert-message">
								<strong>Gagal!</strong> <?= $this->session->userdata('error') ?>
							</div>
						</div>
					<?php
					}
					?>
					<form action="<?= base_url('cLogin') ?>" method="POST">
						<div class="form-group">
							<label for="exampleInputUsername" class="sr-only">Username</label>
							<div class="position-relative has-icon-right">
								<?= form_error('username', '<small class="text-danger">', '</small>') ?>
								<input type="text" id="exampleInputUsername" name="username" class="form-control input-shadow" placeholder="Enter Username">
								<div class="form-control-position">
									<i class="icon-user"></i>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword" class="sr-only">Password</label>
							<div class="position-relative has-icon-right">
								<?= form_error('password', '<small class="text-danger">', '</small>') ?>
								<input type="password" id="exampleInputPassword" name="password" class="form-control input-shadow" placeholder="Enter Password">
								<div class="form-control-position">
									<i class="icon-lock"></i>
								</div>
							</div>
						</div>

						<button type="submit" class="btn btn-light btn-block">Sign In</button>
					</form>
				</div>
			</div>

		</div>

		<!--Start Back To Top Button-->
		<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
		<!--End Back To Top Button-->

		<!--start color switcher-->
		<div class="right-sidebar">
			<div class="switcher-icon">
				<i class="zmdi zmdi-settings zmdi-hc-spin"></i>
			</div>
			<div class="right-sidebar-content">

				<p class="mb-0">Gaussion Texture</p>
				<hr>

				<ul class="switcher">
					<li id="theme1"></li>
					<li id="theme2"></li>
					<li id="theme3"></li>
					<li id="theme4"></li>
					<li id="theme5"></li>
					<li id="theme6"></li>
				</ul>

				<p class="mb-0">Gradient Background</p>
				<hr>

				<ul class="switcher">
					<li id="theme7"></li>
					<li id="theme8"></li>
					<li id="theme9"></li>
					<li id="theme10"></li>
					<li id="theme11"></li>
					<li id="theme12"></li>
					<li id="theme13"></li>
					<li id="theme14"></li>
					<li id="theme15"></li>
				</ul>

			</div>
		</div>
		<!--end color switcher-->

	</div>
	<!--wrapper-->

	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url('asset/dashtreme-master/') ?>assets/js/jquery.min.js"></script>
	<script src="<?= base_url('asset/dashtreme-master/') ?>assets/js/popper.min.js"></script>
	<script src="<?= base_url('asset/dashtreme-master/') ?>assets/js/bootstrap.min.js"></script>

	<!-- sidebar-menu js -->
	<script src="<?= base_url('asset/dashtreme-master/') ?>assets/js/sidebar-menu.js"></script>

	<!-- Custom scripts -->
	<script src="<?= base_url('asset/dashtreme-master/') ?>assets/js/app-script.js"></script>

</body>

</html>