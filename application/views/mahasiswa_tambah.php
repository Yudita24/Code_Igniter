<!DOCTYPE html>
<html>
<head>
	<title>Tambah Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>

	<!-- NAVBAR -->
	<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: purple">
		<a href="" class="navbar-brand">TUGAS</a>
		<div class="navbar-nav">
			<a href="<?php echo site_url('mahasiswa') ?>" class="nav-link">Home</a>
			<a href="<?php echo site_url('mahasiswa/tambah') ?>" class="nav-link active">Tambah Data</a>
		</div>
		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link">I Wayan Yudita Pratama</a>
		</div>
	</nav>
	<!-- NAVBAR END -->
	
	<!-- Alert -->
	<div class="alert alert-warning text-center mt-0">
		Tambah Data Mahasiswa
	</div>
	<!-- Alert END -->


	<!-- FORM TAMBAH DATA -->
	<div class="container">
		<div class="card">
			<div class="card-body">
				<form>
					<div class="form-group">
						<label for="nim">NIM Mahasiswa</label>
						<input type="number" class="form-control" id="nim">
					</div>
					<div class="form-group">
						<label for="nama">Nama Mahasiswa</label>
						<input type="text" class="form-control" id="nama">
					</div>
					<div class="form-group">
						<label for="alamat">Alamat Mahasiswa</label>
						<textarea class="form-control" id="alamat"></textarea>
					</div>
					<button type="submit" class="btn btn-success"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
					</svg> Input Data Mahasiswa</button>
				</form>
			</div>
			
		</div>
		
	</div>
	<!-- FORM TAMBAH DATA END -->

</body>
</html>