<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>



	<!-- Header Section Begin -->
	<header class="header">
		<div class="container-fluid">
			<div class="row">

				<div class="col-lg-10">
					<nav class="header__menu">
						<ul>
							<li class="<?php if ($this->uri->segment(1) == 'Pelanggan' && $this->uri->segment(2) == 'cHome') {
											echo 'active';
										}  ?>"><a href="<?= base_url('Pelanggan/cHome') ?>">Home</a></li>
							<?php
							if ($this->session->userdata('id_pelanggan') != '') {
							?>
								<li class="<?php if ($this->uri->segment(1) == 'Pelanggan' && $this->uri->segment(2) == 'cPesananSaya') {
												echo 'active';
											}  ?>">
									<a href="<?= base_url('Pelanggan/cPesananSaya') ?>">Pesanan Saya</a>
								</li>
								<li class="<?php if ($this->uri->segment(1) == 'Pelanggan' && $this->uri->segment(2) == 'cProfil') {
												echo 'active';
											}  ?>">
									<a href="<?= base_url('Pelanggan/cProfil') ?>">Profil</a>
								</li>
								<li class="<?php if ($this->uri->segment(1) == 'Pelanggan' && $this->uri->segment(2) == 'cChatting') {
												echo 'active';
											}  ?>">
									<a href="<?= base_url('Pelanggan/cChatting') ?>">Chatting</a>
								</li>
								<li> <strong>
										<?= $this->session->userdata('nama') ?></strong>, <small>Level member anda adalah <strong><?php if ($this->session->userdata('level') == '0') {
																																		echo 'Pelanggan';
																																	} else {
																																		echo 'Pelanggan Istimewa';
																																	}  ?></strong></small>
								</li>
							<?php
							}
							?>


						</ul>
					</nav>
				</div>
				<div class="col-lg-2">
					<div class="header__right">
						<div class="header__right__auth">
							<?php
							if ($this->session->userdata('id_pelanggan') != '') {
							?>
								<a href="<?= base_url('Pelanggan/cLogin/logout') ?>">
									Logout
								</a>
							<?php
							} else {
							?>
								<a href="<?= base_url('Pelanggan/cLogin') ?>">
									Login
								</a>
							<?php
							}
							?>
						</div>
						<?php
						if ($this->session->userdata('id_pelanggan') != '') {
						?>
							<ul class="header__right__widget">
								<li><a href="<?= base_url('Pelanggan/cCart') ?>"><span class="icon_bag_alt"></span>
										<?php
										$qty = 0;
										foreach ($this->cart->contents() as $key => $value) {
											$qty += $value['qty'];
										}
										?>
										<div class="tip"><?= $qty ?></div>
									</a></li>
							</ul>
						<?php
						}
						?>
					</div>
				</div>
			</div>
			<div class="canvas__open">
				<i class="fa fa-bars"></i>
			</div>
		</div>
	</header>
	<!-- Header Section End -->