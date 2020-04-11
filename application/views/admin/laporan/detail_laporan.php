<div class="container mb-5	">
	<h3 class="text-center mb-2">Detail Laporan <?= $detail['judul'] ?></h3>
	<div class="col-sm">
		<div class="row">

			<div class="col-sm-12">
				<div class="card mb-3 shadow-lg p-3 mb-5">
					<div class=" row no-gutters">
						<div class="col-md-4">
							<a href="<?= base_url('assets/img/lampiran/' . $detail['foto']) ?>">
								<img src="<?= base_url('assets/img/lampiran/' . $detail['foto']) ?>" class="card-img mt-5 ml-4">
							</a>
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title text-center font-weight-bold"><?= $detail['judul'] ?></h5>
								<p class="card-text"><b>Isi Laporan</b> : <br><?= $detail['isi_laporan'] ?></p>
								<p class=" card-text"><small class="text-muted">Status : <b><?= $detail['status'] ?></b></small></p>
								<?php if ($detail['status'] == 'menunggu verifikasi') : ?>
									<a href="<?= base_url('Admin/Verifikasi/' . $detail['id_pengaduan']) ?>" class="btn btn-success btn-sm" onclick="return confirm('yakin ?')">Verifikasi</a>
								<?php elseif ($detail['status'] == 'proses') : ?>
									<button class="btn btn-info btn-sm" id="tanggapan">Beri Tanggapan</button>
								<?php elseif ($detail['status'] == 'selesai') : ?>
									<button class="btn btn-danger btn-sm" id="cetak">Cetak</button>
								<?php endif; ?>


								<div class="col-sm-12 mt-5">
									<form action="<?= base_url('Admin/Tanggapan/' . $detail['id_pengaduan']) ?>" method="post" id="form-tanggapan">
										<div class="form-group">
											<label for="isi">Isi Tanggapan</label>
											<textarea id="isi" cols="30" required rows="10" class="form-control border-dark" name="isi"><?= set_value('isi') ?></textarea>
											<small id="" class="form-text text-danger"><?= form_error('isi') ?></small>
										</div>
										<button class="btn btn-primary btn-sm" id="btn_tanggap">Tanggapi</button>
										<button class="btn btn-danger btn-sm" id="batal">Batal</button>
									</form>
								</div>


							</div>
						</div>
					</div>
				</div>
			</div>



		</div>
	</div>
</div>
