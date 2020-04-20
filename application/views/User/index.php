<div class="container mb-5 mt-4">
	
	<h3 class="text-center title mb-2">Laporan Pengaduan Masyarakat</h3>

	<?= $this->session->flashdata('alert') ?>
	<div class="scroll mb-5" style="overflow: auto; white-space: nowrap;">
		<?php foreach ($data as $report) : ?>

			<div class="card mb-3 shadow-lg p-3 mr-3" style="width: 18rem; display : inline-block">
				<a href="<?= base_url('assets/img/lampiran/' . $report['foto']) ?>">
					<img src="<?= base_url('assets/img/lampiran/' . $report['foto']) ?>" class="card-img mt-5 ml-1">
				</a>
				<div class="card-body">
					<h5 class="card-title"><?= $report['judul'] ?></h5>
					<p class="font-weight-bold card-text"><small class="text-muted">Status : <b><?= $report['status'] ?></b></small></p>
					<p class=" card-text"><small class="text-muted">Pelapor : <b><?= $report['nama'] ?></b></small></p>
					<!-- <?php if ($report['status'] == 'selesai') : ?>
						<a href="" class="badge badge-primary badge-sm">Lihat Tanggapan</a>
					<?php endif; ?> -->
				</div>
			</div>
		<?php endforeach; ?>
	</div>







	<?php echo $this->pagination->create_links(); ?>

	<div class="embed-responsive embed-responsive-16by9" style="width: 100%; height:500px">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d126929.98858828016!2d106.60264438733927!3d-6.189298262738492!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f8e853d2e38d%3A0x301576d14feb9c0!2sTangerang%2C%20Tangerang%20City%2C%20Banten!5e0!3m2!1sen!2sid!4v1587393796225!5m2!1sen!2sid" width="100%" height="500px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="mt-5" allowfullscreen></iframe>
	</div>


</div>
