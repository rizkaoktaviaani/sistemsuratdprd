<?php 
include '../koneksi.php';
session_start();

  $id = $_SESSION['id'];
  $username  = $_POST['username'];
  $nama  = $_POST['nama'];
  $passwd  = md5($_POST['passbaru']);
  $pass = $_POST['passbaru'];

  
if ($pass=='') {
	mysqli_query($koneksi, "update user set username='$username', nama='$nama'  where id='$id'");
	header("location:setting.php");	
}
else {
	mysqli_query($koneksi, "update user set username='$username', password='$passwd', nama='$nama' where id='$id'");
	header("location:setting.php");
}
?>