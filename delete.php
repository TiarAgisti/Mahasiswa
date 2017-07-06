<?php
	include('connect.php');


  	$nim = $_GET['id'];

  	$queryhapus = mysqli_query($connectionString, "DELETE FROM pendaftaran WHERE nim = $nim");

  	if($queryhapus)
	{
  		header('location: index.php');
 	}
 	else
 	{
  		echo "Upss Something wrong..";
 	}

?>