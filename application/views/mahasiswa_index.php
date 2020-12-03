<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: purple">
		<a href="" class="navbar-brand">
			Tugas
		</a>
		<div class="navbar-nav">
			<a href="<?php echo site_url('mahasiswa') ?>" class="nav-link active">Home</a>
			<a href="<?php echo site_url('mahasiswa/tambah') ?>" class="nav-link">Tambah Data</a>
		</div>
		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link">I Wayan Yudita Pratama</a>
		</div>
	</nav>

	<!-- mt-0 adalah singkatan dari margin top ukuran 3 -->
	<div class="alert alert-warning text-center mt-0">
		Data Mahasiswa
	</div>
	<div class="container">

		<table class="table table-bordered table-sm">
			<tr class="text-center">
				<th width="1%">NO</th>
				<th>NIM</th>
				<th>NAMA</th>
				<th>ALAMAT</th>
				<th width="12%">AKSI</th>
			</tr>
			<?php $no = 1; ?>
			<?php foreach ($data_tabel as $key): ?>

				<tr class="">
					<td><?= $no++ ?></td>
					<td><?php echo $key->nim; ?></td>
					<td><?php echo $key->nama; ?></td>
					<td><?php echo $key->alamat; ?></td>
					<td>
						<a href="" class="btn btn-info btn-sm">Edit</a>
						<a href="" class="btn btn-danger btn-sm">Hapus</a>
					</td>
				<?php endforeach ?>
			</tr>
		</table>
	</div>

</body>
</html>