<div class="container mb-5	">
	<h3 class="text-center title mb-5">Laporan Pengaduan Masyarakat</h3>
	<div class="col-sm">
		<?= $this->session->flashdata('alert') ?>
		<div class="row">
			<?php foreach ($data as $report) : ?>
				<div class="col-sm-12">
					<div class="card mb-3 shadow-lg p-3 mb-5">
						<div class=" row no-gutters">
							<div class="col-md-4">
								<a href="<?= base_url('assets/img/lampiran/' . $report['foto']) ?>">
									<img src="<?= base_url('assets/img/lampiran/' . $report['foto']) ?>" class="card-img mt-5 ml-3">
								</a>
							</div>
							<div class="col-md-8">
								<div class="card-body">
									<h5 class="card-title text-center font-weight-bold"><?= $report['judul'] ?></h5>
									<?php if (strlen($report['isi_laporan']) <= 220) : ?>
										<p class="card-text"><b>Isi Laporan</b> : <br><?= $report['isi_laporan'] ?></p>
									<?php else : ?>
										<p class="card-text"><b>Isi Laporan</b> : <br><?= substr($report['isi_laporan'], 0, 220) ?>
											<a href="<?= base_url('Laporan/Detail/' . $report['id_pengaduan']) ?>" class="badge badge text-decoration-none">Baca Selengkapnya</a>
										</p>
									<?php endif; ?>
									<p class=" card-text"><small class="text-muted">Status : <b><?= $report['status'] ?></b></small></p>
									<p class=" card-text"><small class="text-muted">Pelapor : <b><?= $report['nama'] ?></b></small></p>
									<a href="" class="badge badge-primary badge-sm">Lihat Tanggapan</a>

								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>





		</div>
	</div>
	<?php echo $this->pagination->create_links(); ?>

	<!-- <ul class="pagination justify-content-center">
		<li class="page-item">
			<a class="page-link" href="#" tabindex="-1">Previous</a>
		</li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item active"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item">
			<a class="page-link" href="#">Next</a>
		</li>
	</ul> -->

	<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.30757025075!2d106.6377526!3d-6.1873334!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0:0xbbf35137362e584d!2sSekolah Menengah Kejuruan Negeri 4 Tangerang!5e0!3m2!1sid!2sid!4v1585557646148!5m2!1sid!2sid" frameborder="0"></iframe> -->

</div>
