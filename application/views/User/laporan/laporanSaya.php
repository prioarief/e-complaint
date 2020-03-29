<div class="container mb-5	">
	<h2 class="text-center mb-2 font-weight-bold">Data <?= $this->session->userdata('nama') ?></h2>
	<p class="text-center">NIK : <?= $this->session->userdata('nik') ?></p>
	<p class="text-center">username : <?= $this->session->userdata('username') ?></p>
	<p class="text-center mb-5">Registrasi : <?= $this->session->userdata('created') ?></p>
	<h3 class="text-center mb-2">Laporan <?= $this->session->userdata('nama') ?></h3>
	<div class="col-sm">
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
									<h5 class="card-title text-center font-weight-bold">Judul Laporan : <?= $report['judul'] ?></h5>
									<p class="card-text"><b>Isi Laporan</b> : <br><?= $report['isi_laporan'] ?></p>
									<p class="card-text"><small class="text-muted">Status : <?= $report['status'] ?></small></p>
									<a href="" class="btn btn-primary btn-sm">Lihat Tanggapan</a>
									<a href="" class="btn btn-success btn-sm">Edit</a>
									<a href="" class="btn btn-danger btn-sm">Hapus</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>





		</div>
	</div>
	<nav aria-label="Page navigation example">
		<ul class="pagination justify-content-center">
			<li class="page-item disabled">
				<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
			</li>
			<li class="page-item"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item">
				<a class="page-link" href="#">Next</a>
			</li>
		</ul>
	</nav>
</div>