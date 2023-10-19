<div class="main-content">
	<div class="container-fluid">
		<div class="page-header">
			<div class="row align-items-end">
				<div class="col-lg-8">
					<div class="page-header-title">
						<i class="ik ik-bar-chart-line bg-green"></i>
						<div class="d-inline">
							<h5>Data Pelanggan</h5>
							<span>Status Level Member Pelanggan</span>
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
							<li class="breadcrumb-item active" aria-current="page">User</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<a href="<?= base_url('Admin/cAnalisisPelanggan/view_analisis') ?>" class="btn btn-success mb-3"><i class="ik ik-bar-chart-line"></i>View Analisis</a>
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
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h3>Informasi Pelanggan</h3>

					</div>
					<div class="card-body">
						<table id="data_table" class="table">
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
</div>
