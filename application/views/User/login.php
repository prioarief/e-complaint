<div class="container bg-light py-5">
	<h3 class="text-center mb-5">Login Masyarakat</h3>
	<div class="col-sm-12">
		<form>
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Username</label>
						<input type="text" class="form-control border-dark" id="exampleInputEmail1" aria-describedby="emailHelp">
						<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
					</div>
				</div>

				<div class="col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Password</label>
						<input type="password" class="form-control border-dark" id="exampleInputEmail1" aria-describedby="emailHelp">
						<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
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
