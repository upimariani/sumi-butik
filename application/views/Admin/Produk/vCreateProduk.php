<div class="main-content">
	<div class="container-fluid">
		<div class="page-header">
			<div class="row align-items-end">
				<div class="col-lg-8">
					<div class="page-header-title">
						<i class="ik ik-moon bg-blue"></i>
						<div class="d-inline">
							<h5>Data Produk</h5>
							<span>Produk Sumi Butik</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<nav class="breadcrumb-container" aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="../index.html"><i class="ik ik-home"></i></a>
							</li>
							<li class="breadcrumb-item">
								<a href="#">Tables</a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">Produk</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8">
				<div class="card">
					<div class="card-header">
						<h3>Tambah Data Produk</h3>

					</div>
					<div class="card-body">
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
							<button type="submit" class="btn btn-success px-5"><i class="ik ik-moon"></i> Save</button>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>


	</div>
</div>
