<div class="container justify-center">
	<?php if ($this->session->flashdata('alert-success')) : ?>
		<div class="alert alert-success"><?= $this->session->flashdata('alert-success') ?></div>
	<?php endif; ?>


	<h4 class="text-center mb-4">Laporan Masyarakat</h4>
	<div class="col-sm-3">
		<form action="" method="post">
			<div class="form-group">
				<label for="" class="text-dark">Order By</label>
				<select class="form-control bg-info text-white order" id="order" name="order_by">
					<option class="text-white"></option>
					<option class="text-white" value="menunggu verifikasi">Status = Menunggu Verifikasi</option>
					<option class="text-white" value="proses">Status = Proses</option>
					<option class="text-white" value="selesai">Status = Selesai</option>
				</select>
			</div>
		</form>
	</div>
	<table class="table table-striped mb-5 mt-2">
		<thead>
			<tr>
				<th>#</th>
				<th>Judul Pengaduan</th>
				<th>Pelapor</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data as $laporan) : ?>
				<tr>
					<td><?= ++$start ?></td>
					<td><?= substr($laporan['judul'], 0, 7) ?></td>
					<td><?= $laporan['nama'] ?></td>
					<td><a href="<?= base_url('Admin/DetailLaporan/' . $laporan['id_pengaduan']) ?>" class="badge badge-info">Detail</a></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<?= $this->pagination->create_links() ?>
</div>
