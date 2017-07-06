<!DOCTYPE html>
<html>
	<head>
		<title>CRUD</title>
		<link rel="stylesheet" href="header.css">
		<meta charset="utf-8">
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
		<form action="" method="post">
			<table class="table table-striped">
				<tr style="text-align:center;background-color:#1abc9c">
					<td>NIM</td>
					<td>Nama</td>
					<td>Email</td>
					<td>Phone</td>
					<td>Jurusan</td>
					<td>Aksi</td>
				</tr>
				<?php
					include "connect.php";
					$query = mysqli_query($connectionString,"Select * From Pendaftaran") or die(mysqli_error());
					if(mysqli_num_rows($query) == 0)
					{
						echo "<b>Data not available</b>";
					}
					else
					{
						while($result = mysqli_fetch_array($query)):
				?>
						<tr style="text-align: center;">
							<td><?php echo $result['nim']; ?></td>
							<td><?php echo $result['nama']; ?></td>
							<td><?php echo $result['email']; ?></td>
							<td><?php echo $result['phone']; ?></td>
							<td><?php echo $result['jurusan']; ?></td>
							<td>
							 	<button type="button" class="btn btn-info">
							 		<a href="edit.php?id=<?php echo $result['nim'] ?>">Edit</a> 
							 	</button>
							 	<button type="button" class="btn btn-danger">
							 		<a href="delete.php?id=<?php echo $result['nim'] ?>">Hapus</a>
							 	</button>
							</td>
						</tr>
				<?php
						endwhile;
					}	
				?>
			</table>
		</form>
	</body>
</html>