<aside class="right-sidebar">
	<div class="sidebar-chat" data-plugin="chat-sidebar">
		<div class="sidebar-chat-info">
			<h6>Chat List</h6>

		</div>
		<?php
		$pesan = $this->mChatting->chatting();
		?>
		<div class="chat-list">
			<div class="list-group row">
				<?php
				foreach ($pesan as $key => $value) {
				?>
					<a href="<?= base_url('Admin/cChatting/view_chatting/' . $value->id_pelanggan) ?>" class="list-group-item">
						<figure class="user--online">
							<img src="<?= base_url('asset/themekit-master/') ?>img/users/1.jpg" class="rounded-circle" alt="">
						</figure><span><span class="name"><?= $value->nm_pel ?></span> <span class="username"><?= $value->time ?></span> </span>
					</a>


				<?php } ?>

			</div>
		</div>
	</div>
</aside>


<div class="card" hidden>
	<div class="card-header d-flex justify-content-between">
		<a href="javascript:void(0);"><i class="ik ik-message-square text-success"></i></a>
		<span class="user-name">John Doe</span>
		<button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
	</div>
	<div class="card-body">
		<div class="widget-chat-activity flex-1">
			<div class="messages">
				<div class="message media reply">
					<figure class="user--online">
						<a href="#">
							<img src="../img/users/3.jpg" class="rounded-circle" alt="">
						</a>
					</figure>
					<div class="message-body media-body">
						<p>Epic Cheeseburgers come in all kind of styles.</p>
					</div>
				</div>
				<div class="message media">
					<figure class="user--online">
						<a href="#">
							<img src="../img/users/1.jpg" class="rounded-circle" alt="">
						</a>
					</figure>
					<div class="message-body media-body">
						<p>Cheeseburgers make your knees weak.</p>
					</div>
				</div>
				<div class="message media reply">
					<figure class="user--offline">
						<a href="#">
							<img src="../img/users/5.jpg" class="rounded-circle" alt="">
						</a>
					</figure>
					<div class="message-body media-body">
						<p>Cheeseburgers will never let you down.</p>
						<p>They'll also never run around or desert you.</p>
					</div>
				</div>
				<div class="message media">
					<figure class="user--online">
						<a href="#">
							<img src="../img/users/1.jpg" class="rounded-circle" alt="">
						</a>
					</figure>
					<div class="message-body media-body">
						<p>A great cheeseburger is a gastronomical event.</p>
					</div>
				</div>
				<div class="message media reply">
					<figure class="user--busy">
						<a href="#">
							<img src="../img/users/5.jpg" class="rounded-circle" alt="">
						</a>
					</figure>
					<div class="message-body media-body">
						<p>There's a cheesy incarnation waiting for you no matter what you palete preferences are.</p>
					</div>
				</div>
				<div class="message media">
					<figure class="user--online">
						<a href="#">
							<img src="../img/users/1.jpg" class="rounded-circle" alt="">
						</a>
					</figure>
					<div class="message-body media-body">
						<p>If you are a vegan, we are sorry for you loss.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<form action="javascript:void(0)" class="card-footer" method="post">
		<div class="d-flex justify-content-end">
			<textarea class="border-0 flex-1" rows="1" placeholder="Type your message here"></textarea>
			<button class="btn btn-icon" type="submit"><i class="ik ik-arrow-right text-success"></i></button>
		</div>
	</form>
</div>

<footer class="footer">
	<div class="w-100 clearfix">
		<span class="text-center text-sm-left d-md-inline-block">TOKO SUMI BUTIK - KUNINGAN</span>
	</div>
</footer>
</div>
</div>




<div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ik ik-x-circle"></i></button>
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="quick-search">
				<div class="container">
					<div class="row">
						<div class="col-md-4 ml-auto mr-auto">
							<div class="input-wrap">
								<input type="text" id="quick-search" class="form-control" placeholder="Search..." />
								<i class="ik ik-search"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-body d-flex align-items-center">
				<div class="container">
					<div class="apps-wrap">
						<div class="app-item">
							<a href="#"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
						</div>
						<div class="app-item">
							<a href="#"><i class="ik ik-mail"></i><span>Message</span></a>
						</div>
						<div class="app-item">
							<a href="#"><i class="ik ik-users"></i><span>Accounts</span></a>
						</div>
						<div class="app-item">
							<a href="#"><i class="ik ik-shopping-cart"></i><span>Sales</span></a>
						</div>
						<div class="app-item">
							<a href="#"><i class="ik ik-briefcase"></i><span>Purchase</span></a>
						</div>
						<div class="app-item">
							<a href="#"><i class="ik ik-server"></i><span>Menus</span></a>
						</div>
						<div class="app-item">
							<a href="#"><i class="ik ik-clipboard"></i><span>Pages</span></a>
						</div>
						<div class="app-item">
							<a href="#"><i class="ik ik-message-square"></i><span>Chats</span></a>
						</div>
						<div class="app-item">
							<a href="#"><i class="ik ik-map-pin"></i><span>Contacts</span></a>
						</div>
						<div class="app-item">
							<a href="#"><i class="ik ik-box"></i><span>Blocks</span></a>
						</div>
						<div class="app-item">
							<a href="#"><i class="ik ik-calendar"></i><span>Events</span></a>
						</div>
						<div class="app-item">
							<a href="#"><i class="ik ik-bell"></i><span>Notifications</span></a>
						</div>
						<div class="app-item">
							<a href="#"><i class="ik ik-pie-chart"></i><span>Reports</span></a>
						</div>
						<div class="app-item">
							<a href="#"><i class="ik ik-layers"></i><span>Tasks</span></a>
						</div>
						<div class="app-item">
							<a href="#"><i class="ik ik-edit"></i><span>Blogs</span></a>
						</div>
						<div class="app-item">
							<a href="#"><i class="ik ik-settings"></i><span>Settings</span></a>
						</div>
						<div class="app-item">
							<a href="#"><i class="ik ik-more-horizontal"></i><span>More</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
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
