<div class="clearfix"></div>

<div class="content-wrapper">
	<div class="container-fluid">

		<div class="row mt-3">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Informasi Pelanggan</h5>

						<div class="table-responsive">
							<table id="myTable" class="table">
								<thead>
									<tr>
										<th>Nama Pelanggan</th>
										<th>Alamat</th>
										<th class="d-none d-md-table-cell">No Telepon</th>
										<th class="d-none d-md-table-cell">Level Member</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($pelanggan as $key => $value) { ?>
										<tr>
											<td>
												<p><?= $value->nm_pel ?></p>
											</td>
											<td class="d-none d-md-table-cell"><?= $value->alamat ?></td>
											<td class="d-none d-md-table-cell"><?= $value->no_tlpon ?></td>
											<td class="d-none d-md-table-cell"><?php if ($value->level_member == '0') {
																				?>
													<span class="badge badge-danger">Pelanggan</span>
												<?php
																				} else {
												?>
													<span class="badge badge-success">Pelanggan Istimewa</span>
												<?php
																				} ?>
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