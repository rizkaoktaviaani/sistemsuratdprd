<?php 
include '../koneksi.php';
session_start();
if(isset($_POST['simpan'])){
  $id = $_SESSION['id'];
  $tgl_terima  = $_POST['tgl_terima'];
  $no_surat  = $_POST['no_surat'];
  $tgl_surat  = $_POST['tgl_surat'];

  $rand = rand();
  $filename = $_FILES['file']['name'];
  $jenis = pathinfo($filename, PATHINFO_EXTENSION);

  $asal_surat  = $_POST['asal_surat'];
  $sifat_surat  = $_POST['sifat_surat'];
  $perihal  = $_POST['perihal'];
  $ket  = $_POST['ket'];

  if($jenis == "php") {
  header("location:surat_masuk.php?alert=gagal");
}else{
 move_uploaded_file($_FILES['file']['tmp_name'], '../upload/surat_masuk/'.$rand.'_'.$filename);
  $file= $rand.'_'.$filename;
  mysqli_query($koneksi, "insert into surat_masuk values ('','$tgl_terima','$no_surat','$tgl_surat','$asal_surat','$sifat_surat','$perihal','$ket', '$file', '$id')")or die(mysqli_error($koneksi));
  echo "<script>alert('Data Surat Masuk Berhasil Ditambah'); window.location.href = 'surat_masuk.php';</script>";
}
}
?>