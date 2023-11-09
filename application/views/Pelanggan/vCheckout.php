<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb__links">
					<a href="<?= base_url('Pelanggan/cHome') ?>"><i class="fa fa-home"></i> Home</a>
					<span>Shopping cart</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Breadcrumb End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
	<div class="container">

		<form action="<?= base_url('Pelanggan/cCheckout/order') ?>" method="POST" class="checkout__form">
			<?php
			$data_pelanggan = $this->db->query("SELECT * FROM `pelanggan` WHERE id_pelanggan='" . $this->session->userdata('id_pelanggan') . "'")->row();
			?>
			<div class="row">
				<div class="col-lg-8">
					<h5>Billing detail</h5>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="checkout__form__input">
								<p>Nama Pelanggan <span>*</span></p>
								<input value="<?= $data_pelanggan->nm_pel ?>" type="text" readonly>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="checkout__form__input">
								<p>No Telepon <span>*</span></p>
								<input value="<?= $data_pelanggan->no_tlpon ?>" type="text" readonly>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="checkout__form__input">
								<p>Alamat Detail <span>*</span></p>
								<input name="alamat" value="<?= $data_pelanggan->alamat ?>" type="text">
							</div>

							<div class="checkout__form__input">
								<p>Provinsi <span>*</span></p>
								<select name="provinsi" class="form-control mb-4" required>

								</select>
							</div>
							<div class="checkout__form__input">
								<p>Kota <span>*</span></p>
								<select name="kota" class="form-control mb-4">

								</select>
							</div>
							<div class="checkout__form__input">
								<p>Expedisi <span>*</span></p>
								<select name="expedisi" class="form-control mb-4">

								</select>
							</div>
							<div class="checkout__form__input">
								<p>Paket <span>*</span></p>
								<select name="paket" class="form-control mb-4">

								</select>
							</div>
						</div>

					</div>
				</div>
				<div class="col-lg-4">
					<div class="checkout__order">
						<h5>Your order</h5>
						<div class="checkout__order__product">
							<ul>
								<li>
									<span class="top__text">Product</span>
									<span class="top__text__right">Total</span>
								</li>
								<?php
								foreach ($this->cart->contents() as $key => $value) {
								?>
									<li><?= $value['name'] ?><span>Rp. <?= number_format($value['qty'] * $value['price']) ?></span></li>
								<?php
								}
								?>

							</ul>
						</div>
						<div class="checkout__order__total">
							<ul>
								<li>Subtotal <span>Rp. <?= number_format($this->cart->total()) ?></span></li>
								<li>Total <span id="total_bayar"> </span></li>
							</ul>


							<?php

							if ($this->session->userdata('level') == '1' && $data_pelanggan->stat_reward == '1') {
							?>
								<hr>
								<ul>
									<li>Informasi! <span>Anda adalah sebagai level member <strong>Pelanggan Istimewa</strong></span> anda mendapatkan voucher belanja sebesar Rp. 50.000</li>
								</ul>
								<ul>
									<li>Total bayar <span id="pelanggan_istimewa"></span></li>
								</ul>
							<?php
							}
							?>

						</div>

						<input type="hidden" name="estimasi">
						<input type="hidden" name="ongkir">

						<input type="hidden" name="total_bayar">
						<input type="hidden" name="istimewa">

						<input type="hidden" name="subtotal" value="<?= $this->cart->total() ?>">
						<button type="submit" class="site-btn">Place oder</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</section>
<!-- Checkout Section End -->


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
<!-- Instagram End -->
<!-- Footer Section Begin -->

<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
	<div class="h-100 d-flex align-items-center justify-content-center">
		<div class="search-close-switch">+</div>
		<form class="search-model-form">
			<input type="text" id="search-input" placeholder="Search here.....">
		</form>
	</div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="<?= base_url('asset/ashion-master/') ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('asset/ashion-master/') ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('asset/ashion-master/') ?>js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('asset/ashion-master/') ?>js/jquery-ui.min.js"></script>
<script src="<?= base_url('asset/ashion-master/') ?>js/mixitup.min.js"></script>
<script src="<?= base_url('asset/ashion-master/') ?>js/jquery.countdown.min.js"></script>
<script src="<?= base_url('asset/ashion-master/') ?>js/jquery.slicknav.js"></script>
<script src="<?= base_url('asset/ashion-master/') ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('asset/ashion-master/') ?>js/jquery.nicescroll.min.js"></script>
<script src="<?= base_url('asset/ashion-master/') ?>js/main.js"></script>
<script>
	$(document).ready(function() {
		$.ajax({
			type: "POST",
			url: "http://localhost/sumi-butik/pelanggan/ongkir/provinsi",
			success: function(hasil_provinsi) {
				console.log(hasil_provinsi);
				$("select[name=provinsi]").html(hasil_provinsi);
			}
		});

		$("select[name=provinsi]").on("change", function() {
			var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");
			$.ajax({
				type: "POST",
				url: "http://localhost/sumi-butik/pelanggan/ongkir/kota",
				data: 'id_provinsi=' + id_provinsi_terpilih,
				success: function(hasil_kota) {
					$("select[name=kota]").html(hasil_kota);
				}
			});
		});

		$("select[name=kota]").on("change", function() {
			$.ajax({
				type: "POST",
				url: "http://localhost/sumi-butik/pelanggan/ongkir/expedisi",
				success: function(hasil_expedisi) {
					$("select[name=expedisi]").html(hasil_expedisi);
				}
			});
		});


		$("select[name=expedisi]").on("change", function() {
			//mendapatkan expedisi terpilih
			var expedisi_terpilih = $("select[name=expedisi]").val()

			//mendapatkan id kota tujuan terpilih
			var id_kota_tujuan_terpilih = $("option:selected", "select[name=kota]").attr('id_kota');

			//alert(total_berat);
			$.ajax({
				type: "POST",
				url: "http://localhost/sumi-butik/pelanggan/ongkir/paket",
				data: 'expedisi=' + expedisi_terpilih + '&id_kota=' + id_kota_tujuan_terpilih + '&berat=1000',
				success: function(hasil_paket) {
					$("select[name=paket]").html(hasil_paket);
				}
			});
		});


		$("select[name=paket]").on("change", function() {
			//menampilkan ongkir
			var dataongkir = $("option:selected", this).attr('ongkir');
			var reverse = dataongkir.toString().split('').reverse().join(''),
				ribuan_ongkir = reverse.match(/\d{1,3}/g);
			ribuan_ongkir = ribuan_ongkir.join(',').split('').reverse().join('');
			//alert(dataongkir);
			$("#ongkir").html("Rp. " + ribuan_ongkir)
			//menghitung total bayar
			var ongkir = $("option:selected", this).attr('ongkir');
			var total_bayar = parseInt(ongkir) + parseInt(<?= $this->cart->total() ?>);

			//pelanggan istimewa
			var istimewa = parseInt(total_bayar) - 50000;

			var reverse3 = istimewa.toString().split('').reverse().join(''),
				ribuan_istimewa = reverse3.match(/\d{1,3}/g);
			ribuan_istimewa = ribuan_istimewa.join(',').split('').reverse().join('');
			$("#pelanggan_istimewa").html("Rp. " + ribuan_istimewa);

			var reverse2 = total_bayar.toString().split('').reverse().join(''),
				ribuan_total = reverse2.match(/\d{1,3}/g);
			ribuan_total = ribuan_total.join(',').split('').reverse().join('');
			$("#total_bayar").html("Rp. " + ribuan_total);

			//estimasi dan ongkir
			var estimasi = $("option:selected", this).attr('estimasi');
			$("input[name=estimasi]").val(estimasi);
			$("input[name=ongkir]").val(dataongkir);
			$("input[name=total_bayar]").val(total_bayar);
			$("input[name=istimewa]").val(istimewa);
		});
	});
</script>
</body>

</html>