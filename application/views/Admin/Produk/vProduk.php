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
		<a href="<?= base_url('Admin/cProduk/create') ?>" class="btn btn-success mb-3"><i class="ik ik-tag"></i>Tambah Data Produk</a>
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
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h3>Informasi Produk</h3>

					</div>
					<div class="card-body">
						<table id="data_table" class="table">
							<thead>
								<tr>
									<th>Gambar</th>
									<th class="d-none d-md-table-cell">Nama Produk</th>
									<th class="d-none d-md-table-cell">Harga Produk</th>
									<th class="d-none d-md-table-cell">Deskripsi</th>
									<th class="d-none d-md-table-cell">Stok</th>

								</tr>
							</thead>
							<tbody>
								<?php foreach ($produk as $key => $value) { ?>
									<tr>
										<td><img style="width: 100px;" src="<?= base_url('asset/foto-produk/' . $value->gambar) ?>"><br>
											<div class="table-actions text-center">
												<a href="<?= base_url('Admin/cProduk/update/' . $value->id_produk) ?>"><i class="ik ik-edit-2"></i></a>
												<a href="<?= base_url('Admin/cProduk/delete/' . $value->id_produk) ?>"><i class="ik ik-trash-2"></i></a>
											</div>
										</td>
										<td style="width: 20%;">
											<h6><?= $value->nama_produk ?></h6>
											<p><?= $value->nama_kategori ?></p>
										</td>
										<td class="d-none d-md-table-cell">Rp. <?= number_format($value->harga)  ?></td>
										<td class="d-none d-md-table-cell"><?= $value->deskripsi ?></td>
										<td class="d-none d-md-table-cell"><?= $value->stok ?></td>

									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>


	</div>
</div>