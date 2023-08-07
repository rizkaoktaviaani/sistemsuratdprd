<?php  

	$servername  = "localhost";
	$username_db = "root";
	$password_db = "";
	$nama_db     = "sistem_surat";

	$koneksi = mysqli_connect($servername, $username_db, $password_db, $nama_db);

	if ($koneksi->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

?>