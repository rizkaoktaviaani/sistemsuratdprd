<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi Pengelolaan Surat Masuk & Masuk</title>

    <!-- Bootstrap core CSS -->
    <link href="../asset/css/bootstrap.css" rel="stylesheet">
    <link href="../asset/css/style.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../asset/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="../asset/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="../asset/font-awesome/css/font-awesome.min.css">
    <?php 
    include '../koneksi.php';
    session_start();
    if($_SESSION['status'] != "admin_login"){
        header("location:../index.php?alert=belum_login");
    }
    ?>
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Sekretariat DPRD Kota Pekanbaru</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li><a href="surat_masuk.php"><i class="fa fa-file-text"></i> Surat Masuk</a></li>
            <li><a href="surat_keluar.php"><i class="fa fa-file-text"></i> Surat Keluar</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-print"></i> Cetak Laporan<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="cetak_suratmasuk.php">Surat Masuk</a></li>
                <li><a href="cetak_suratkeluar.php">Surat Keluar</a></li>
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['nama']; ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="setting.php"><i class="fa fa-gear"></i> Setting</a></li>
                <li class="divider"></li>
                <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
