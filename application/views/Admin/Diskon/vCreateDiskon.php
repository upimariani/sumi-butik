<div class="main-content">
	<div class="container-fluid">
		<div class="page-header">
			<div class="row align-items-end">
				<div class="col-lg-8">
					<div class="page-header-title">
						<i class="ik ik-percent bg-blue"></i>
						<div class="d-inline">
							<h5>Data Diskon Produk</h5>
							<span>Diskon Produk Sumi Butik</span>
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
							<li class="breadcrumb-item active" aria-current="page">Diskon Produk</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8">
				<div class="card">
					<div class="card-header">
						<h3>Tambah Diskon Produk</h3>

					</div>
					<div class="card-body">
						<form action="<?= base_url('Admin/cDiskon/create') ?>" method="POST">
							<div class="form-group">
								<label for="input-1">Nama Produk</label>
								<select name="produk" class="form-control">
									<option value="">---Pilih Produk---</option>
									<?php
									foreach ($produk as $key => $value) {
									?>
										<option value="<?= $value->id_produk ?>"><?= $value->nama_produk ?></option>
									<?php
									}
									?>
								</select>
								<?= form_error('produk', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="input-2">Nama Diskon</label>
								<input type="text" name="nama" class="form-control" id="input-2" placeholder="Masukkan Nama Diskon">
								<?= form_error('nama', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="input-2">Besar Diskon</label>
								<input type="text" name="diskon" class="form-control" id="input-2" placeholder="Masukkan Besar Diskon">
								<?= form_error('diskon', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-success px-5"><i class="ik ik-percent"></i> Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>


	</div>
</div>