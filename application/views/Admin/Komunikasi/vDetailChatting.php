<div class="clearfix"></div>

<div class="content-wrapper">
	<div class="container-fluid">



		<div class="row">
			<div class="col-6 col-lg-6">
				<div class="card">
					<div class="card-header">
						<h3>Chatting Pelanggan</h3>
					</div>
					<div class="card-body">
						<?php
						foreach ($chatting as $key => $value) {

							if ($value->pelanggan_send != null) {
						?>
								<div class="toast-container mb-3">
									<div class="bs-toast toast fade show bg-warning mb-3" role="alert" aria-live="assertive" aria-atomic="true">
										<div class="toast-header">
											<i class="bx bx-mail-send me-2"></i>
											<div class="me-auto fw-semibold"><?= $value->nm_pel ?></div>
											<small class="badge badge-warning"> <?= $value->time ?></small>
										</div>
										<div class="toast-body text-dark">
											<?= $value->pelanggan_send ?>
										</div>
									</div>
								</div>

							<?php
							} else if ($value->admin_send != null) {
							?>

								<div class="bs-toast toast fade show bg-success mb-3" role="alert" aria-live="assertive" aria-atomic="true">
									<div class="toast-header">
										<i class="bx bx-mail-send me-2"></i>
										<div class="me-auto fw-semibold">Admin</div>
										<small class="badge badge-success"> <?= $value->time ?></small>
									</div>
									<div class="toast-body">
										<?= $value->admin_send ?>
									</div>
								</div>
							<?php
							}
							?>
						<?php
						}
						?>
						<h4>Balasan Chatting</h4>
						<form action="<?= base_url('Admin/cChatting/balas/' . $id) ?>" method="POST">
							<textarea class="form-control" name="pesan" placeholder="Tuliskan pesan anda..."></textarea>
							<button type="submit" class="btn btn-warning mt-3">Send</button>
						</form>
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