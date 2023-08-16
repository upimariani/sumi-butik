<!-- Contact Section Begin -->
<section class="contact spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="contact__content">

					<div class="contact__form">
						<h5>LOGIN PELANGGAN</h5>
						<?php
						if ($this->session->userdata('success') != '') {
						?>
							<div class="alert alert-success alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<div class="alert-icon">
									<i class="zmdi zmdi-notifications-none"></i>
								</div>
								<div class="alert-message">
									<span><strong>Success!</strong> <?= $this->session->userdata('success') ?></span>
								</div>
							</div>
						<?php
						}
						?>
						<?php
						if ($this->session->userdata('error') != '') {
						?>
							<div class="alert alert-danger alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<div class="alert-icon">
									<i class="zmdi zmdi-notifications-none"></i>
								</div>
								<div class="alert-message">
									<span><strong>Gagal!</strong> <?= $this->session->userdata('error') ?></span>
								</div>
							</div>
						<?php
						}
						?>
						<form action="<?= base_url('Pelanggan/cLogin') ?>" method="POST">
							<?= form_error('username', '<small class="text-danger">', '</small>') ?>
							<input type="text" name="username" placeholder="Username">
							<?= form_error('password', '<small class="text-danger">', '</small>') ?>
							<input type="password" name="password" placeholder="Password">
							<div class="mb-3">
								Apakah Anda Belum Memiliki Akun? <a href="<?= base_url('Pelanggan/cLogin/register') ?>" class="text-info">Register Disini</a>
							</div>
							<button type="submit" class="site-btn">Login</button>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- Contact Section End -->
