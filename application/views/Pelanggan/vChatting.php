<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb__links">
					<a href="./index.html"><i class="fa fa-home"></i> Home</a>
					<a href="./blog.html">Blog</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Breadcrumb End -->

<!-- Blog Details Section Begin -->
<section class="blog-details spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8">
				<div class="blog__details__content">

					<div class="blog__details__btns">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6">
								<div class="blog__details__btn__item">
									<h6><a href="#"><i class="fa fa-angle-left"></i> Previous posts</a></h6>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6">
								<div class="blog__details__btn__item blog__details__btn__item--next">
									<h6><a href="#">Next posts <i class="fa fa-angle-right"></i></a></h6>
								</div>
							</div>

						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
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
						</div>
					</div>
					<div class="blog__details__comment">
						<h5>Chatting</h5>
						<a href="#" class="leave-btn">Leave a chatting</a>

						<?php
						foreach ($pesan as $key => $value) {
							if ($value->pelanggan_send != '0') {
						?>
								<div class="blog__comment__item">
									<div class="blog__comment__item__pic">
										<img src="<?= base_url('asset/ashion-master/') ?>img/blog/details/comment-3.jpg" alt="">
									</div>
									<div class="blog__comment__item__text">
										<h6><?= $value->nm_pel ?></h6>
										<p><?= $value->pelanggan_send ?></p>
										<ul>
											<li><i class="fa fa-clock-o"></i> <?= $value->time ?></li>

										</ul>
									</div>
								</div>
							<?php
							} else if ($value->admin_send != '0') {
							?>
								<div class="blog__comment__item blog__comment__item--reply">
									<div class="blog__comment__item__pic">
										<img src="<?= base_url('asset/ashion-master/') ?>img/blog/details/comment-1.jpg" alt="">
									</div>
									<div class="blog__comment__item__text">
										<h6>Admin</h6>
										<p><?= $value->admin_send ?></p>
										<ul>
											<li><i class="fa fa-clock-o"></i> <?= $value->time ?></li>

										</ul>
									</div>
								</div>
							<?php
							}
							?>
						<?php
						}
						?>
						<hr>
						<form action="<?= base_url('Pelanggan/cChatting') ?>" method="POST">
							<textarea class="form-control mt-3" name="pesan" placeholder="Masukkan pesan untuk admin..."></textarea>
							<button type="submit" class="btn btn-success mt-3">Kirim</button>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- Blog Details Section End -->

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