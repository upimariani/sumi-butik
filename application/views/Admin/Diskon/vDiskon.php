<div class="clearfix"></div>

<div class="content-wrapper">
	<div class="container-fluid">

		<div class="row mt-3">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Informasi Diskon Produk</h5>
						<a href="<?= base_url('Admin/cDiskon/create') ?>" class="btn btn-success mb-3">+ Data Diskon</a>
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
							<table class="table">
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
											<td><a href="<?= base_url('Admin/cDiskon/delete/' . $value->id_diskon) ?>" class="btn btn-danger">Hapus</a>
												<a href="<?= base_url('Admin/cDiskon/update/' . $value->id_diskon) ?>" class="btn btn-warning">Edit</a>
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