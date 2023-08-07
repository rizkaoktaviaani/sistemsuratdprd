<?php include 'header.php'; ?>
<div id="page-wrapper" >

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Surat Keluar</h1>
    </div>
  </div><!-- /.row -->
  <br>

    <div class="row">
      <div class="col-lg-10">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
          <div class="panel-heading">
           Detail Surat Keluar
         </div>
         <div class="panel-body" class="col-lg-12">
          <?php 
          $id_sk = $_GET['id_sk'];  
          $data = mysqli_query($koneksi,"SELECT * FROM surat_keluar WHERE id_sk='$id_sk'");
          while($d = mysqli_fetch_array($data)){
            ?>

            <div class="row">
              <div class="col-lg-10">

                <table class="table">
                  <tr>
                    <tr>
                      <th>No Surat</th>
                      <td><?php echo $d['no_surat']; ?></td>
                    </tr>
                    <tr>
                      <th>Tanggal Surat</th>
                      <td><?php echo date('d-m-Y',strtotime($d['tgl_surat'])) ?></td>
                    </tr>
                    <tr>
                      <th>Tujuan Surat</th>
                      <td><?php echo $d['tujuan_surat']; ?></td>
                    </tr>
                    <tr>
                      <th>Sifat Surat</th>
                      <td><?php echo $d['sifat_surat']; ?></td>
                    </tr>
                    <tr>
                      <th>Perihal</th>
                      <td><?php echo $d['perihal']; ?></td>
                    </tr>
                    <tr>
                      <th>Keterangan</th>
                      <td><?php echo $d['ket']; ?></td>
                    </tr>
                    <tr>
                      <th>File</th>
                      <td><a href="../upload/surat_keluar/<?php echo $d['file']?>">&nbsp;<?php echo $d['file'];?></a></td>
                    </tr>
                  </tr>
                </table>

              </div>
            </div>
            <?php 
          }
          ?>
          
        </div>

      </div>
    </div>
    
</div>
<a href="surat_keluar.php?page=surat_keluar" class="btn btn-primary btn-sm">Kembali</a>

<!-- /. ROW  -->
<!-- /. ROW  -->

<!-- /. ROW  -->
</div>
   <!-- JavaScript -->
    <script src="../asset/js/jquery-1.10.2.js"></script>
    <script src="../asset/js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="../asset/js/tablesorter/jquery.tablesorter.js"></script>
    <script src="../asset/js/tablesorter/tables.js"></script>

  </body>
</html>