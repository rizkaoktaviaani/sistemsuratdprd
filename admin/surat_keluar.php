<?php include 'header.php'; ?>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">Surat Keluar</h1>
            <a href="tambah_surat_keluar.php?page=tambah_surat_keluar" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah Surat Keluar</a>
          </div>
        </div><!-- /.row -->
        <br>

       <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Data Surat Keluar
                                </div>
                                <div class="panel-body" class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables">
                                            <thead>
                                                <tr>
                                                  <th>No</th>
                                                  <th>Nomor dan<br>Tanggal Surat</th>
                                                  <th>Tujuan Surat</th>
                                                  <th>Sifat Surat</th>
                                                  <th>Perihal</th>
                                                  <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php  
                                                include '../koneksi.php';
                                                $no = 1;
                                                $query_tampil = mysqli_query($koneksi, "SELECT * FROM surat_keluar" ) or die (mysqli_error($koneksi));

                                                while ($id_sk = mysqli_fetch_assoc($query_tampil)) {
                                            ?>

                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $id_sk['no_surat']; ?>, <br> <?php echo date('d-m-Y',strtotime($id_sk['tgl_surat'])) ?></td>
                                                    <td><?= $id_sk['tujuan_surat']; ?></td>
                                                    <td><?= $id_sk['sifat_surat']; ?></td>
                                                    <td><?= $id_sk['perihal']; ?></td>
                                                    <td align="center">
                                                        <a class="btn btn-info"  href="edit_suratkeluar.php?id_sk=<?= $id_sk['id_sk'];  ?>"  ><i class="fa fa-edit"></i></a>
                                                        <a class="btn btn-danger" href="delete_suratkeluar.php?id_sk=<?= $id_sk['id_sk'];  ?>"  onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" ><i class="fa fa-trash-o"></i></a> 
                                                        <a class="btn btn-warning"  href="detail_suratkeluar.php?id_sk=<?= $id_sk['id_sk'];  ?>"  ><i class="fa fa-eye"></i></a>
                                                    </td>
                                                 </tr>
                                 
                                                <?php  
                                                     }
                                                ?>     
                                            </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="../asset/js/jquery-1.10.2.js"></script>
    <script src="../asset/js/bootstrap.js"></script>
    <script src="../asset/js/dataTables/jquery.dataTables.min.js"></script>
    <script src="../asset/js/dataTables/dataTables.bootstrap.min.js"></script>

    <script>
            $(document).ready(function() {
                $('#dataTables').DataTable({
                        responsive: true
                });
            });
        </script>

  </body>
</html>