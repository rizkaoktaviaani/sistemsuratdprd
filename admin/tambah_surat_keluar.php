<?php include 'header.php'; ?>
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Surat Keluar</h1>
      </div>
      <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Form Surat Keluar
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-6">
                <form action="proses_tambahsuratkeluar.php" method="post" enctype="multipart/form-data">
                  <div class="container">
                   <div class="form-group row">

                    <div class="form-group row">
                      <label  class="col-sm-2 col-form-label">No Surat</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="no_surat" required="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label  class="col-sm-2 col-form-label">Tanggal Surat</label>
                      <div class="col-sm-5">
                        <input type="date" class="form-control" name="tgl_surat" id="tanggal" placeholder="" required="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label  class="col-sm-2 col-form-label">Tujuan Surat</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="tujuan_surat" required="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label  class="col-sm-2 col-form-label">Sifat Surat</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="sifat_surat" required="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label  class="col-sm-2 col-form-label">Perihal</label>
                      <div class="col-sm-5">
                       <textarea class="form-control" name="perihal" required=""></textarea>
                     </div>
                   </div>
                   <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-5">
                      <textarea class="form-control" name="ket" required=""></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">File</label>
                    <div class="col-sm-5">
                      <input type="file" name="berkas">
                    </div>
                  </div>


                </div>
                <p align="center"><button type="submit" class=" btn btn-primary" name="simpan">Simpan</button> <button type="reset" class=" btn btn-warning">Reset </button> </a></p>
              </div>
            </form>

            <!-- /.col-lg-6 (nested) -->
          </div>
          <!-- /.row (nested) -->
        </div>
        <!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->


<script src="../asset/js/jquery-1.10.2.js"></script>
<script src="../asset/js/bootstrap.js"></script>

<!-- Page Specific Plugins -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../asset/js/tablesorter/jquery.tablesorter.js"></script>
<script src="../asset/js/tablesorter/tables.js"></script>

</body>
</html>
