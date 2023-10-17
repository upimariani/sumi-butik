<div class="clearfix"></div>

<div class="content-wrapper">
	<div class="container-fluid">

		<div class="row mt-3">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Informasi Kritik dan Saran Pelanggan</h5>

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
										<th scope="col">Nama Pelanggan</th>
										<th scope="col">Tanggal Transaksi</th>
										<th scope="col">Isi Kritik Saran</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($kritiksaran as $key => $value) {
									?>
										<tr>
											<th scope="row"><?= $no++ ?></th>
											<td><?= $value->nm_pel ?></td>
											<td><?= $value->tgl_po ?></td>
											<td><?= $value->isi_kritik_saran ?></td>

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