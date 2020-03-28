<div class="container bg-light py-5">
	<h3 class="text-center mb-5">Register Masyarakat</h3>
	<div class="col-sm-12">
		<form>
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Nama</label>
						<input type="text" class="form-control border-dark" id="exampleInputEmail1" name="nama">
						<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
					</div>
				</div>

				<div class="col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">NIK</label>
						<input type="text" class="form-control border-dark" id="exampleInputEmail1" name="nik">
						<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
					</div>
				</div>

				<div class="col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Username</label>
						<input type="text" class="form-control border-dark" id="exampleInputEmail1" name="username">
						<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
					</div>
				</div>

				<div class="col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Password</label>
						<input type="password" class="form-control border-dark" id="exampleInputEmail1" name="password">
						<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
					</div>
				</div>

				<div class="col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">No Telp</label>
						<input type="text" class="form-control border-dark" id="exampleInputEmail1" name="telp">
						<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
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
