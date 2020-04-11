<div class="container mb-5	">
	<h3 class="text-center mb-2">Laporan <?= $this->session->userdata('nama') ?></h3>
	<div class="col-sm">
		<?php if ($this->session->flashdata('alert')) : ?>
			<div class="alert alert-success"><?= $this->session->flashdata('alert') ?></div>
		<?php endif; ?>
		<div class="row">
			<?php foreach ($laporan as $report) : ?>
				<div class="col-sm-12">
					<div class="card mb-3 shadow-lg p-3 mb-5">
						<div class=" row no-gutters">
							<div class="col-md-4">
								<a href="<?= base_url('assets/img/lampiran/' . $report['foto']) ?>">
									<img src="<?= base_url('assets/img/lampiran/' . $report['foto']) ?>" class="card-img mt-5 ml-4">
								</a>
							</div>
							<div class="col-md-8">
								<div class="card-body">
									<h5 class="card-title text-center font-weight-bold"><?= $report['judul'] ?></h5>
									<?php if (strlen($report['isi_laporan']) <= 220) : ?>
										<p class="card-text"><b>Isi Laporan</b> : <br><?= $report['isi_laporan'] ?></p>
									<?php else : ?>
										<p class="card-text"><b>Isi Laporan</b> : <br><?= substr($report['isi_laporan'], 0, 220) ?>
											<a href="<?= base_url('Laporan/Detail/' . $report['id_pengaduan']) ?>" class="text-decoration-none">Baca Selengkapnya</a>
										</p>
									<?php endif; ?>
									<p class=" card-text"><small class="text-muted">Status : <b><?= $report['status'] ?></b></small></p>
									<?php if ($report['status'] == 'menunggu verifikasi') : ?>
										<a href="<?= base_url('Laporan/edit/' . $report['id_pengaduan']) ?>" class="badge badge-success badge-sm">Edit</a>
										<a href="<?= base_url('Laporan/hapus/' . $report['id_pengaduan']) ?>" class="badge badge-danger badge-sm">Hapus</a>
									<?php elseif ($report['status'] == 'selesai') : ?>
										<a href="" class="badge badge-primary badge-sm">Lihat Tanggapan</a>
									<?php endif; ?>

								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>





		</div>
	</div>
	<?= $this->pagination->create_links() ?>

</div>
