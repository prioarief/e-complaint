<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>E-Complaint</title>
	<link rel="shortcut icon" href="<?= base_url(); ?>assets/img/tangerang.png">
	<link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/myCss/style.css">
	<script src="<?= base_url() ?>assets/bootstrap/js/jquery-3.4.1.slim.min.js"></script>
	<script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>assets/bootstrap/js/popper.js"></script>
</head>

<body>

	<!-- Image and text -->
	<!-- <nav class="navbar navbar-dark bg-dark mb-0">
		<a class="navbar-brand" href="<?= base_url() ?>Laporan">
			<img src="<?= base_url() ?>assets/img/tangerang.png" width="30" height="30" class="d-inline-block align-top" alt="">
			E-Complaint
		</a>

		<a class="navbar-link text-white text-decoration-none" href="#">Login Admin</a>
	</nav> -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="<?= base_url() ?>Laporan">
			<img src="<?= base_url() ?>assets/img/tangerang.png" width="30" height="30" class="d-inline-block align-top" alt="">
			E-Complaint
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<?php if ($this->session->userdata('nik')) : ?>
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="<?= base_url() ?>Laporan">Laporan Saya</a>
					</li>
				</ul>
				<span class="navbar-text display-inline">
					<a href="<?= base_url() ?>Auth/logout" class="nav-link">(<?= $this->session->userdata('nama') ?>) Logout</a>
				</span>
			<?php endif; ?>

		</div>
	</nav>

	<div class="jumbotron jumbotron-fluid" style="background-image: url('<?= base_url() ?>assets/img/puspem.jpg'); background-size : 100% 100%">
		<!-- <img class="img img-fluid landing-page" src="<?= base_url() ?>assets/img/puspem.jpg" alt=""> -->
		<div class="container">
			<br>
			<h4 class="ml-5 header">Selamat Datang di <br> Website Pengaduan Laporan Masyarakat <br> Kota Tangerang</h4>






			<?php if (!$this->session->userdata('nik')) : ?>
				<span class="ml-5 deskripsi d-block">Silahkan Login Untuk Membuat Laporan</span>
				<a href="<?= base_url() ?>Auth" class="btn btn-info ml-5 mt-2 mb-5">Login</a>
			<?php endif; ?>


			<?php if ($this->session->userdata('nik')) : ?>
				<a href="<?= base_url() ?>Laporan/create" class="btn btn-info ml-5 mt-2 mb-5 btn-sm">Buat Laporan</a>
				<a href="<?= base_url() ?>Laporan" class="btn btn-info ml-1 mt-2 mb-5 btn-sm">Laporan Saya</a>
			<?php endif; ?>
		</div>
	</div>



</body>
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->

</html>