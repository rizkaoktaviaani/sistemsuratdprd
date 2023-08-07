<?php 
include '../koneksi.php';
session_start();
if(isset($_POST['simpan'])){
  $id = $_SESSION['id'];
  $no_surat  = $_POST['no_surat'];
  $tgl_surat  = $_POST['tgl_surat'];

  $rand = rand();
  $filename = $_FILES['berkas']['name'];
  $jenis = pathinfo($filename, PATHINFO_EXTENSION);

  $tujuan_surat  = $_POST['tujuan_surat'];
  $sifat_surat  = $_POST['sifat_surat'];
  $perihal  = $_POST['perihal'];
  $ket  = $_POST['ket'];

  if($jenis == "php") {
    header("location:surat_keluar.php?alert=gagal");
  }else{
   move_uploaded_file($_FILES['berkas']['tmp_name'], '../upload/surat_keluar/'.$rand.'_'.$filename);
   $file= $rand.'_'.$filename;
   mysqli_query($koneksi, "insert into surat_keluar values ('','$no_surat','$tgl_surat','$tujuan_surat','$sifat_surat','$perihal','$ket', '$file', '$id')")or die(mysqli_error($koneksi));
   echo "<script>alert('Data Surat Keluar Berhasil Ditambah'); window.location.href = 'surat_keluar.php';</script>";
 }
}
?>