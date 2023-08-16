<div class="clearfix"></div>

<div class="content-wrapper">
	<div class="container-fluid">

		<div class="row mt-3">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-body">
						<div class="card-title">Tambah Data User</div>
						<hr>
						<form action="<?= base_url('Admin/cUser/create') ?>" method="POST">
							<div class="form-group">
								<label for="input-1">Nama User</label>
								<input type="text" name="nama" class="form-control" id="input-1" placeholder="Masukkan Nama User">

								<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group">
								<label for="input-2">Alamat</label>
								<input type="text" name="alamat" class="form-control" id="input-2" placeholder="Masukkan Alamat">
								<?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group">
								<label for="input-3">No Telepon</label>
								<input type="text" name="no_hp" class="form-control" id="input-3" placeholder="Masukkan No Telepon">
								<?= form_error('no_hp', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group">
								<label for="input-4">Username</label>
								<input type="text" name="username" class="form-control" id="input-4" placeholder="Masukkan Username">
								<?= form_error('username', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group">
								<label for="input-5">Password</label>
								<input type="text" name="password" class="form-control" id="input-5" placeholder="Masukkan Password">
								<?= form_error('password', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group">
								<label for="input-5">Level User</label>
								<select name="level" class="form-control">
									<option value="">---Pilih Level User---</option>
									<option value="1">Admin</option>
									<option value="2">Pemilik</option>
								</select>
								<?= form_error('level', '<small class="text-danger">', '</small>') ?>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>

		</div>
		<!--End Row-->

		<!--start overlay-->
		<div class="overlay toggle-menu"></div>
		<!--end overlay-->

	</div>
	<!-- End container-fluid-->

</div>
<!--End content-wrapper-->
<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!--End Back To Top Button-->