<div class="main-content">
	<div class="container-fluid">
		<div class="page-header">
			<div class="row align-items-end">
				<div class="col-lg-8">
					<div class="page-header-title">
						<i class="ik ik-user bg-warning"></i>
						<div class="d-inline">
							<h5>Level Member Pelanggan</h5>
							<span>Cetak Hasil Retensi Level Member Pelanggan</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<nav class="breadcrumb-container" aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="../index.html"><i class="ik ik-home"></i></a>
							</li>
							<li class="breadcrumb-item">
								<a href="#">Tables</a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">Level Member</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h3>Periode Retensi Level Member Pelanggan</h3>

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
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h3>Informasi Retensi Level Member Pelanggan</h3>

					</div>
					<div class="card-body">
						<table id="data_table" class="table">
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
</div>