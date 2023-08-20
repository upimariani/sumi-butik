<!-- Categories Section Begin -->
<section class="categories">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 p-0">
				<div class="categories__item categories__large__item set-bg" data-setbg="<?= base_url('asset/ashion-master/') ?>img/categories/category-1.jpg">
					<div class="categories__text">
						<h1>Toko Sumi Butik Kuningan</h1>
						<p>Kuningan, Kuningan Regency, West Java 45511, Indonesia</p>
						<a href="#">Shop now</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 p-0">
						<div class="categories__item set-bg" data-setbg="<?= base_url('asset/ashion-master/') ?>img/categories/category-2.jpg">
							<div class="categories__text">
								<h4>Men’s fashion</h4>
								<p>358 items</p>
								<a href="#">Shop now</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 p-0">
						<div class="categories__item set-bg" data-setbg="<?= base_url('asset/ashion-master/') ?>img/categories/category-3.jpg">
							<div class="categories__text">
								<h4>Kid’s fashion</h4>
								<p>273 items</p>
								<a href="#">Shop now</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 p-0">
						<div class="categories__item set-bg" data-setbg="<?= base_url('asset/ashion-master/') ?>img/categories/category-4.jpg">
							<div class="categories__text">
								<h4>Cosmetics</h4>
								<p>159 items</p>
								<a href="#">Shop now</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 p-0">
						<div class="categories__item set-bg" data-setbg="<?= base_url('asset/ashion-master/') ?>img/categories/category-5.jpg">
							<div class="categories__text">
								<h4>Accessories</h4>
								<p>792 items</p>
								<a href="#">Shop now</a>
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
							</ul>
						</div>
						<div class="product__item__text">
							<h6><a href="#"><?= $value->nama_produk ?></a></h6>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
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
					<div class="banner__item">
						<div class="banner__text">
							<span>Pakaian Wanita Dewasa</span>
							<h1>Toko Sumi Butik</h1>
							<a href="#">Shop now</a>
						</div>
					</div>
					<div class="banner__item">
						<div class="banner__text">
							<span>Pakaian Laki - Laki</span>
							<h1>Toko Sumi Butik</h1>
							<a href="#">Shop now</a>
						</div>
					</div>
					<div class="banner__item">
						<div class="banner__text">
							<span>Pakaian Muslim</span>
							<h1>Toko Sumi Butik</h1>
							<a href="#">Shop now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Banner Section End -->

<!-- Trend Section Begin -->
<section class="trend spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="trend__content">
					<div class="section-title">
						<h4>Hot Trend</h4>
					</div>
					<div class="trend__item">
						<div class="trend__item__pic">
							<img src="img/trend/ht-1.jpg" alt="">
						</div>
						<div class="trend__item__text">
							<h6>Chain bucket bag</h6>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="product__price">$ 59.0</div>
						</div>
					</div>
					<div class="trend__item">
						<div class="trend__item__pic">
							<img src="img/trend/ht-2.jpg" alt="">
						</div>
						<div class="trend__item__text">
							<h6>Pendant earrings</h6>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="product__price">$ 59.0</div>
						</div>
					</div>
					<div class="trend__item">
						<div class="trend__item__pic">
							<img src="img/trend/ht-3.jpg" alt="">
						</div>
						<div class="trend__item__text">
							<h6>Cotton T-Shirt</h6>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="product__price">$ 59.0</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="trend__content">
					<div class="section-title">
						<h4>Best seller</h4>
					</div>
					<div class="trend__item">
						<div class="trend__item__pic">
							<img src="img/trend/bs-1.jpg" alt="">
						</div>
						<div class="trend__item__text">
							<h6>Cotton T-Shirt</h6>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="product__price">$ 59.0</div>
						</div>
					</div>
					<div class="trend__item">
						<div class="trend__item__pic">
							<img src="img/trend/bs-2.jpg" alt="">
						</div>
						<div class="trend__item__text">
							<h6>Zip-pockets pebbled tote <br />briefcase</h6>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="product__price">$ 59.0</div>
						</div>
					</div>
					<div class="trend__item">
						<div class="trend__item__pic">
							<img src="img/trend/bs-3.jpg" alt="">
						</div>
						<div class="trend__item__text">
							<h6>Round leather bag</h6>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="product__price">$ 59.0</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="trend__content">
					<div class="section-title">
						<h4>Feature</h4>
					</div>
					<div class="trend__item">
						<div class="trend__item__pic">
							<img src="img/trend/f-1.jpg" alt="">
						</div>
						<div class="trend__item__text">
							<h6>Bow wrap skirt</h6>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="product__price">$ 59.0</div>
						</div>
					</div>
					<div class="trend__item">
						<div class="trend__item__pic">
							<img src="img/trend/f-2.jpg" alt="">
						</div>
						<div class="trend__item__text">
							<h6>Metallic earrings</h6>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="product__price">$ 59.0</div>
						</div>
					</div>
					<div class="trend__item">
						<div class="trend__item__pic">
							<img src="img/trend/f-3.jpg" alt="">
						</div>
						<div class="trend__item__text">
							<h6>Flap cross-body bag</h6>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="product__price">$ 59.0</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Trend Section End -->

<!-- Discount Section Begin -->
<section class="discount">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 p-0">
				<div class="discount__pic">
					<img src="img/discount.jpg" alt="">
				</div>
			</div>
			<div class="col-lg-6 p-0">
				<div class="discount__text">
					<div class="discount__text__title">
						<span>Discount</span>
						<h2>Summer 2019</h2>
						<h5><span>Sale</span> 50%</h5>
					</div>
					<div class="discount__countdown" id="countdown-time">
						<div class="countdown__item">
							<span>22</span>
							<p>Days</p>
						</div>
						<div class="countdown__item">
							<span>18</span>
							<p>Hour</p>
						</div>
						<div class="countdown__item">
							<span>46</span>
							<p>Min</p>
						</div>
						<div class="countdown__item">
							<span>05</span>
							<p>Sec</p>
						</div>
					</div>
					<a href="#">Shop now</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Discount Section End -->

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