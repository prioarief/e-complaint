<div class="container bg-light py-5">
	<h3 class="text-center mb-5">Pengaduan</h3>
	<div class="col-sm-12">
		<form>
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<label for="">Nama</label>
						<input type="text" class="form-control border-dark" id="" name="nama" value="Prio Arief Gunawan" readonly>
						<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
					</div>
				</div>

				<div class="col-sm-12">
					<div class="form-group">
						<label for="">NIK</label>
						<input type="text" class="form-control border-dark" id="" name="nik" value="36700484848484949300" readonly>
						<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
					</div>
				</div>

				<div class="col-sm-12">
					<div class="form-group">
						<label for="">Tanggal Pengaduan</label>
						<input type="text" class="form-control border-dark" id="" name="tanggal" value="<?= date('d M Y') ?>" readonly>
						<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
					</div>
				</div>

				<div class="col-sm-12">
					<div class="form-group">
						<label for="">Isi Laporan</label>
						<textarea name="" id="" cols="30" rows="10" class="form-control border-dark" name="isi"></textarea>
						<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
					</div>
				</div>

				<div class="col-sm-12">
					<div class="form-group">
						<label for="">Lampiran / foto</label>
						<input type="file" class="form-control border-dark" id="" name="foto">
						<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
					</div>
				</div>


				<div class="col-sm-12 text-center">
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-md mb-2 text-center">Buat Pengaduan</button>
					</div>
				</div>

			</div>
		</form>
	</div>
</div>
