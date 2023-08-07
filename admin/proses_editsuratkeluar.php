<?php 
include '../koneksi.php';

$id_sk = $_POST['id_sk'];
$no_surat  = $_POST['no_surat'];
$rand = rand();

$filename = $_FILES['file']['name'];

$tgl_surat  = $_POST['tgl_surat'];
$tujuan_surat  = $_POST['tujuan_surat'];
$sifat_surat  = $_POST['sifat_surat'];
$perihal  = $_POST['perihal'];
$ket  = $_POST['ket'];

if($filename == ""){

	mysqli_query($koneksi, "update surat_keluar set no_surat='$no_surat', tgl_surat='$tgl_surat', tujuan_surat='$tujuan_surat', sifat_surat='$sifat_surat', perihal='$perihal', ket='$ket' where id_sk='$id_sk'")or die(mysqli_error($koneksi));
	header("location:surat_keluar.php");

}else{

	$jenis = pathinfo($filename, PATHINFO_EXTENSION);

	if($jenis == "php") {
		header("location:surat_keluar.php?alert=gagal");
	}else{

    // hapus file lama
		$lama = mysqli_query($koneksi,"select * from surat_keluar where id_sk='$id_sk'");
		$l = mysqli_fetch_assoc($lama);
		$nama_file_lama = $l['file'];
		unlink("../upload/surat_keluar/".$nama_file_lama);

    // upload file baru
		move_uploaded_file($_FILES['file']['tmp_name'], '../upload/surat_keluar/'.$rand.'_'.$filename);
		$nama_file = $rand.'_'.$filename;
		mysqli_query($koneksi, "update surat_keluar set no_surat='$no_surat', tgl_surat='$tgl_surat', tujuan_surat='$tujuan_surat', sifat_surat='$sifat_surat', perihal='$perihal', ket='$ket', file='$nama_file' where id_sk='$id_sk'")or die(mysqli_error($koneksi));
		header("location:surat_keluar.php?alert=sukses");
	}
}
?>