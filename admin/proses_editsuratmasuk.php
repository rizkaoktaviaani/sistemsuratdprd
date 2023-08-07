<?php 
include '../koneksi.php';
$id_sm = $_POST['id_sm'];
$tgl_terima  = $_POST['tgl_terima'];
$no_surat  = $_POST['no_surat'];

$rand = rand();

$filename = $_FILES['file']['name'];

$tgl_surat  = $_POST['tgl_surat'];
$asal_surat  = $_POST['asal_surat'];
$sifat_surat  = $_POST['sifat_surat'];
$perihal  = $_POST['perihal'];
$ket  = $_POST['ket'];

if($filename == ""){

  mysqli_query($koneksi, "update surat_masuk set tgl_terima='$tgl_terima', no_surat='$no_surat', tgl_surat='$tgl_surat', asal_surat='$asal_surat', sifat_surat='$sifat_surat', perihal='$perihal', ket='$ket' where id_sm='$id_sm'")or die(mysqli_error($koneksi));
  header("location:surat_masuk.php");

}else{

  $jenis = pathinfo($filename, PATHINFO_EXTENSION);

  if($jenis == "php") {
    header("location:surat_masuk.php?alert=gagal");
  }else{

    // hapus file lama
    $lama = mysqli_query($koneksi,"select * from surat_masuk where id_sm='$id_sm'");
    $l = mysqli_fetch_assoc($lama);
    $nama_file_lama = $l['file'];
    unlink("../upload/surat_masuk/".$nama_file_lama);

    // upload file baru
    move_uploaded_file($_FILES['file']['tmp_name'], '../upload/surat_masuk/'.$rand.'_'.$filename);
    $nama_file = $rand.'_'.$filename;
    mysqli_query($koneksi, "update surat_masuk set tgl_terima='$tgl_terima', no_surat='$no_surat', tgl_surat='$tgl_surat', asal_surat='$asal_surat', sifat_surat='$sifat_surat', perihal='$perihal', ket='$ket', file='$nama_file' where id_sm='$id_sm'")or die(mysqli_error($koneksi));
    header("location:surat_masuk.php?alert=sukses");
  }
}
?>