<!-- Categories Section Begin -->
<section class="categories">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 p-0">
				<div class="categories__item categories__large__item set-bg" data-setbg="<?= base_url('asset/ashion-master/') ?>img/categories/sumi.png">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 p-0">
						<div class="categories__item set-bg" data-setbg="<?= base_url('asset/ashion-master/') ?>img/categories/12.jpg">
							<div class="categories__text">
								<h4 class="text-light">Pakaian Laki - Laki</h4>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 p-0">
						<div class="categories__item set-bg" data-setbg="<?= base_url('asset/ashion-master/') ?>img/categories/11.jpg">
							<div class="categories__text">
								<h4>Pakaian Wanita</h4>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 p-0">
						<div class="categories__item set-bg" data-setbg="<?= base_url('asset/ashion-master/') ?>img/categories/14.jpg">
							<div class="categories__text">
								<h4 class="text-light">Pakaian Muslim</h4>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 p-0">
						<div class="categories__item set-bg" data-setbg="<?= base_url('asset/ashion-master/') ?>img/categories/13.jpg">
							<div class="categories__text">
								<h4 class="text-light">Bayi</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Categories Section End -->

<!-- Product Section Begin -->
<section class="product spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<div class="section-title">
					<h4>New product</h4>
				</div>
			</div>
			<div class="col-lg-8 col-md-8">
				<ul class="filter__controls">
					<li class="active" data-filter="*">All</li>
					<?php
					foreach ($kategori as $key => $value) {
						$text = str_replace(' ', '', $value->nama_kategori);
					?>
						<li data-filter=".<?= $text ?>"><?= $value->nama_kategori ?></li>
					<?php
					}
					?>

				</ul>
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
		<div class="row property__gallery">
			<?php
			foreach ($produk as $key => $value) {
				$text = str_replace(' ', '', $value->nama_kategori);
			?><div class="col-lg-3 col-md-4 col-sm-6 mix <?= $text ?>">
					<div class="product__item">
						<div class="product__item__pic set-bg" data-setbg="<?= base_url('asset/foto-produk/' . $value->gambar) ?>">
							<?php if ($value->diskon != NULL) {
							?>
								<div class="label new"><?= $value->nama_diskon ?> <strong><?= $value->diskon ?>%</strong></div>
							<?php
							} ?>

							<ul class="product__hover">
								<li><a href="<?= base_url('asset/foto-produk/' . $value->gambar) ?>" class="image-popup"><span class="arrow_expand"></span></a></li>
								<li><a href="<?= base_url('Pelanggan/cCart/add_to_cart/' . $value->id_produk) ?>"><span class="icon_bag_alt"></span></a></li>
								<li><a href="<?= base_url('Pelanggan/cHome/detail_produk/' . $value->id_produk) ?>"><span class="icon_info"></span></a></li>
							</ul>
						</div>
						<div class="product__item__text">
							<h6><a href="#"><?= $value->nama_produk ?></a></h6>

							<div class="product__price">Rp. <?= number_format($value->harga - ($value->diskon / 100 * $value->harga), 0)  ?>
								<?php if ($value->diskon != NULL) {
								?>
									<del>Rp. <?= number_format($value->harga, 0)  ?></del>
								<?php
								} ?>

							</div>
						</div>
					</div>
				</div>

			<?php
			}
			?>

		</div>
	</div>
</section>
<!-- Product Section End -->

<!-- Banner Section Begin -->
<section class="banner set-bg" data-setbg="img/banner/banner-1.jpg">
	<div class="container">
		<div class="row">
			<div class="col-xl-7 col-lg-8 m-auto">
				<div class="banner__slider owl-carousel">
					<?php
					foreach ($kritik_saran as $key => $value) {
					?>
						<div class="banner__item">
							<div class="banner__text">
								<span>Fashion</span>
								<h1>Toko Sumi Butik</h1>
								<p><?= $value->nm_pel ?> | <?= $value->tgl_po ?></p>
								<a href="#"><?= $value->isi_kritik_saran ?></a>
							</div>
						</div>
					<?php
					}
					?>

				</div>
			</div>
		</div>
	</div>
</section>
<!-- Banner Section End -->



<!-- Services Section Begin -->
<section class="services spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="services__item">
					<i class="fa fa-car"></i>
					<h6>Free Shipping</h6>
					<p>For all oder over $99</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="services__item">
					<i class="fa fa-money"></i>
					<h6>Money Back Guarantee</h6>
					<p>If good have Problems</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="services__item">
					<i class="fa fa-support"></i>
					<h6>Online Support 24/7</h6>
					<p>Dedicated support</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="services__item">
					<i class="fa fa-headphones"></i>
					<h6>Payment Secure</h6>
					<p>100% secure payment</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Services Section End -->

<!-- Instagram Begin -->
<div class="instagram">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-2 col-md-4 col-sm-4 col-md-6 col-sm-6 p-0">
				<div class="instagram__item set-bg" data-setbg="<?= base_url('asset/ashion-master/') ?>img/instagram/insta-1.jpg">
					<div class="instagram__text">
						<i class="fa fa-instagram"></i>
						<a href="#">@ sumibutik</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 col-md-6 col-sm-6 p-0">
				<div class="instagram__item set-bg" data-setbg="<?= base_url('asset/ashion-master/') ?>img/instagram/insta-2.jpg">
					<div class="instagram__text">
						<i class="fa fa-instagram"></i>
						<a href="#">@ sumibutik</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 col-md-6 col-sm-6 p-0">
				<div class="instagram__item set-bg" data-setbg="<?= base_url('asset/ashion-master/') ?>img/instagram/insta-3.jpg">
					<div class="instagram__text">
						<i class="fa fa-instagram"></i>
						<a href="#">@ sumibutik</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 col-md-6 col-sm-6 p-0">
				<div class="instagram__item set-bg" data-setbg="<?= base_url('asset/ashion-master/') ?>img/instagram/insta-4.jpg">
					<div class="instagram__text">
						<i class="fa fa-instagram"></i>
						<a href="#">@ sumibutik</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 col-md-6 col-sm-6 p-0">
				<div class="instagram__item set-bg" data-setbg="<?= base_url('asset/ashion-master/') ?>img/instagram/insta-5.jpg">
					<div class="instagram__text">
						<i class="fa fa-instagram"></i>
						<a href="#">@ sumibutik</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 col-md-6 col-sm-6 p-0">
				<div class="instagram__item set-bg" data-setbg="<?= base_url('asset/ashion-master/') ?>img/instagram/insta-6.jpg">
					<div class="instagram__text">
						<i class="fa fa-instagram"></i>
						<a href="#">@ sumibutik</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Instagram End -->