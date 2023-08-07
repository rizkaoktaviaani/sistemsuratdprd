<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password =md5($_POST['password']);
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['id'] = $data['id'];
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['username'] = $data['username'];
		$_SESSION['status'] = "admin_login";
		// alihkan ke halaman dashboard admin
		echo "<script>alert('Selamat Datang!');document.location='admin/index.php'</script>";

	// cek jika user login sebagai pegawai
	}else if($data['level']=="pegawai"){
		// buat session login dan username
		$_SESSION['id'] = $data['id'];
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['username'] =$data['username'];
		$_SESSION['status'] = "pegawai_login";
		// alihkan ke halaman dashboard pegawai
		echo "<script>alert('Selamat Datang!');document.location='user/index.php'</script>";
	}else{

		// alihkan ke halaman login kembali
		echo "<script>alert('Gagal Login!');document.location='index.php'</script>";
	}	
}else{
	echo "<script>alert('Gagal Login!');document.location='index.php'</script>";
}

?>