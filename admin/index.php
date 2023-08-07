<?php include 'header.php'; ?>
<?php
        include_once '../koneksi.php';
        //menghitung jumlah surat masuk
        $query  = "SELECT * FROM surat_masuk";
        $sql    = mysqli_query($koneksi, $query);
        $count1 = mysqli_num_rows($sql); 

        //menghitung jumlah surat keluar
        $query  = "SELECT * FROM surat_keluar";
        $sql    = mysqli_query($koneksi, $query);
        $count2 = mysqli_num_rows($sql);  

        //menghitung jumlah user
        $query  = "SELECT * FROM user";
        $sql    = mysqli_query($koneksi, $query);
        $count3 = mysqli_num_rows($sql);  
    ?>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Beranda <small>/ Admin</small></h1>
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Beranda</li>
            </ol>
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             Selamat Datang <b><?php echo $_SESSION['nama']; ?></b> di beranda admin, <br>
              Sistem Informasi Pengelolaan Surat Masuk dan Surat Keluar Sekretariat DPRD Kota Pekanbaru
            </div>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-3">
            <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-envelope fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"class="count"><?php echo $count1 ?></p>
                    <p class="announcement-text">Surat Masuk</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-warning">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-envelope-o fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"class="count"><?php echo $count2 ?></p>
                    <p class="announcement-text">Surat Keluar</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-danger">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-users fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"class="count"><?php echo $count3 ?></p>
                    <p class="announcement-text">Pengguna</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->
    
    <!-- JavaScript -->
    <script src="../asset/js/jquery-1.10.2.js"></script>
    <script src="../asset/js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="../asset/js/tablesorter/jquery.tablesorter.js"></script>
    <script src="../asset/js/tablesorter/tables.js"></script>

  </body>
</html>
