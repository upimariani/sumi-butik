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
						<div class="col-lg-12">


							<?php
							$date = date('Y-m-d');
							// $data_dumy = $this->mAnalisisDumy->data_dumy();
							$data = $this->mAnalisis->variabel($date);

							$recency = array();
							$frequency = array();
							$monetary = array();

							$norm_r = array();
							$norm_f = array();
							$norm_m = array();

							// echo '<table border="1">';
							foreach ($data['all'] as $key => $value) {
								$akhir = date_create($value->akhir_transaksi);
								$awal = date_create($value->awal_transaksi);
								$day = date_diff($awal, $akhir);

								$length[] = $day->days;
								$recency[] = $value->recency;
								$frequency[] = $value->frequency;
								$monetary[] = $value->monetary;
								$pelanggan[] = $value->id_pelanggan;
								$nama[] = $value->nm_pel;
								$klaster[] = $value->level_member;


								// echo '<tr>';
								// echo '<td>' . $value->id_pelanggan . '</td>';
								// echo '<td>' . $value->recency . '</td>';
								// echo '<td>' . $value->frequency . '</td>';
								// echo '<td>' . $value->monetary . '</td>';
								// echo '</tr>';
							}
							// echo '</table>';


							$min_l = min($length);
							$max_l = max($length);

							//p1 normalisasi length
							for ($a = 0; $a < sizeof($length); $a++) {
								$norm_l[] = round(($length[$a] - $min_l) / ($max_l - $min_l), 2);
							}


							$min_r = min($recency);
							$max_r = max($recency);
							//p1 normalisasi recency
							for ($a = 0; $a < sizeof($recency); $a++) {
								$norm_r[] = round(($recency[$a] - $min_r) / ($max_r - $min_r), 2);
							}


							//p1 normalisasi frequency
							$min_f = min($frequency);
							$max_f = max($frequency);

							for ($b = 0; $b < sizeof($frequency); $b++) {
								$norm_f[] = round(($frequency[$b] - $min_f) / ($max_f - $min_f), 2);
							}

							//p1 normalisasi monetary
							$min_m = min($monetary);
							$max_m = max($monetary);
							for ($c = 0; $c < sizeof($monetary); $c++) {
								$norm_m[] = round(($monetary[$c] - $min_m) / ($max_m - $min_m), 2);
							}
							//menentukan nilai centroid 1
							$c1_l = $norm_l[0];
							$c1_r = $norm_r[0];
							$c1_f = $norm_f[0];
							$c1_m = $norm_m[0];

							//menentukan nilai centroid 2
							$c2_l = $norm_l[1];
							$c2_r = $norm_r[1];
							$c2_f = $norm_f[1];
							$c2_m = $norm_m[1];




							// menentukan keseluruhan c1 untuk semua pelanggan
							$klaster1 = array();
							$centroid1 = array();
							$centroid2 = array();
							for ($d = 0; $d < sizeof($norm_r); $d++) {
								$centroid1[] = sqrt((pow(($norm_r[$d] - $c1_r), 2)) + (pow(($norm_f[$d] - $c1_f), 2)) + (pow(($norm_m[$d] - $c1_m), 2)) + (pow(($norm_l[$d] - $c1_l), 2)));
								$centroid2[] = sqrt((pow(($norm_r[$d] - $c2_r), 2)) + (pow(($norm_f[$d] - $c2_f), 2)) + (pow(($norm_m[$d] - $c2_m), 2)) + (pow(($norm_l[$d] - $c2_l), 2)));


								$data_min = min($centroid1[$d], $centroid2[$d]);
								$min[] = min($centroid1[$d], $centroid2[$d]);
								if ($data_min == $centroid1[$d]) {
									$klaster1[] = '1';
									// echo '<td>Klaster 1</td>';
								} else if ($data_min == $centroid2[$d]) {
									$klaster1[] = '2';
									// echo '<td>Klaster 2</td>';
								}
								// echo '</tr>';
							}
							// echo '</table>';

							// ------------------------------------melakukan iterasi kedua

							for ($e = 0; $e < sizeof($norm_r); $e++) {
								$iterasi_pertama[] = ([$norm_r[$e], $norm_f[$e], $norm_m[$e], $centroid1[$e], $centroid2[$e], $klaster1[$e], $norm_l[$e]]);
							}

							$c1_l2 = 0;
							$c1_r2 = 0;
							$c1_f2 = 0;
							$c1_m2 = 0;
							$jml_c1 = 0;

							$c2_l2 = 0;
							$c2_r2 = 0;
							$c2_f2 = 0;
							$c2_m2 = 0;
							$jml_c2 = 0;

							$klaster2 = array();
							for ($iterasi = 0; $iterasi < sizeof($iterasi_pertama); $iterasi++) {
								if ($iterasi_pertama[$iterasi][5] == '1') {
									// echo $iterasi_pertama[$iterasi][0] . ' | ' . $iterasi_pertama[$iterasi][5];
									// echo '<br>';
									$jml_c1 += 1;
									$c1_r2 += $iterasi_pertama[$iterasi][0];
									$c1_f2 += $iterasi_pertama[$iterasi][1];
									$c1_m2 += $iterasi_pertama[$iterasi][2];
									$c1_l2 += $iterasi_pertama[$iterasi][6];
								} else if ($iterasi_pertama[$iterasi][5] == '2') {
									$jml_c2 += 1;
									$c2_r2 += $iterasi_pertama[$iterasi][0];
									$c2_f2 += $iterasi_pertama[$iterasi][1];
									$c2_m2 += $iterasi_pertama[$iterasi][2];
									$c2_l2 += $iterasi_pertama[$iterasi][6];
								}
							}
							$k_c1_l = $c1_l2 / $jml_c1;
							$k_c1_r = $c1_r2 / $jml_c1;
							$k_c1_f = $c1_f2 / $jml_c1;
							$k_c1_m = $c1_f2 / $jml_c1;

							$k_c2_l = $c2_l2 / $jml_c2;
							$k_c2_r = $c2_r2 / $jml_c2;
							$k_c2_f = $c2_f2 / $jml_c2;
							$k_c2_m = $c2_f2 / $jml_c2;

							for ($f = 0; $f < sizeof($iterasi_pertama); $f++) {
								$centroid12[] = sqrt((pow(($iterasi_pertama[$f][0] - $k_c1_r), 2)) + (pow(($iterasi_pertama[$f][1] - $k_c1_f), 2)) + (pow(($iterasi_pertama[$f][2] - $k_c1_m), 2)) + (pow(($iterasi_pertama[$f][6] - $k_c1_l), 2)));
								$centroid22[] = sqrt((pow(($iterasi_pertama[$f][0] - $k_c2_r), 2)) + (pow(($iterasi_pertama[$f][1] - $k_c2_f), 2)) + (pow(($iterasi_pertama[$f][2] - $k_c2_m), 2)) + (pow(($iterasi_pertama[$f][6] - $k_c2_l), 2)));

								// echo $iterasi_pertama[$f][0] . ' | ' . $iterasi_pertama[$f][1] . ' | ' . $iterasi_pertama[$f][2] . ' | ' . $centroid12[$f] . ' | ' . $centroid22[$f];
								$data_min2 = min($centroid12[$f], $centroid22[$f]);
								if ($data_min2 == $centroid12[$f]) {
									$klaster2[] = '1';
									// echo 'Klaster 1';
								} else if ($data_min2 == $centroid22[$f]) {
									$klaster2[] = '2';
									// echo 'Klaster 2';
								}
								// echo '<br>';
							}

							//iterasi ketiga ---------------------------
							for ($f = 0; $f < sizeof($norm_r); $f++) {
								$iterasi_kedua[] = ([$norm_r[$f], $norm_f[$f], $norm_m[$f], $centroid12[$f], $centroid22[$f], $klaster2[$f], $norm_l[$f]]);
							}

							$c1_l3 = 0;
							$c1_r3 = 0;
							$c1_f3 = 0;
							$c1_m3 = 0;
							$jml_c3 = 0;

							$c2_l3 = 0;
							$c2_r3 = 0;
							$c2_f3 = 0;
							$c2_m3 = 0;
							$jml_c4 = 0;

							$klaster3 = array();
							for ($iterasi3 = 0; $iterasi3 < sizeof($iterasi_kedua); $iterasi3++) {
								if ($iterasi_kedua[$iterasi3][5] == '1') {
									// echo $iterasi_kedua[$iterasi][0] . ' | ' . $iterasi_kedua[$iterasi][5];
									// echo '<br>';S
									$jml_c3 += 1;
									$c1_r3 += $iterasi_kedua[$iterasi3][0];
									$c1_f3 += $iterasi_kedua[$iterasi3][1];
									$c1_m3 += $iterasi_kedua[$iterasi3][2];
									$c1_l3 += $iterasi_kedua[$iterasi3][6];
								} else if ($iterasi_kedua[$iterasi3][5] == '2') {
									$jml_c4 += 1;
									$c2_r3 += $iterasi_kedua[$iterasi3][0];
									$c2_f3 += $iterasi_kedua[$iterasi3][1];
									$c2_m3 += $iterasi_kedua[$iterasi3][2];
									$c1_l3 += $iterasi_kedua[$iterasi3][6];
								}
							}
							$k_c12_l = $c1_l3 / $jml_c3;
							$k_c12_r = $c1_r3 / $jml_c3;
							$k_c12_f = $c1_f3 / $jml_c3;
							$k_c12_m = $c1_f3 / $jml_c3;

							$k_c22_l = $c2_l3 / $jml_c4;
							$k_c22_r = $c2_r3 / $jml_c4;
							$k_c22_f = $c2_f3 / $jml_c4;
							$k_c22_m = $c2_f3 / $jml_c4;

							for ($f = 0; $f < sizeof($iterasi_kedua); $f++) {
								$centroid13[] = sqrt((pow(($iterasi_kedua[$f][0] - $k_c12_r), 2)) + (pow(($iterasi_kedua[$f][1] - $k_c12_f), 2)) + (pow(($iterasi_kedua[$f][2] - $k_c12_m), 2)) + (pow(($iterasi_kedua[$f][6] - $k_c12_l), 2)));
								$centroid23[] = sqrt((pow(($iterasi_kedua[$f][0] - $k_c22_r), 2)) + (pow(($iterasi_kedua[$f][1] - $k_c22_f), 2)) + (pow(($iterasi_kedua[$f][2] - $k_c22_m), 2)) + (pow(($iterasi_kedua[$f][6] - $k_c22_l), 2)));

								// echo $iterasi_kedua[$f][0] . ' | ' . $iterasi_kedua[$f][1] . ' | ' . $iterasi_kedua[$f][2] . ' | ' . $centroid12[$f] . ' | ' . $centroid22[$f];
								$data_min3 = min($centroid13[$f], $centroid23[$f]);
								if ($data_min3 == $centroid13[$f]) {
									$klaster3[] = '1';
									// echo 'Klaster 1';
								} else if ($data_min3 == $centroid23[$f]) {
									$klaster3[] = '2';
									// echo 'Klaster 2';
								}
								// echo '<br>';
							}


							//iterasi keempat ---------------------------
							$total_iterasi = 4;
							for ($f = 0; $f < sizeof($norm_r); $f++) {
								$iterasi_ketiga[] = ([$norm_r[$f], $norm_f[$f], $norm_m[$f], $centroid13[$f], $centroid23[$f], $klaster3[$f], $norm_l[$f]]);
							}

							$c1_l4 = 0;
							$c1_r4 = 0;
							$c1_f4 = 0;
							$c1_m4 = 0;
							$jml_c5 = 0;

							$c2_l4 = 0;
							$c2_r4 = 0;
							$c2_f4 = 0;
							$c2_m4 = 0;
							$jml_c6 = 0;

							$klaster4 = array();
							for ($iterasi4 = 0; $iterasi4 < sizeof($iterasi_ketiga); $iterasi4++) {
								if ($iterasi_ketiga[$iterasi4][5] == '1') {
									// echo $iterasi_kedua[$iterasi][0] . ' | ' . $iterasi_kedua[$iterasi][5];
									// echo '<br>';S
									$jml_c5 += 1;
									$c1_r4 += $iterasi_ketiga[$iterasi4][0];
									$c1_f4 += $iterasi_ketiga[$iterasi4][1];
									$c1_m4 += $iterasi_ketiga[$iterasi4][2];
									$c1_l4 += $iterasi_ketiga[$iterasi4][6];
								} else if ($iterasi_ketiga[$iterasi4][5] == '2') {
									$jml_c6 += 1;
									$c2_r4 += $iterasi_ketiga[$iterasi4][0];
									$c2_f4 += $iterasi_ketiga[$iterasi4][1];
									$c2_m4 += $iterasi_ketiga[$iterasi4][2];
									$c2_l4 += $iterasi_ketiga[$iterasi4][6];
								}
							}
							$k_c13_l = $c1_l4 / $jml_c5;
							$k_c13_r = $c1_r4 / $jml_c5;
							$k_c13_f = $c1_f4 / $jml_c5;
							$k_c13_m = $c1_f4 / $jml_c5;

							$k_c23_l = $c2_r4 / $jml_c6;
							$k_c23_r = $c2_r4 / $jml_c6;
							$k_c23_f = $c2_f4 / $jml_c6;
							$k_c23_m = $c2_f4 / $jml_c6;

							for ($f = 0; $f < sizeof($iterasi_ketiga); $f++) {
								$centroid14[] = sqrt((pow(($iterasi_ketiga[$f][0] - $k_c13_r), 2)) + (pow(($iterasi_ketiga[$f][1] - $k_c13_f), 2)) + (pow(($iterasi_ketiga[$f][2] - $k_c13_m), 2)) + (pow(($iterasi_ketiga[$f][6] - $k_c13_l), 2)));
								$centroid24[] = sqrt((pow(($iterasi_ketiga[$f][0] - $k_c23_r), 2)) + (pow(($iterasi_ketiga[$f][1] - $k_c23_f), 2)) + (pow(($iterasi_ketiga[$f][2] - $k_c23_m), 2)) + (pow(($iterasi_ketiga[$f][6] - $k_c23_l), 2)));

								// echo $iterasi_kedua[$f][0] . ' | ' . $iterasi_kedua[$f][1] . ' | ' . $iterasi_kedua[$f][2] . ' | ' . $centroid12[$f] . ' | ' . $centroid22[$f];
								$data_min3 = min($centroid14[$f], $centroid24[$f]);
								if ($data_min3 == $centroid14[$f]) {
									$klaster4[] = '0';
									// echo 'Klaster 1';
								} else if ($data_min3 == $centroid24[$f]) {
									$klaster4[] = '1';
									// echo 'Klaster 2';
								}
								// echo '<br>';
							}
							?>
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Informasi Centroid</h5>

									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th>Nama Proses Iterasi</th>
													<th>Centroid</th>
													<th>Lenght</th>
													<th class="d-none d-md-table-cell">Recency</th>
													<th class="d-none d-md-table-cell">Frequency</th>
													<th class="d-none d-md-table-cell">Monetary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Iterasi Pertama</td>
													<td>Centroid 1 <br> Centroid 2</td>
													<td><?= round($c1_l, 3) ?> <br> <?= round($c2_l, 3) ?><br>

													</td>
													<td><?= round($c1_r, 3) ?> <br> <?= round($c2_r, 3) ?><br>

													</td>
													<td><?= round($c1_f, 3) ?> <br> <?= round($c2_f, 3) ?><br>

													</td>
													<td><?= round($c1_m, 3) ?> <br> <?= round($c2_m, 3) ?><br>

													</td>
												</tr>
												<tr>
													<td>Iterasi Kedua</td>
													<td>Centroid 1 <br> Centroid 2</td>
													<td><?= round($k_c1_l, 3) ?> <br> <?= round($k_c2_l, 3) ?></td>
													<td><?= round($k_c1_r, 3) ?> <br> <?= round($k_c2_r, 3) ?></td>
													<td><?= round($k_c1_f, 3) ?> <br> <?= round($k_c2_f, 3) ?></td>
													<td><?= round($k_c1_m, 3) ?> <br> <?= round($k_c2_m, 3) ?></td>
												</tr>
												<tr>
													<td>Iterasi Ketiga</td>
													<td>Centroid 1 <br> Centroid 2</td>
													<td><?= round($k_c12_l, 3) ?> <br> <?= round($k_c22_l, 3) ?></td>
													<td><?= round($k_c12_r, 3) ?> <br> <?= round($k_c22_r, 3) ?></td>
													<td><?= round($k_c12_f, 3) ?> <br> <?= round($k_c22_f, 3) ?></td>
													<td><?= round($k_c12_m, 3) ?> <br> <?= round($k_c22_m, 3) ?></td>
												</tr>
												<tr>
													<td>Iterasi Keempat</td>
													<td>Centroid 1 <br> Centroid 2</td>
													<td><?= round($k_c13_l, 3) ?> <br> <?= round($k_c23_l, 3) ?></td>
													<td><?= round($k_c13_r, 3) ?> <br> <?= round($k_c23_r, 3) ?></td>
													<td><?= round($k_c13_f, 3) ?> <br> <?= round($k_c23_f, 3) ?></td>
													<td><?= round($k_c13_m, 3) ?> <br> <?= round($k_c23_m, 3) ?></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Informasi Perhitungan Retensi Pelanggan</h5>

									<table id="data_table" class="table">
										<thead>
											<tr>
												<th>Nama Pelanggan</th>
												<th>Length</th>
												<th class="d-none d-md-table-cell">Recency</th>
												<th class="d-none d-md-table-cell">Frequency</th>
												<th class="d-none d-md-table-cell">Monetary</th>
												<th class="d-none d-md-table-cell">Centroid Pertama</th>
												<th class="d-none d-md-table-cell">Jarak Minimum</th>
												<th class="d-none d-md-table-cell">Clustering Terakhir</th>
												<th class="d-none d-md-table-cell">Total Iterasi</th>
											</tr>
										</thead>
										<tbody>
											<?php

											for ($k = 0; $k < sizeof($klaster2); $k++) {
												// echo $klaster2[$k] . '|' . $klaster1[$k] . '|' . $klaster3[$k] . '|' . $klaster4[$k] . 'Id Pelanggan' . $pelanggan[$k];
												// echo '<br>';
												// $data = array(
												// 	'level_member' => $klaster4[$k]
												// );
												// $this->db->where('id_pelanggan', $pelanggan[$k]);
												// $this->db->update('pelanggan', $data);

												// $insert = array(
												// 	'id_pelanggan' => $pelanggan[$k],
												// 	'periode' => '3',
												// 	'tahun' => '2023',
												// 	'cluster' => $klaster4[$k]
												// );
												// $this->db->insert('analisis', $insert);
												// $pelanggan = $this->db->query("SELECT * FROM `pelanggan` WHERE id_pelanggan='" . $pelanggan[$k] . "'")->row();
											?>
												<tr>
													<td><?= $nama[$k] ?></td>
													<td><?= $length[$k] ?> <br> Norm. <?= $norm_l[$k] ?>

													</td>
													<td><?= $recency[$k] ?> <br> Norm. <?= $norm_r[$k] ?>

													</td>
													<td><?= $frequency[$k] ?> <br> Norm. <?= $norm_f[$k] ?>

													</td>
													<td>Rp. <?= number_format($monetary[$k])  ?> <br> Norm. <?= $norm_m[$k] ?>

													</td>
													<td>Centroid 1 : <?= round($centroid1[$k], 3) ?> <br>
														Centroid 2 : <?= round($centroid2[$k], 3) ?></td>
													<td><?= round($min[$k], 3) ?></td>
													<td><?php if ($klaster[$k] == '0') {
															echo 'Pelanggan';
														} else {
															echo 'Pelanggan Istimewa';
														} ?></td>
													<td><?= $total_iterasi ?></td>
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
		</div>


	</div>
</div>