<div class="clearfix"></div>

<div class="content-wrapper">
	<div class="container-fluid">

		<div class="row mt-3">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Informasi Produk</h5>
						<a href="<?= base_url('Admin/cProduk/create') ?>" class="btn btn-success mb-3">+ Data Produk</a>
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
						<div class="table-responsive">
							<table id="myTable" class="table" style="width: 100%;">
								<thead>
									<tr>
										<th>Gambar</th>
										<th style="width: 20%;" class="d-none d-md-table-cell">Nama Produk</th>
										<th class="d-none d-md-table-cell">Harga Produk</th>
										<th class="d-none d-md-table-cell">Deskripsi</th>
										<th class="d-none d-md-table-cell">Stok</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($produk as $key => $value) { ?>
										<tr>
											<td><img style="width: 100px;" src="<?= base_url('asset/foto-produk/' . $value->gambar) ?>"></td>
											<td style="width: 20%;">
												<h6><?= $value->nama_produk ?></h6>
												<p><?= $value->nama_kategori ?></p>
											</td>
											<td class="d-none d-md-table-cell">Rp. <?= number_format($value->harga)  ?></td>
											<td class="d-none d-md-table-cell"><?= $value->deskripsi ?></td>
											<td class="d-none d-md-table-cell"><?= $value->stok ?></td>
											<td><a href="<?= base_url('Admin/cProduk/delete/' . $value->id_produk) ?>" class="btn btn-danger">Hapus</a>
												<a href="<?= base_url('Admin/cProduk/update/' . $value->id_produk) ?>" class="btn btn-warning">Edit</a>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
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