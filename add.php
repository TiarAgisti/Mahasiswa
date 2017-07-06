<!DOCTYPE html>
<html>
	<head>
		<title>Tambah Data</title>
		<link rel="stylesheet" href="header.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="bootstrap.min.css">
  		<script src="jquery.min.js"></script>
  		<script src="bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-default">
  			<div class="container-fluid">
    			<div class="navbar-header">
      				<a class="navbar-brand" href="index.php">Beranda</a>
    			</div>
    			<ul class="nav navbar-nav">
      				<li class="active"><a href="add.php">Tambah Data</a></li>
    			</ul>
  			</div>
		</nav>
		<h2>Form Tambah Data</h2>
		<form action="" method="post">
			<div class="form-group">
				<label class="control-label col-sm-1" style="text-align:right;">Nim :</label>
				<div class="col-sm-11">
					<input type="text" class="form-control" name="nim" placeholder="masukan nim" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1" style="text-align:right;">Nama :</label>
				<div class="col-sm-11">
					<input type="text" class="form-control" name="nama" placeholder="masukan nama" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1" style="text-align:right;">Email :</label>
				<div class="col-sm-11">
					<input type="text" class="form-control" name="email" placeholder="masukan email" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1" style="text-align:right;">Phone :</label>
				<div class="col-sm-11">
					<input type="text" class="form-control" name="phone" placeholder="masukan phone" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1" style="text-align:right;">Jurusan :</label>
				<div class="col-sm-11">
					<select class="form-control" name="jurusan">
						<option value="Sistem Informasi">Sistem Informasi</option>
						<option value="Manajemen">Manajemen</option>
						<option value="Akuntansi">Akuntansi</option>
						<option value="Komputer Akuntansi">Komputer Akuntansi</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1"></label>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-11">
					<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
					<button type="reset" value="Batal" class="btn btn-danger">Batal</button>
				</div>
			</div>
		</form>
	</body>
</html>
<?php 
	include "connect.php";
	if(isset($_POST['simpan']))
	{
			$nim     = $_POST['nim'];
			$nama    = $_POST['nama'];
			$email = $_POST['email'];
			$phone  = $_POST['phone'];
			$jurusan  = $_POST['jurusan'];
			$querytambah = mysqli_query($connectionString, "INSERT INTO pendaftaran VALUES('$nim', '$nama', '$email', '$phone', '$jurusan')") or die(mysqli_error());
			if($querytambah) 
			{
			header('location: index.php');
			} 
			else
			{
			echo "Upss Something wrong..";
			}
		}
?>