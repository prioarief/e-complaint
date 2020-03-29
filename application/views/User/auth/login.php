<div class="container bg-light py-5">
	<h3 class="text-center mb-5">Login Masyarakat</h3>
	<div class="col-sm-12">
		<?= $this->session->flashdata('alert') ?>
		<form method="post">
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<label for="">Username</label>
						<input type="text" class="form-control border-dark" id="" name="username" autofocus value="<?= set_value('username') ?>">
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

				<div class="col-sm-12 text-center">
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-md mb-2 text-center">Login</button>
						<small class="d-block">Belum punya akun ?</small> <a href="<?= base_url() ?>Auth/register" class="text-decoration-none">Register</a>
					</div>
				</div>

			</div>
		</form>
	</div>
</div>