<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title>Kontak</title>
	<style>
		.warning {color: #FF0000;}
		.card-header {background: #1A374D; color: #FFFFFF; text-align: center; font-style: bold;}
		.card-body {background: #FB1D0E0;}
		.form-group {align-content: center;}
	</style>
</head>
<body>
	<div class="row">
	<div class="col-md-8">
	<div class="card">
		<div class="card-header">
			FORM DENGAN PHP
		</div>
	<div class="card-body">
	<form method="post" action="simpan_kontak.php">
	<div class="form-group row">
		<label for="nama" class="col-md-3 col-form-label">Nama</label>
		<div class="col-md-5">
			<input type="text" name="nama" class="form-control" id="nama" placeholder = "Nama"> <br>
	</div> 
	</div>

	<div class="form-group row">
		<label for="jkel" class="col-md-3 col-form-label">Jenis Kelamin</label>
		<div class="col-md-5">
			<select class="form-control" name="jkel">
				<option>Pilih</option>
				<option value="lakilaki">Laki-laki</option>
				<option value="perempuan">Perempuan</option>
			</select>
			<br>
		</div> <br> <br>
	</div> 

	<div class="form-group row">
		<label for="email" class="col-md-3 col-form-label">Email</label>
		<div class="col-md-5">
			<input type="text" name="email" class="form-control" id="email" placeholder = "Email"> <br>
	</div>
	</div> 


	<div class="form-group row">
		<label for="alamat" class="col-md-3 col-form-label">Alamat</label>
		<div class="col-md-5">
			<input type="text" name="alamat" class="form-control" id="alamat" placeholder = "Alamat"><br>
	</div> 
	</div>

	<div class="form-group row">
		<label for="kota" class="col-md-3 col-form-label">Kota</label>
		<div class="col-md-5">
			<input type="text" name="kota" class="form-control" id="kota" placeholder = "Kota"> <br>
	</div> 
	</div>

	<div class="form-group row">
		<label for="pesan" class="col-md-3 col-form-label">Pesan</label>
		<div class="col-md-5">
			<input type="text" name="pesan" class="form-control" id="pesan" placeholder = "Pesan"> <br>
	</div> 
	</div>

	<div class="form-group row">
		<div class="col-md-8">
			<button type="submit" class="btn btn-primary">Sign In</button>
		</div>
	</div>
	</form>

	</div>
	</div>
	</div>
</div>

</body>
</html>