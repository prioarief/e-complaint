<div class="container mb-5">
	<h3 class="text-center mb-4">Data <?= $this->session->userdata('nama') ?></h3>
	<div class="card shadow-lg">
		<div class="col-sm-12">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Nama</th>
						<th>NIK</th>
						<th>Telp</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?= $this->session->userdata('nama') ?></td>
						<td><?= $this->session->userdata('nik') ?></td>
						<td><?= $this->session->userdata('telp') ?></td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
