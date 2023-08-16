<div class="clearfix"></div>

<div class="content-wrapper">
	<div class="container-fluid">

		<div class="row mt-3">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-body">
						<div class="card-title">Vertical Form</div>
						<hr>
						<form action="<?= base_url('Admin/cDiskon/update/' . $diskon->id_diskon) ?>" method="POST">
							<div class="form-group">
								<label for="input-1">Nama Produk</label>
								<select name="produk" class="form-control">
									<option value="">---Pilih Produk---</option>
									<?php
									foreach ($produk as $key => $value) {
									?>
										<option value="<?= $value->id_produk ?>" <?php if ($value->id_produk == $diskon->id_produk) {
																						echo 'selected';
																					} ?>><?= $value->nama_produk ?></option>
									<?php
									}
									?>
								</select>
								<?= form_error('produk', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="input-2">Nama Diskon</label>
								<input type="text" name="nama" value="<?= $diskon->nama_diskon ?>" class="form-control" id="input-2" placeholder="Masukkan Nama Diskon">
								<?= form_error('nama', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="input-2">Besar Diskon</label>
								<input type="text" name="diskon" value="<?= $diskon->diskon ?>" class="form-control" id="input-2" placeholder="Masukkan Besar Diskon">
								<?= form_error('diskon', '<small class="form-text text-danger">', '</small>'); ?>
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