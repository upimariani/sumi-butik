<div class="clearfix"></div>

<div class="content-wrapper">
	<div class="container-fluid">

		<div class="row mt-3">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-body">
						<div class="card-title">Update Data Kategori</div>
						<hr>
						<form action="<?= base_url('Admin/cKategori/update/' . $kategori->id_kategori) ?>" method="POST">
							<div class="form-group">
								<label for="input-1">Nama Kategori</label>
								<input type="text" value="<?= $kategori->nama_kategori ?>" name="nama" class="form-control" id="input-1" placeholder="Masukkan Nama Kategori">
								<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>

		</div>
		<!--End Row-->

		<!--start overlay-->
		<div class="overlay toggle-menu"></div>
		<!--end overlay-->

	</div>
	<!-- End container-fluid-->

</div>
<!--End content-wrapper-->
<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!--End Back To Top Button-->