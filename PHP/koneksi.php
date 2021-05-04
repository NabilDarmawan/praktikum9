<?php
	//konfigurasi database
	$host 		= "localhost";
	$user 		= "root";
	$password 	= "";
	$database 	= "formpeserta";

	// Perintah php untuk akses ke database
	$koneksi = mysqli_connect($host, $user, $password, $database);
	if(!$koneksi){
		die("Koneksi failed : " . msqli_connect_error());
	}
 
?>