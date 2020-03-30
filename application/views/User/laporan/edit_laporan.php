<div class="container bg-light py-5">
	<h3 class="text-center mb-5">Edit Pengaduan</h3>
	<div class="col-sm-12">
		<form method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<label for="">Nama</label>
						<input type="text" class="form-control border-dark" id="" name="nama" value="<?= $this->session->userdata('nama') ?>" readonly>

					</div>
				</div>

				<div class="col-sm-12">
					<div class="form-group">
						<label for="">NIK</label>
						<input type="text" class="form-control border-dark" id="" name="nik" value="<?= $this->session->userdata('nik') ?>" readonly>

					</div>
				</div>

				<input type="hidden" name="id" value="<?= $detail['tgl_pengaduan'] ?>">

				<div class="col-sm-12">
					<div class="form-group">
						<label for="">Tanggal Pengaduan</label>
						<input type="text" class="form-control border-dark" id="" name="tanggal" value="<?= $detail['tgl_pengaduan'] ?>" readonly>

					</div>
				</div>

				<div class="col-sm-12">
					<div class="form-group">
						<label for="">Judul</label>
						<input type="text" class="form-control border-dark" id="" name="judul" value="<?= $detail['judul'] ?>">
						<small id="" class="form-text text-danger"><?= form_error('judul') ?></small>
					</div>
				</div>

				<div class="col-sm-12">
					<div class="form-group">
						<label for="">Isi Laporan</label>
						<textarea id="" cols="30" rows="10" class="form-control border-dark" name="isi"><?= $detail['isi_laporan'] ?></textarea>
						<small id="" class="form-text text-danger"><?= form_error('isi') ?></small>
					</div>
				</div>

				<div class="col-sm-12">
					<div class="form-group">
						<a href="<?= base_url('assets/img/lampiran/' . $detail['foto']) ?>" class="text-decoration-none">
							<img src="<?= base_url('assets/img/lampiran/' . $detail['foto']) ?>" alt="" class="img-fluid d-block">
						</a>
						<label for="">Lampiran / foto</label>
						<input type="file" class="form-control border-dark" id="" name="foto">
						<small id="" class="form-text font-weight-bold">format : png, jpg, jpeg. <br> size max 3mb</small>
						<small id="" class="form-text text-danger"><?= form_error('foto') ?></small>
					</div>
				</div>


				<div class="col-sm-12 text-center">
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-md mb-2 text-center">Edit Pengaduan</button>
					</div>
				</div>

			</div>
		</form>
	</div>
</div>
