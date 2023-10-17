<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb__links">
					<a href="./index.html"><i class="fa fa-home"></i> Home</a>
					<a href="#">Produk </a>
					<span>Detail Produk</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Breadcrumb End -->

<!-- Product Details Section Begin -->
<section class="product-details spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="product__details__pic">
					<div class="product__details__pic__left product__thumb nice-scroll">
						<a class="pt active" href="#product-1">
							<img src="<?= base_url('asset/foto-produk/' . $produk->gambar)  ?>" alt="">
						</a>

					</div>
					<div class="product__details__slider__content">
						<div class="product__details__pic__slider owl-carousel">
							<img data-hash="product-1" class="product__big__img" src="<?= base_url('asset/foto-produk/' . $produk->gambar)  ?>" alt="">

						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="product__details__text">
					<h3><?= $produk->nama_produk ?> </h3>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<span>( Stok: <?= $produk->stok ?> )</span>
					</div>
					<div class="product__details__price">Rp. <?= number_format($produk->harga - ($produk->diskon / 100 * $produk->harga)) ?> <?php if ($produk->diskon != null) {
																																				?>
							<span>Rp. <?= number_format($produk->harga) ?></span>
						<?php

																																				} ?>
					</div>
					<p><?= $produk->deskripsi ?></p>


				</div>
			</div>
			<div class="col-lg-12">
				<div class="product__details__tab">
					<ul class="nav nav-tabs" role="tablist">

						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Reviews</a>
						</li>
					</ul>
					<div class="tab-content">

						<div class="tab-pane active" id="tabs-3" role="tabpanel">

							<?php
							foreach ($penilaian as $key => $value) {
							?>
								<p><strong><?= $value->nm_pel ?></strong> <?= $value->tgl_po ?></p>
								<p><?= $value->isi_kritik_saran ?></p>
							<?php
							}
							?>
							<p></p>

						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

</section>
<!-- Product Details Section End -->

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