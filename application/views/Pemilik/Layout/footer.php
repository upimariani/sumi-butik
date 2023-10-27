<footer class="footer">
	<div class="w-100 clearfix">
		<span class="text-center text-sm-left d-md-inline-block">TOKO SUMI BUTIK - KUNINGAN</span>
	</div>
</footer>
</div>
</div>





<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
	window.jQuery || document.write('<script src="<?= base_url('asset/themekit-master/') ?>src/js/vendor/jquery-3.3.1.min.js"><\/script>')
</script>
<script src="<?= base_url('asset/themekit-master/') ?>node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="<?= base_url('asset/themekit-master/') ?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= base_url('asset/themekit-master/') ?>node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<script src="<?= base_url('asset/themekit-master/') ?>node_modules/screenfull/dist/screenfull.js"></script>
<script src="<?= base_url('asset/themekit-master/') ?>node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('asset/themekit-master/') ?>node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('asset/themekit-master/') ?>dist/js/theme.min.js"></script>
<script src="<?= base_url('asset/themekit-master/') ?>js/datatables.js"></script>
<script src="<?= base_url('asset/chart/js_chart.js') ?>"></script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
	(function(b, o, i, l, e, r) {
		b.GoogleAnalyticsObject = l;
		b[l] || (b[l] =
			function() {
				(b[l].q = b[l].q || []).push(arguments)
			});
		b[l].l = +new Date;
		e = o.createElement(i);
		r = o.getElementsByTagName(i)[0];
		e.src = 'https://www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e, r)
	}(window, document, 'script', 'ga'));
	ga('create', 'UA-XXXXX-X', 'auto');
	ga('send', 'pageview');
</script>
<script>
	<?php
	$data_transaksi = $this->db->query("SELECT SUM(total_bayar) as total, tgl_po FROM `po` WHERE MONTH(tgl_po) >= 7 GROUP BY tgl_po")->result();
	foreach ($data_transaksi as $key => $value) {
		$total[] = $value->total;
		$tgl[] = $value->tgl_po;
	}

	?>
	var ctx = document.getElementById('transaksi');
	var grafik = new Chart(ctx, {
		type: 'line',
		data: {
			labels: <?= json_encode($tgl) ?>,
			datasets: [{
				label: 'Grafik Penjualan Per Hari',
				data: <?= json_encode($total) ?>,
				backgroundColor: 'rgba(127, 111, 134, 0.5)',
				borderColor: 'rgba(127, 111, 134, 0.5)',
				color: '#666',
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
			$level[] = 'Pelanggan';
		} else {
			$level[] = 'Pelanggan Istimewa';
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


					'rgba(127, 111, 163, 0.7)',
					'rgba(127, 177, 163, 0.7)'
				],
				borderColor: [
					'rgba(127, 111, 163, 0.7)',
					'rgba(127, 177, 163, 0.7)'
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
</body>

</html>