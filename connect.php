<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "bootcamp";

$connectionString = mysqli_connect($server,$user,$pass,$database);
if(mysqli_connect_errno())
{
	echo "Conection Failed,please check your connection!".mysqli_connect_error();
}



?>