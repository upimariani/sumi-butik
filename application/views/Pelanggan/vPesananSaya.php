<!-- Contact Section Begin -->
<section class="contact spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="contact__content">

					<div class="contact__form">
						<h5>PESANAN SAYA</h5>
						<table class="table">
							<tr>
								<th>Tanggal Transaksi</th>
								<th>Total Transaksi</th>
								<th>Ongkos Kirim</th>
								<th>Total Pembayaran</th>
								<th class="column-3">Pengiriman</th>
								<th>Status Order</th>

								<th></th>
							</tr>
							<?php
							foreach ($transaksi['po'] as $key => $value) {
							?>
								<tr>

									<td><?= $value->tgl_po ?></td>
									<td>Rp. <?= number_format($value->total_bayar - $value->ongkir)  ?></td>
									<td>Rp. <?= number_format($value->ongkir)  ?> </td>
									<td>Rp. <?= number_format($value->total_bayar)  ?> </td>
									<td class="column-3"><small><?= $value->alamat_detail ?> Kab/Kota. <?= $value->kota ?><br>Expedisi: <?= $value->expedisi ?>
											<br>Estimasi: <?= $value->estimasi ?></small></td>
									<td><?php
										if ($value->status_order  == '0') {
											echo '<span class="badge badge-danger">Belum Bayar</span>';
										} else if ($value->status_order  == '1') {
											echo '<span class="badge badge-warning">Menunggu Konfirmasi</span>';
										} else if ($value->status_order  == '2') {
											echo '<span class="badge badge-info">Pesanan Diproses</span>';
										} else if ($value->status_order  == '3') {
											echo '<span class="badge badge-primary">Pesanan Dikirim</span>';
										} else if ($value->status_order  == '4') {
											echo '<span class="badge badge-success">Selesai</span>';
										}
										?>
									</td>

									<td><a href="<?= base_url('Pelanggan/cPesananSaya/detail_pesanan/' . $value->id_po) ?>" class="btn btn-warning">
											Detail Transaksi
										</a></td>
								</tr>
							<?php
							}
							?>
						</table>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- Contact Section End -->