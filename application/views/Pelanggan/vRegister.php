<!-- Contact Section Begin -->
<section class="contact spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="contact__content">

					<div class="contact__form">
						<h5>REGISTRASI PELANGGAN</h5>

						<form action="<?= base_url('Pelanggan/cLogin/register') ?>" method="POST">
							<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
							<input type="text" name="nama" placeholder="Nama Pelanggan">
							<?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
							<input type="text" name="alamat" placeholder="Alamat">
							<?= form_error('no_hp', '<small class="text-danger">', '</small>') ?>
							<input type="text" name="no_hp" placeholder="No Telepon">
							<?= form_error('username', '<small class="text-danger">', '</small>') ?>
							<input type="text" name="username" placeholder="Username">
							<?= form_error('password', '<small class="text-danger">', '</small>') ?>
							<input type="text" name="password" placeholder="Password">
							<div class="mb-3">
								Apakah Anda Sudah Memiliki Akun? <a href="<?= base_url('Pelanggan/cLogin') ?>" class="text-info">Login Disini</a>
							</div>
							<button type="submit" class="site-btn">REGISTER</button>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- Contact Section End -->