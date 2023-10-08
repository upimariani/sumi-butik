<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb__links">
					<a href="./index.html"><i class="fa fa-home"></i> Home</a>
					<span>Shopping cart</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Breadcrumb End -->

<!-- Shop Cart Section Begin -->
<section class="shop-cart spad">
	<div class="container">
		<?php echo form_open('Pelanggan/cCart/update_cart'); ?>
		<div class="row">
			<div class="col-lg-12">
				<div class="shop__cart__table">

					<table>
						<thead>
							<tr>
								<th>Product</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Total</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 1;
							foreach ($this->cart->contents() as $key => $value) {
							?>
								<tr>
									<td class="cart__product__item">
										<img style="width: 150px;" src="<?= base_url('asset/foto-produk/' . $value['gambar']) ?>" alt="">
										<div class="cart__product__item__title">
											<h6><?= $value['name'] ?></h6>
										</div>
									</td>
									<td class="cart__price">Rp. <?= number_format($value['price']) ?></td>
									<td class="cart__quantity">
										<input class="form-control" size="2" name="<?= $i . '[qty]' ?>" min="1" max="<?= $value['stok'] ?>" type="number" value="<?= $value['qty'] ?>">

									</td>
									<td class="cart__total">Rp. <?= number_format($value['price'] * $value['qty']) ?></td>
									<td class="cart__close"><a href="<?= base_url('Pelanggan/cCart/delete/' . $value['rowid']) ?>"><span class="icon_close"></span></a></td>
								</tr>
							<?php
								$i++;
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="cart__btn">
					<a href="<?= base_url('Pelanggan/cHome') ?>">Continue Shopping</a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="cart__btn update__btn">
					<button type="submit" class="btn btn-light"><span class="icon_loading"></span> Update cart</button>
				</div>
			</div>
		</div>
		<?php echo form_close(); ?>
		<div class="row">
			<div class="col-lg-6">

			</div>
			<div class="col-lg-4 offset-lg-2">
				<div class="cart__total__procced">
					<h6>Cart total</h6>
					<hr>
					<ul>
						<li>Subtotal <span>Rp. <?= number_format($this->cart->total()) ?></span></li>
						<li>Total <span>Rp. <?= number_format($this->cart->total()) ?></span></li>
					</ul>
					<a href="<?= base_url('Pelanggan/cCheckout') ?>" class="primary-btn">Proceed to checkout</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Shop Cart Section End -->

<!-- Instagram Begin -->
<div class="instagram">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-2 col-md-4 col-sm-4 p-0">
				<div class="instagram__item set-bg" data-setbg="<?= base_url('asset/ashion-master/') ?>img/instagram/insta-1.jpg">
					<div class="instagram__text">
						<i class="fa fa-instagram"></i>
						<a href="#">@ ashion_shop</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 p-0">
				<div class="instagram__item set-bg" data-setbg="<?= base_url('asset/ashion-master/') ?>img/instagram/insta-2.jpg">
					<div class="instagram__text">
						<i class="fa fa-instagram"></i>
						<a href="#">@ ashion_shop</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 p-0">
				<div class="instagram__item set-bg" data-setbg="<?= base_url('asset/ashion-master/') ?>img/instagram/insta-3.jpg">
					<div class="instagram__text">
						<i class="fa fa-instagram"></i>
						<a href="#">@ ashion_shop</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 p-0">
				<div class="instagram__item set-bg" data-setbg="<?= base_url('asset/ashion-master/') ?>img/instagram/insta-4.jpg">
					<div class="instagram__text">
						<i class="fa fa-instagram"></i>
						<a href="#">@ ashion_shop</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 p-0">
				<div class="instagram__item set-bg" data-setbg="<?= base_url('asset/ashion-master/') ?>img/instagram/insta-5.jpg">
					<div class="instagram__text">
						<i class="fa fa-instagram"></i>
						<a href="#">@ ashion_shop</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 p-0">
				<div class="instagram__item set-bg" data-setbg="<?= base_url('asset/ashion-master/') ?>img/instagram/insta-6.jpg">
					<div class="instagram__text">
						<i class="fa fa-instagram"></i>
						<a href="#">@ ashion_shop</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Instagram End -->