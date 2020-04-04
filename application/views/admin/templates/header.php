<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>E-Complaint | <?= $title ?></title>
	<link rel="shortcut icon" href="<?= base_url(); ?>assets/img/tangerang.png">
	<link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/myCss/style.css">
	<script src="<?= base_url() ?>assets/bootstrap/js/jquery-3.4.1.slim.min.js"></script>
	<script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>assets/bootstrap/js/popper.js"></script>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="<?= base_url() ?>Home">
			<img src="<?= base_url() ?>assets/img/tangerang.png" width="30" height="30" class="d-inline-block align-top" alt="">
			E-Complaint Admin
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<?php if ($this->session->userdata('id_petugas')) : ?>
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<!-- <a class="nav-link" href="<?= base_url() ?>Laporan">Laporan Saya</a> -->
					</li>
				</ul>
				<span class="navbar-text display-inline">
					<a href="<?= base_url() ?>Laporan" class="nav-link">Laporan Pengaduan Masyarakat</a>
				</span>
				<span class="navbar-text display-inline">
					<a href="<?= base_url() ?>Admin/logout" class="nav-link">Logout</a>
				</span>
			<?php endif; ?>

		</div>
	</nav>

	<div class="jumbotron jumbotron-fluid" style="background-image: url('<?= base_url() ?>assets/img/puspem.jpg'); background-size : 100% 100%; height:40vh">
		<!-- <img class="img img-fluid landing-page" src="<?= base_url() ?>assets/img/puspem.jpg" alt=""> -->
		<div class="container">
			<?php if ($this->session->userdata('id_petugas')) : ?>
				<h3 class="text-center header mt-5">Selamat Datang <?= $this->session->userdata('level') ?></h3>
				<h4 class="text-center header"><?= $this->session->userdata('nama_petugas') ?></h4>
			<?php endif; ?>

		</div>
	</div>



</body>
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->

</html>
