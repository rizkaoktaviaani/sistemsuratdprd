<?php include 'header.php'; ?>

<div id="page-wrapper">

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Surat Masuk</h1>
      <a href="tambah_surat_masuk.php?page=tambah_surat_masuk" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah Surat Masuk</a>
    </div>
  </div><!-- /.row -->
  <br>

  <div class="row">
  <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          Data Surat Masuk
        </div>
        <div class="panel-body" class="col-lg-12">
          <div class="table-responsive">
            <table class="table table-bordered table-hover tablesorter" id="dataTables">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal Terima</th>
                  <th>Nomor dan<br>Tanggal Surat</th>
                  <th>Asal Surat</th>
                  <th>Sifat Surat</th>
                  <th>Perihal</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php  
                include '../koneksi.php';
                $no = 1;
                $query_tampil = mysqli_query($koneksi, "SELECT * FROM surat_masuk" ) or die (mysqli_error($koneksi));

                while ($sm = mysqli_fetch_assoc($query_tampil)) {
                  ?>

                  <tr>
                    <td ><?= $no++; ?></td>
                    <td ><?php echo date('d-m-Y',strtotime($sm['tgl_terima'])) ?></td>
                    <td ><?= $sm['no_surat']; ?>, <br> <?php echo date('d-m-Y',strtotime($sm['tgl_surat'])) ?></td>
                    <td ><?= $sm['asal_surat']; ?></td>
                    <td ><?= $sm['sifat_surat']; ?></td>
                    <td ><?= $sm['perihal']; ?></td>
                    <td align="center">
                      <a class="btn btn-info"href="edit_suratmasuk.php?id_sm=<?= $sm['id_sm'];  ?>"  ><i class="fa fa-edit"></i></a>
                      <a class="btn btn-danger" href="delete_suratmasuk.php?id_sm=<?= $sm['id_sm'];  ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')"><i class="fa fa-trash-o"></i></a> 
                      <a class="btn btn-warning"href="detail_suratmasuk.php?id_sm=<?= $sm['id_sm'];  ?>"  ><i class="fa fa-eye"></i></a>
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

<!-- Page Specific Plugins -->
    <script src="../asset/js/dataTables/jquery.dataTables.min.js"></script>
    <script src="../asset/js/dataTables/dataTables.bootstrap.min.js"></script>

    <script>
            $(document).ready(function() {
                $('#dataTables').DataTable({
                });
            });
        </script>


</body>
</html>