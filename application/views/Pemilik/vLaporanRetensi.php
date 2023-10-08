<div class="clearfix"></div>

<div class="content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8">
				<div class="card">
					<div class="card-header">
						Cetak Laporan Retensi Pelanggan
					</div>
					<div class="card-body">
						<form action="<?= base_url('Pemilik/cAnalisisRetensi/cetak') ?>" method="POST">
							<div class="row">
								<div class="col-lg-8">
									<div class="form-group">
										<label for="input-2">Bulan Analisis</label>
										<select class="form-control" name="bulan" required>
											<option value="">---Pilih Bulan Analisis---</option>
											<option value="1">Periode I (Januari, Februari, Maret)</option>
											<option value="2">Periode II (April, Mei, Juni)</option>
											<option value="3">Periode III (Juli, Agustus, September)</option>
											<option value="4">Periode IV (Oktober, November, Desember)</option>
										</select>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label for="input-2">Tahun Analisis</label>
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
						<h5 class="card-title">Informasi Retensi Pelanggan</h5>
						<div class="table-responsive">
							<table id="myTable" class="table">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Nama Pelanggan</th>
										<th scope="col">Alamat</th>
										<th scope="col">No Telepon</th>
										<th scope="col">Status Member</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($pelanggan as $key => $value) {
									?>
										<tr>
											<th scope="row"><?= $no++ ?></th>
											<td><?= $value->nm_pel ?></td>
											<td><?= $value->alamat ?></td>
											<td><?= $value->no_tlpon ?></td>
											<td><?php if ($value->level_member == '0') {
												?>
													<span class="badge badge-warning">Pelanggan</span>
												<?php
												} else {
												?>
													<span class="badge badge-success">Pelanggan Istimewa</span>
												<?php
												} ?>
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