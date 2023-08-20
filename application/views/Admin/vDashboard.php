<div class="clearfix"></div>

<div class="content-wrapper">
	<div class="container-fluid">

		<!--Start Dashboard Content-->



		<div class="row">
			<div class="col-6 table-responsive">
				<div class="card bg-light">
					<div class="card-header">
						<h3>Grafik Penjualan Per Hari</h3>
					</div>
					<div class="card-body">
						<canvas id="transaksi" height="150"></canvas>


					</div>
				</div>
			</div>
			<div class="col-6 table-responsive">
				<div class="card bg-light">
					<div class="card-header">
						<h3>Grafik Jumlah Level Member</h3>
					</div>
					<div class="card-body">
						<canvas id="level" height="150"></canvas>


					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-6 col-lg-6">
				<div class="card">
					<div class="card-body">
						<?php
						foreach ($chatting as $key => $value) {
						?>
							<li class="d-flex mb-4 pb-1">

								<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
									<div class="me-2">
										<small class="text-muted d-block mb-1"><?= $value->time ?></small>
										<h6 class="mb-0"><?= $value->nm_pel ?></h6>
									</div>
									<div class="user-progress d-flex align-items-center gap-1">
										<a href="<?= base_url('Admin/cDashboard/view_chatting/' . $value->id_pelanggan) ?>"><span class="badge bg-success">View</span></a>
									</div>
								</div>
							</li>
						<?php
						}
						?>
					</div>

				</div>
			</div>
		</div>
		<!--End Row-->

		<!--End Dashboard Content-->

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