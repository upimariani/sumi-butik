<div class="clearfix"></div>

<div class="content-wrapper">
	<div class="container-fluid">

		<div class="row mt-3">

		</div>

		<div class="col-lg-12">
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

			<div class="card">
				<div class="card-header">
					<h5>Transaksi Pelanggan</h5>
				</div>

				<div class="card-body">
					<ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
						<li class="nav-item">
							<a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Pesanan Masuk</span></a>
						</li>
						<li class="nav-item">
							<a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link"><i class="zmdi zmdi-case-check"></i> <span class="hidden-xs">Menunggu Konfirmasi</span></a>
						</li>
						<li class="nav-item">
							<a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Pesanan Diproses</span></a>
						</li>
						<li class="nav-item">
							<a href="javascript:void();" data-target="#kirim" data-toggle="pill" class="nav-link"><i class="zmdi zmdi-car"></i> <span class="hidden-xs">Pesanan Dikirim</span></a>
						</li>
						<li class="nav-item">
							<a href="javascript:void();" data-target="#selesai" data-toggle="pill" class="nav-link"><i class="zmdi zmdi-info-outline"></i> <span class="hidden-xs">Pesanan Selesai</span></a>
						</li>
					</ul>
					<div class="tab-content p-3">
						<div class="tab-pane active" id="profile">
							<?php
							foreach ($transaksi as $key => $value) {
								if ($value->status_order == '0') {
							?>
									<h5 class="mb-3"><?= $value->nm_pel ?></h5>
									<div class="row">
										<div class="col-md-6">
											<h6>Alamat Pengiriman</h6>
											<p>
												<?= $value->alamat_detail ?> Kab/Kota. <?= $value->kota ?> Prov. <?= $value->prov ?>
											</p>
											<h6>Expedisi</h6>
											<p>
												<?= $value->expedisi ?> <?= $value->estimasi ?><br>
												<strong>Ongkos Kirim : <?= $value->ongkir ?></strong>
											</p>
											<p>Total Pembayaran : <strong>Rp. <?= number_format($value->total_bayar) ?></strong></p>
										</div>
										<div class="col-md-6">
											<h6>Status Order</h6>
											<hr>
											<span class="badge badge-danger"><i class="fa fa-eye"></i> Belum Bayar</span>
										</div>
										<div class="col-md-12">
											<?php
											$detail = $this->db->query("SELECT * FROM `po` JOIN detail_po ON po.id_po=detail_po.id_po JOIN produk ON produk.id_produk=detail_po.id_produk LEFT JOIN diskon ON diskon.id_produk=produk.id_produk  WHERE po.id_po='" . $value->id_po . "'")->result();
											?>
											<h5 class="mt-2 mb-3"><span class="fa fa-clock-o ion-clock float-right"></span> Produk</h5>
											<div class="table-responsive">
												<table class="table table-hover table-striped">
													<tbody>
														<?php
														foreach ($detail as $key => $value) {
														?>
															<tr>
																<td>
																	<strong><?= $value->nama_produk ?></strong> Rp. <?= number_format($value->harga - ($value->diskon / 100 * $value->harga)) ?> x <?= $value->qty ?> <strong>`Rp. <?= number_format(($value->harga - ($value->diskon / 100 * $value->harga)) * $value->qty) ?>`</strong>
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
							<?php
								}
							}
							?>

							<!--/row-->
						</div>
						<div class="tab-pane" id="messages">
							<?php
							foreach ($transaksi as $key => $value) {
								if ($value->status_order == '1') {
							?>
									<h5 class="mb-3"><?= $value->nm_pel ?></h5>
									<div class="row">
										<div class="col-md-6">
											<h6>Alamat Pengiriman</h6>
											<p>
												<?= $value->alamat_detail ?> Kab/Kota. <?= $value->kota ?> Prov. <?= $value->prov ?>
											</p>
											<h6>Expedisi</h6>
											<p>
												<?= $value->expedisi ?> <?= $value->estimasi ?><br>
												<strong>Ongkos Kirim : Rp. <?= number_format($value->ongkir)  ?></strong>
											</p>
											<p>Total Pembayaran : <strong>Rp. <?= number_format($value->total_bayar) ?></strong></p>
										</div>
										<div class="col-md-6">
											<h6>Status Order</h6>
											<hr>
											<span class="badge badge-warning"><i class="fa fa-eye"></i> Menunggu Konfirmasi</span><br>
											<a href="<?= base_url('Admin/cTransaksi/konfirmasi/' . $value->id_po) ?>" class="btn btn-warning">Konfirmasi</a>
										</div>
										<div class="col-md-12">
											<?php
											$detail = $this->db->query("SELECT * FROM `po` JOIN detail_po ON po.id_po=detail_po.id_po JOIN produk ON produk.id_produk=detail_po.id_produk LEFT JOIN diskon ON diskon.id_produk=produk.id_produk  WHERE po.id_po='" . $value->id_po . "'")->result();
											?>
											<h5 class="mt-2 mb-3"><span class="fa fa-clock-o ion-clock float-right"></span> Produk</h5>
											<div class="table-responsive">
												<table class="table table-hover table-striped">
													<tbody>
														<?php
														foreach ($detail as $key => $value) {
														?>
															<tr>
																<td>
																	<strong><?= $value->nama_produk ?></strong> Rp. <?= number_format($value->harga - ($value->diskon / 100 * $value->harga)) ?> x <?= $value->qty ?> <strong>`Rp. <?= number_format(($value->harga - ($value->diskon / 100 * $value->harga)) * $value->qty) ?>`</strong>
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
							<?php
								}
							}
							?>
						</div>
						<div class="tab-pane" id="edit">
							<?php
							foreach ($transaksi as $key => $value) {
								if ($value->status_order == '2') {
							?>
									<h5 class="mb-3"><?= $value->nm_pel ?></h5>
									<div class="row">
										<div class="col-md-6">
											<h6>Alamat Pengiriman</h6>
											<p>
												<?= $value->alamat_detail ?> Kab/Kota. <?= $value->kota ?> Prov. <?= $value->prov ?>
											</p>
											<h6>Expedisi</h6>
											<p>
												<?= $value->expedisi ?> <?= $value->estimasi ?><br>
												<strong>Ongkos Kirim : Rp. <?= number_format($value->ongkir)  ?></strong>
											</p>
											<p>Total Pembayaran : <strong>Rp. <?= number_format($value->total_bayar) ?></strong></p>
										</div>
										<div class="col-md-6">
											<h6>Status Order</h6>
											<hr>
											<span class="badge badge-info"><i class="fa fa-eye"></i> Pesanan Diproses</span><br>
											<a href="<?= base_url('Admin/cTransaksi/kirim/' . $value->id_po) ?>" class="btn btn-info">Kirim</a>

										</div>
										<div class="col-md-12">
											<?php
											$detail = $this->db->query("SELECT * FROM `po` JOIN detail_po ON po.id_po=detail_po.id_po JOIN produk ON produk.id_produk=detail_po.id_produk LEFT JOIN diskon ON diskon.id_produk=produk.id_produk  WHERE po.id_po='" . $value->id_po . "'")->result();
											?>
											<h5 class="mt-2 mb-3"><span class="fa fa-clock-o ion-clock float-right"></span> Produk</h5>
											<div class="table-responsive">
												<table class="table table-hover table-striped">
													<tbody>
														<?php
														foreach ($detail as $key => $value) {
														?>
															<tr>
																<td>
																	<strong><?= $value->nama_produk ?></strong> Rp. <?= number_format($value->harga - ($value->diskon / 100 * $value->harga)) ?> x <?= $value->qty ?> <strong>`Rp. <?= number_format(($value->harga - ($value->diskon / 100 * $value->harga)) * $value->qty) ?>`</strong>
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
							<?php
								}
							}
							?>
						</div>
						<div class="tab-pane" id="kirim">
							<?php
							foreach ($transaksi as $key => $value) {
								if ($value->status_order == '3') {
							?>
									<h5 class="mb-3"><?= $value->nm_pel ?></h5>
									<div class="row">
										<div class="col-md-6">
											<h6>Alamat Pengiriman</h6>
											<p>
												<?= $value->alamat_detail ?> Kab/Kota. <?= $value->kota ?> Prov. <?= $value->prov ?>
											</p>
											<h6>Expedisi</h6>
											<p>
												<?= $value->expedisi ?> <?= $value->estimasi ?><br>
												<strong>Ongkos Kirim : Rp. <?= number_format($value->ongkir)  ?></strong>
											</p>
											<p>Total Pembayaran : <strong>Rp. <?= number_format($value->total_bayar) ?></strong></p>
										</div>
										<div class="col-md-6">
											<h6>Status Order</h6>
											<hr>
											<span class="badge badge-primary"><i class="fa fa-eye"></i> Pesanan Dikirim</span>
										</div>
										<div class="col-md-12">
											<?php
											$detail = $this->db->query("SELECT * FROM `po` JOIN detail_po ON po.id_po=detail_po.id_po JOIN produk ON produk.id_produk=detail_po.id_produk LEFT JOIN diskon ON diskon.id_produk=produk.id_produk  WHERE po.id_po='" . $value->id_po . "'")->result();
											?>
											<h5 class="mt-2 mb-3"><span class="fa fa-clock-o ion-clock float-right"></span> Produk</h5>
											<div class="table-responsive">
												<table class="table table-hover table-striped">
													<tbody>
														<?php
														foreach ($detail as $key => $value) {
														?>
															<tr>
																<td>
																	<strong><?= $value->nama_produk ?></strong> Rp. <?= number_format($value->harga - ($value->diskon / 100 * $value->harga)) ?> x <?= $value->qty ?> <strong>`Rp. <?= number_format(($value->harga - ($value->diskon / 100 * $value->harga)) * $value->qty) ?>`</strong>
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
							<?php
								}
							}
							?>
						</div>
						<div class="tab-pane" id="selesai">
							<?php
							foreach ($transaksi as $key => $value) {
								if ($value->status_order == '4') {
							?>
									<h5 class="mb-3"><?= $value->nm_pel ?></h5>
									<div class="row">
										<div class="col-md-6">
											<h6>Alamat Pengiriman</h6>
											<p>
												<?= $value->alamat_detail ?> Kab/Kota. <?= $value->kota ?> Prov. <?= $value->prov ?>
											</p>
											<h6>Expedisi</h6>
											<p>
												<?= $value->expedisi ?> <?= $value->estimasi ?><br>
												<strong>Ongkos Kirim : Rp. <?= number_format($value->ongkir)  ?></strong>
											</p>
											<p>Total Pembayaran : <strong>Rp. <?= number_format($value->total_bayar) ?></strong></p>
										</div>
										<div class="col-md-6">
											<h6>Status Order</h6>
											<hr>
											<span class="badge badge-success"><i class="fa fa-eye"></i> Pesanan Selesai</span>
										</div>
										<div class="col-md-12">
											<?php
											$detail = $this->db->query("SELECT * FROM `po` JOIN detail_po ON po.id_po=detail_po.id_po JOIN produk ON produk.id_produk=detail_po.id_produk LEFT JOIN diskon ON diskon.id_produk=produk.id_produk  WHERE po.id_po='" . $value->id_po . "'")->result();
											?>
											<h5 class="mt-2 mb-3"><span class="fa fa-clock-o ion-clock float-right"></span> Produk</h5>
											<div class="table-responsive">
												<table class="table table-hover table-striped">
													<tbody>
														<?php
														foreach ($detail as $key => $value) {
														?>
															<tr>
																<td>
																	<strong><?= $value->nama_produk ?></strong> Rp. <?= number_format($value->harga - ($value->diskon / 100 * $value->harga)) ?> x <?= $value->qty ?> <strong>`Rp. <?= number_format(($value->harga - ($value->diskon / 100 * $value->harga)) * $value->qty) ?>`</strong>
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
							<?php
								}
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

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