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
		<a href="<?= base_url('Admin/cDiskon/create') ?>" class="btn btn-success mb-3"><i class="ik ik-tag"></i>Tambah Data Diskon Produk</a>
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
						<h3>Informasi Diskon Produk</h3>

					</div>
					<div class="card-body">
						<table id="data_table" class="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Nama Produk</th>
									<th scope="col">Tanggal Diskon</th>
									<th scope="col">Nama Diskon</th>
									<th scope="col">Besar Diskon</th>
									<th scope="col">Action</th>

								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($diskon as $key => $value) {
								?>
									<tr>
										<th scope="row"><?= $no++ ?></th>
										<td><?= $value->nama_produk ?></td>
										<td><?= $value->tgl_selesai ?></td>
										<td><?= $value->nama_diskon ?></td>
										<td><?= $value->diskon ?>%</td>
										<td class="text-center">
											<div class="table-actions">
												<a href="<?= base_url('Admin/cDiskon/update/' . $value->id_diskon) ?>"><i class="ik ik-edit-2"></i></a>
												<a href="<?= base_url('Admin/cDiskon/delete/' . $value->id_diskon) ?>"><i class="ik ik-trash-2"></i></a>
											</div>
										</td>
									</tr>
								<?php
								} ?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>


	</div>
</div>