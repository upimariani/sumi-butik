<div class="clearfix"></div>

<div class="content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-header">
						Cetak Laporan Transaksi
					</div>
					<div class="card-body">
						<form action="<?= base_url('Pemilik/cTransaksi/cetak') ?>" method="POST">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="input-1">Bulan</label>
										<select class="form-control" name="bulan" required>
											<option value="">---Pilih Bulan---</option>
											<option value="1">Januari</option>
											<option value="2">Februari</option>
											<option value="3">Maret</option>
											<option value="4">April</option>
											<option value="5">Mei</option>
											<option value="6">Juni</option>
											<option value="7">Juli</option>
											<option value="8">Agustus</option>
											<option value="9">September</option>
											<option value="10">Oktober</option>
											<option value="11">November</option>
											<option value="12">Desember</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="input-2">Tahun</label>
										<select class="form-control" name="tahun" required>
											<option value="">---Pilih Tahun---</option>
											<option value="2022">2022</option>
											<option value="2023">2023</option>
										</select>
									</div>
								</div>
							</div>


							<button type="submit" class="btn btn-success">Cetak Laporan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-lg-12">

				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Informasi Transaksi</h5>
						<div class="table-responsive">
							<table id="myTable" class="table">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Nama Pelanggan</th>
										<th scope="col">Tanggal Transaksi</th>
										<th scope="col">Total Bayar</th>
										<th scope="col">Alamat Pengiriman</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($transaksi as $key => $value) {
									?>
										<tr>
											<th scope="row"><?= $no++ ?></th>
											<td><?= $value->nm_pel ?></td>
											<td><?= $value->tgl_po ?></td>
											<td>Rp. <?= number_format($value->total_bayar)  ?></td>
											<td><?= $value->alamat_detail ?> Kota. <?= $value->kota ?> Prov. <?= $value->prov ?></td>

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