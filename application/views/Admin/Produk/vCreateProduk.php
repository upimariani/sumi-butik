<div class="clearfix"></div>

<div class="content-wrapper">
	<div class="container-fluid">

		<div class="row mt-3">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-body">
						<div class="card-title">Tambah Data Produk</div>
						<hr>
						<?php echo form_open_multipart('admin/cproduk/create'); ?>
						<div class="form-group">
							<label for="input-1">Nama Kategori</label>
							<select name="kategori" class="form-control">
								<option value="">---Pilih Kategori Produk---</option>
								<?php
								foreach ($kategori as $key => $value) {
								?>
									<option value="<?= $value->id_kategori ?>"><?= $value->nama_kategori ?></option>
								<?php
								}
								?>
							</select>
							<?= form_error('kategori', '<small class="form-text text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="input-2">Nama Produk</label>
							<input type="text" name="nama" class="form-control" id="input-2" placeholder="Masukkan Nama Produk">
							<?= form_error('nama', '<small class="form-text text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="input-3">Deskripsi</label>
							<input type="text" name="deskripsi" class="form-control" id="input-3" placeholder="Masukkan Deskripsi">
							<?= form_error('deskripsi', '<small class="form-text text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="input-4">Harga</label>
							<input type="number" name="harga" class="form-control" id="input-4" placeholder="Masukkan Harga">
							<?= form_error('harga', '<small class="form-text text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="input-5">Stok</label>
							<input type="number" name="stok" class="form-control" id="input-5" placeholder="Masukkan Stok Produk">
							<?= form_error('stok', '<small class="form-text text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="input-5">Gambar</label>
							<input type="file" name="gambar" class="form-control" id="input-5" required>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Register</button>
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