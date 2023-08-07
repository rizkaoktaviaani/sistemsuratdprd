<?php include 'header.php'; ?>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">Laporan Surat Masuk</h1>
          </div>
        </div><!-- /.row -->
        <br>

       <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Cetak Data Surat Masuk
                                </div>
                                <div class="panel-body" class="col-lg-12">
                                    <form class="form-horizontal form-label-left" method="post" action="lap_suratmasuk.php" target="_blank">
                            <div class="item form-group">
                                <label class="col-sm-2 col-form-label" class="required">Dari Tanggal</label>
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <input type="date" name="dari_tanggal" class="form-control" id="tanggal">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-sm-2 col-form-label" class="required">Sampai Tanggal</label>
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <input type="date" name="sampai_tanggal" class="form-control" id="tanggal2">
                                </div>
                            </div>
                            <br/>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-offset-3">
                                    <button type="submit" name="cetak" class="btn btn-success btn-sm"><i class="fa fa-print"></i> Cetak</button>
                                    <a href="cetak_suratmasuk.php?" class="btn btn-warning btn-sm"><i class="fa fa-refresh"></i> Refresh</a>
                                </div>  
                            </div>
                        </form>
                            </div>
                        </div>
                    </div>
                </div>

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