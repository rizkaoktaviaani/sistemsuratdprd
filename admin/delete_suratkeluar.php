<?php 
	include_once '../koneksi.php';

	if (!isset($_GET['id_sk'])) {
		echo '<script>window.location="surat_keluar.php";</script>';		
	}

	$id_sk = $_GET['id_sk'];

	mysqli_query($koneksi, "DELETE FROM surat_keluar WHERE id_sk = '$id_sk' " ) or die (mysqli_error($koneksi));

	if (mysqli_affected_rows($koneksi) > 0) {
		echo '<script>alert("Data berhasil dihapus");window.location="surat_keluar.php";</script>'		;
	}
	else{
		echo '<script>alert("Data gagal dihapus");window.location="surat_keluar.php";</script>'		;
	}
?>