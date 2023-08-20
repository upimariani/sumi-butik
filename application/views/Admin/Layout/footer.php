	<!--Start footer-->
	<footer class="footer">
		<div class="container">
			<div class="text-center">
				Copyright © 2018 Dashtreme Admin
			</div>
		</div>
	</footer>
	<!--End footer-->

	<!--start color switcher-->
	<div class="right-sidebar">
		<div class="switcher-icon">
			<i class="zmdi zmdi-settings zmdi-hc-spin"></i>
		</div>
		<div class="right-sidebar-content">

			<p class="mb-0">Gaussion Texture</p>
			<hr>

			<ul class="switcher">
				<li id="theme2"></li>
				<li id="theme1"></li>
				<li id="theme3"></li>
				<li id="theme4"></li>
				<li id="theme5"></li>
				<li id="theme6"></li>
			</ul>

			<p class="mb-0">Gradient Background</p>
			<hr>

			<ul class="switcher">
				<li id="theme7"></li>
				<li id="theme8"></li>
				<li id="theme9"></li>
				<li id="theme10"></li>
				<li id="theme11"></li>
				<li id="theme12"></li>
				<li id="theme13"></li>
				<li id="theme14"></li>
				<li id="theme15"></li>
			</ul>

		</div>
	</div>
	<!--end color switcher-->

	</div>
	<!--End wrapper-->

	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url('asset/dashtreme-master/') ?>assets/js/jquery.min.js"></script>
	<script src="<?= base_url('asset/dashtreme-master/') ?>assets/js/popper.min.js"></script>
	<script src="<?= base_url('asset/dashtreme-master/') ?>assets/js/bootstrap.min.js"></script>

	<!-- simplebar js -->
	<script src="<?= base_url('asset/dashtreme-master/') ?>assets/plugins/simplebar/js/simplebar.js"></script>
	<!-- sidebar-menu js -->
	<script src="<?= base_url('asset/dashtreme-master/') ?>assets/js/sidebar-menu.js"></script>
	<!-- loader scripts -->
	<script src="<?= base_url('asset/dashtreme-master/') ?>assets/js/jquery.loading-indicator.js"></script>
	<!-- Custom scripts -->
	<script src="<?= base_url('asset/dashtreme-master/') ?>assets/js/app-script.js"></script>
	<!-- Chart js -->

	<script src="<?= base_url('asset/dashtreme-master/') ?>assets/plugins/Chart.js/Chart.min.js"></script>

	<!-- Index js -->
	<script src="<?= base_url('asset/dashtreme-master/') ?>assets/js/index.js"></script>
	<script src="<?= base_url('asset/chart/js_chart.js') ?>"></script>

	<script>
		<?php
		$data_transaksi = $this->db->query("SELECT SUM(total_bayar) as total, tgl_po FROM `po` GROUP BY tgl_po")->result();
		foreach ($data_transaksi as $key => $value) {
			$total[] = $value->total;
			$tgl[] = $value->tgl_po;
		}

		?>
		var ctx = document.getElementById('transaksi');
		var grafik = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?= json_encode($tgl) ?>,
				datasets: [{
					label: 'Grafik Penjualan Per Hari',
					data: <?= json_encode($total) ?>,
					backgroundColor: [
						'rgba(201, 76, 76, 0.3)',
						'rgba(201, 77, 77, 1)',
						'rgba(0, 140, 162, 1)',
						'rgba(158, 109, 8, 1)',
						'rgba(201, 76, 76, 0.8)',
						'rgba(0, 129, 212, 1)',
						'rgba(201, 77, 201, 1)',
						'rgba(255, 207, 207, 1)',
						'rgba(201, 77, 77, 1)',
						'rgba(128, 98, 98, 1)',
						'rgba(0, 0, 0, 1)',
						'rgba(128, 128, 128, 1)',
						'rgba(255, 99, 132, 0.80)',
						'rgba(54, 162, 235, 0.80)',
						'rgba(255, 206, 86, 0.80)',
						'rgba(75, 192, 192, 0.80)',
						'rgba(153, 102, 255, 0.80)',
						'rgba(255, 159, 64, 0.80)',
						'rgba(201, 76, 76, 0.3)',
						'rgba(201, 77, 77, 1)',
						'rgba(0, 140, 162, 1)',
						'rgba(158, 109, 8, 1)',
						'rgba(201, 76, 76, 0.8)',
						'rgba(0, 129, 212, 1)',
						'rgba(201, 77, 201, 1)',
						'rgba(255, 207, 207, 1)',
						'rgba(201, 77, 77, 1)',
						'rgba(128, 98, 98, 1)',
						'rgba(0, 0, 0, 1)',
						'rgba(128, 128, 128, 1)'
					],
					borderColor: [
						'rgba(201, 76, 76, 0.3)',
						'rgba(201, 77, 77, 1)',
						'rgba(0, 140, 162, 1)',
						'rgba(158, 109, 8, 1)',
						'rgba(201, 76, 76, 0.8)',
						'rgba(0, 129, 212, 1)',
						'rgba(201, 77, 201, 1)',
						'rgba(255, 207, 207, 1)',
						'rgba(201, 77, 77, 1)',
						'rgba(128, 98, 98, 1)',
						'rgba(0, 0, 0, 1)',
						'rgba(128, 128, 128, 1)',
						'rgba(255, 99, 132, 0.80)',
						'rgba(54, 162, 235, 0.80)',
						'rgba(255, 206, 86, 0.80)',
						'rgba(75, 192, 192, 0.80)',
						'rgba(153, 102, 255, 0.80)',
						'rgba(255, 159, 64, 0.80)',
						'rgba(201, 76, 76, 0.3)',
						'rgba(201, 77, 77, 1)',
						'rgba(0, 140, 162, 1)',
						'rgba(158, 109, 8, 1)',
						'rgba(201, 76, 76, 0.8)',
						'rgba(0, 129, 212, 1)',
						'rgba(201, 77, 201, 1)',
						'rgba(255, 207, 207, 1)',
						'rgba(201, 77, 77, 1)',
						'rgba(128, 98, 98, 1)',
						'rgba(0, 0, 0, 1)',
						'rgba(128, 128, 128, 1)'
					],
					fill: false,
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
	</script>
	<script>
		<?php
		$data_level = $this->db->query("SELECT COUNT(level_member) as level, level_member FROM `pelanggan` GROUP BY level_member")->result();
		foreach ($data_level as $key => $value) {
			if ($value->level_member == '0') {
				$level[] = 'Non Member';
			} else {
				$level[] = 'Member';
			}
			$jml[] = $value->level;
		}

		?>
		var ctx = document.getElementById('level');
		var grafik = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?= json_encode($level) ?>,
				datasets: [{
					label: 'Grafik Jumlah Level Member',
					data: <?= json_encode($jml) ?>,
					scaleFontColor: "#FFFFFF",
					backgroundColor: [


						'rgba(255, 207, 207, 1)',
						'rgba(201, 77, 77, 1)'
					],
					borderColor: [
						'rgba(255, 207, 207, 1)',
						'rgba(201, 77, 77, 1)'
					],
					fill: false,
					borderWidth: 1
				}]

			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
	</script>
	</body>

	</html>