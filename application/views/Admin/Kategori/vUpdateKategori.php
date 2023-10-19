<div class="main-content">
	<div class="container-fluid">
		<div class="page-header">
			<div class="row align-items-end">
				<div class="col-lg-8">
					<div class="page-header-title">
						<i class="ik ik-moon bg-blue"></i>
						<div class="d-inline">
							<h5>Data Kategori</h5>
							<span>Kategori produk</span>
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
							<li class="breadcrumb-item active" aria-current="page">Kategori</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-5">
				<div class="card">
					<div class="card-header">
						<h3>Update Kategori</h3>

					</div>
					<div class="card-body">
						<form action="<?= base_url('Admin/cKategori/update/' . $kategori->id_kategori) ?>" method="POST">
							<div class="form-group">
								<label for="input-1">Nama Kategori</label>
								<input type="text" value="<?= $kategori->nama_kategori ?>" name="nama" class="form-control" id="input-1" placeholder="Masukkan Nama Kategori">
								<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-success px-5"> <i class="ik ik-save"></i> Update</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>


	</div>
</div>
