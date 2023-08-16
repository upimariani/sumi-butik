<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>



	<!-- Header Section Begin -->
	<header class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-3 col-lg-2">
					<div class="header__logo">
						<a href="./index.html"><img src="img/logo.png" alt=""></a>
					</div>
				</div>
				<div class="col-xl-6 col-lg-7">
					<nav class="header__menu">
						<ul>
							<li class="active"><a href="<?= base_url('Pelanggan/cHome') ?>">Home</a></li>
							<li><a href="<?= base_url('Pelanggan/cPesananSaya') ?>">Pesanan Saya</a></li>
							<li><a href="<?= base_url('Pelanggan/cProfil') ?>">Profil</a></li>
							<li><a href="<?= base_url('Pelanggan/cChatting') ?>">Chatting</a></li>

						</ul>
					</nav>
				</div>
				<div class="col-lg-3">
					<div class="header__right">
						<div class="header__right__auth">
							<a href="<?= base_url('Pelanggan/cLogin') ?>">Login</a>
						</div>
						<ul class="header__right__widget">
							<li><a href="<?= base_url('Pelanggan/cCart') ?>"><span class="icon_bag_alt"></span>
									<div class="tip">2</div>
								</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="canvas__open">
				<i class="fa fa-bars"></i>
			</div>
		</div>
	</header>
	<!-- Header Section End -->