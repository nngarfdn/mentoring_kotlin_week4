<?php

$hostname = "localhost" ;
$username = "root" ;
$password = "" ;
$database = "kampus" ;

$connect = mysqli_connect($hostname, $username, $password, $database);

if (mysqli_connect_errno()) {
	echo "Failed connect to mysql :" . mysqli_connect_error(); die();
	# code...
}else {
	// echo "Success connect to mysql";
}

?>