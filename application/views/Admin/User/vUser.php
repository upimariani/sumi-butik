<div class="clearfix"></div>

<div class="content-wrapper">
	<div class="container-fluid">

		<div class="row mt-3">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Informasi User</h5>

						<a href="<?= base_url('Admin/cUser/create') ?>" class="btn btn-success mb-3">+ Data User</a>
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
										<th scope="col">Nama User</th>
										<th scope="col">Alamat</th>
										<th scope="col">No Telepon</th>
										<th scope="col">Username</th>
										<th scope="col">Password</th>
										<th scope="col">Level User</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($user as $key => $value) {
									?>
										<tr>
											<th scope="row"><?= $no++ ?></th>
											<td><?= $value->nama_user ?></td>
											<td><?= $value->alamat ?></td>
											<td><?= $value->no_hp ?></td>
											<td><?= $value->username ?></td>
											<td><?= $value->password ?></td>
											<td><a href="<?= base_url('Admin/cUser/delete/' . $value->id_user) ?>" class="btn btn-danger">Hapus</a>
												<a href="<?= base_url('Admin/cUser/update/' . $value->id_user) ?>" class="btn btn-warning">Edit</a>
											</td>
										</tr>
									<?php
									}
									?>
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