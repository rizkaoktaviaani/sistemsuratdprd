<?php 
	include_once '../koneksi.php';

	if (!isset($_GET['id_sm'])) {
		echo '<script>window.location="surat_masuk.php";</script>';		
	}

	$id_sm = $_GET['id_sm'];

	mysqli_query($koneksi, "DELETE FROM surat_masuk WHERE id_sm = '$id_sm' " ) or die (mysqli_error($koneksi));

	if (mysqli_affected_rows($koneksi) > 0) {
		echo '<script>alert("Data berhasil dihapus");window.location="surat_masuk.php";</script>'		;
	}
	else{
		echo '<script>alert("Data gagal dihapus");window.location="surat_masuk.php";</script>'		;
	}
?>