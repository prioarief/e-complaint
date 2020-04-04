<div class="container justify-center">
	<?= $this->session->flashdata('alert') ?>
	<h4 class="text-center mb-4">Laporan Masyarakat</h4>
	<table class="table table-striped">
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
					<td><?= $laporan['judul'] ?></td>
					<td><?= $laporan['nama'] ?></td>
					<td><a href="" class="badge badge-info">Detail</a></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<?= $this->pagination->create_links() ?>
</div>
