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
								<a href="" class="btn btn-primary btn-sm">Lihat Tanggapan</a>
								<?php if ($this->session->userdata('nik') && $this->session->userdata('nik') === $detail['nik'] && $detail['status'] == 'menunggu verifikasi') : ?>
									<a href="<?= base_url('Laporan/edit/' . $detail['id_pengaduan']) ?>" class="btn btn-success btn-sm">Edit</a>
									<a href="<?= base_url('Laporan/hapus/' . $detail['id_pengaduan']) ?>" class="btn btn-danger btn-sm">Hapus</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>



		</div>
	</div>
</div>
