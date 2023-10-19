<div class="main-content">
	<div class="container-fluid">
		<div class="page-header">
			<div class="row align-items-end">
				<div class="col-lg-8">
					<div class="page-header-title">
						<i class="ik ik-phone bg-blue"></i>
						<div class="d-inline">
							<h5>Chatting</h5>
							<span>Chatting pelanggan</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<nav class="breadcrumb-container" aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="../index.html"><i class="ik ik-home"></i></a>
							</li>
							<li class="breadcrumb-item">
								<a href="#">Tables</a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">Chatting</li>
						</ol>
					</nav>
				</div>
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
		<div class="row">
			<div class="col-md-7">
				<div class="card">
					<div class="card-header">
						<h3>Recent Chat</h3>
						<div class="card-header-right">
							<ul class="list-unstyled card-option">
								<li><i class="ik ik-chevron-left action-toggle"></i></li>
								<li><i class="ik ik-minus minimize-card"></i></li>
								<li><i class="ik ik-x close-card"></i></li>
							</ul>
						</div>
					</div>
					<div class="card-body chat-box scrollable" style="height:100%;">
						<ul class="chat-list">
							<?php
							foreach ($chatting as $key => $value) {

								if ($value->pelanggan_send != null) {

							?>

									<li class="chat-item">
										<div class="chat-content">
											<h6 class="font-medium"><?= $value->nm_pel ?></h6>
											<div class="box bg-light-info"><?= $value->pelanggan_send ?></div>
										</div>
										<div class="chat-time"><?= $value->time ?></div>
									</li>
								<?php
								} else if ($value->admin_send != null) {
								?>
									<li class="odd chat-item">
										<div class="chat-content">
											<div class="box bg-light-inverse"><?= $value->admin_send ?></div>
											<div class="chat-time"><?= $value->time ?></div>
										</div>
									</li>
								<?php
								}
								?>
							<?php
							}
							?>

						</ul>
					</div>

					<div class="card-footer chat-footer">
						<form action="<?= base_url('Admin/cChatting/balas/' . $id) ?>" method="POST">
							<div class="input-wrap">
								<input type="text" name="pesan" placeholder="Type and enter" class="form-control">
							</div>
							<button type="submit" class="btn btn-icon btn-theme"><i class="fa fa-paper-plane"></i></button>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>


</div>