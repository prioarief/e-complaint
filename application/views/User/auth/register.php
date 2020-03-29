<div class="container bg-light py-5">
	<h3 class="text-center mb-5">Register Masyarakat</h3>
	<div class="col-sm-12">
		<form method="post">
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<label for="">Nama</label>
						<input type="text" class="form-control border-dark" id="" name="nama" value="<?= set_value('nama') ?>" autofocus>
						<small id="" class="form-text text-danger"><?= form_error('nama') ?></small>
					</div>
				</div>

				<div class="col-sm-12">
					<div class="form-group">
						<label for="">NIK</label>
						<input type="text" class="form-control border-dark" id="" name="nik" value="<?= set_value('nik') ?>">
						<small id="" class="form-text text-danger"><?= form_error('nik') ?></small>
					</div>
				</div>

				<div class="col-sm-12">
					<div class="form-group">
						<label for="">Username</label>
						<input type="text" class="form-control border-dark" id="" name="username" value="<?= set_value('username') ?>">
						<small id="" class="form-text text-danger"><?= form_error('username') ?></small>
					</div>
				</div>

				<div class="col-sm-12">
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" class="form-control border-dark" id="" name="password" value="<?= set_value('password') ?>">
						<small id="" class="form-text text-danger"><?= form_error('password') ?></small>
					</div>
				</div>

				<div class="col-sm-12">
					<div class="form-group">
						<label for="">No Telp</label>
						<input type="text" class="form-control border-dark" id="" name="telp" value="<?= set_value('telp') ?>">
						<small id="" class="form-text text-danger"><?= form_error('telp') ?></small>
					</div>
				</div>

				<div class="col-sm-12 text-center">
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-md mb-2 text-center">Register</button>
						<small class="d-block">Sudah punya akun ?</small> <a href="<?= base_url() ?>Auth" class="text-decoration-none">Login</a>
					</div>
				</div>

			</div>
		</form>
	</div>
</div>