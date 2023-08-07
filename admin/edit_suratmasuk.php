<?php include 'header.php'; ?>
 <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Edit Surat Masuk</h1>
                            
                        </div>
                        <!-- /.col-lg-12 -->
                    </div> 
                <?php 
                include '../koneksi.php';
                $id_sm = $_GET['id_sm'];
                $query_data = mysqli_query($koneksi, "SELECT * FROM surat_masuk WHERE id_sm='$id_sm'");
                while ($id = mysqli_fetch_array($query_data)) {
                ?>

                <div class="row">
                 <form action="proses_editsuratmasuk.php" method="post" enctype="multipart/form-data">
                        <div class="container">
                          <div class="form-group row">
                            <div class="form-group row">
                              <label  class="col-sm-2 col-form-label">Tanggal Terima</label>
                              <div class="col-sm-5">
                              <input type="hidden" name="id_sm" value="<?php echo $id['id_sm'];?>">
                              <input type="date" class="form-control" name="tgl_terima" id="tanggal" placeholder="" value="<?= $id['tgl_terima']?>" >
                              </div>
                            </div>

                             <div class="form-group row">
                              <label  class="col-sm-2 col-form-label">No Surat</label>
                              <div class="col-sm-5">
                                <input type="text" class="form-control" name="no_surat" required="" id="no_surat" value="<?php echo $id['no_surat']; ?>">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label  class="col-sm-2 col-form-label">Tanggal Surat</label>
                              <div class="col-sm-5">
                                <input type="date" class="form-control" name="tgl_surat" id="tanggal" placeholder="" value="<?php echo $id['tgl_surat']; ?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label  class="col-sm-2 col-form-label">Asal Surat</label>
                              <div class="col-sm-5">
                                <input type="text" class="form-control" name="asal_surat" id="asal_surat" value="<?php echo $id['asal_surat']; ?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label  class="col-sm-2 col-form-label">Sifat Surat</label>
                              <div class="col-sm-5">
                                <input type="text" class="form-control" name="sifat_surat" id="sifat_surat" value="<?php echo $id['sifat_surat']; ?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label  class="col-sm-2 col-form-label">Perihal</label>
                              <div class="col-sm-5">
                               <textarea class="form-control" name="perihal" id="perihal" ><?php echo $id['perihal'];?></textarea>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label  class="col-sm-2 col-form-label">Keterangan</label>
                              <div class="col-sm-5">
                                <textarea class="form-control" name="ket" id="ket" ><?php echo $id['ket'];?></textarea>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label  class="col-sm-2 col-form-label">File</label>
                              <div class="col-sm-5">
                                <input type="file" name="file">
                                <small>*Kosongkan jika tidak ingin mengubah file</small>
                              </div>
                            </div>

                          
                        </div>
                        <p align="center"><button type="submit" class=" btn btn-success" name="simpan">Edit</button>
                        <a href="surat_masuk.php" class="btn btn-primary">Kembali</a> </p>
                    
                        <br>
                        <br>
                        
                      </form>
                </div>
                <?php } ?>
      </div>

        <script src="../asset/js/jquery-1.10.2.js"></script>
        <script src="../asset/js/bootstrap.js"></script>
        <script src="../asset/js/tablesorter/jquery.tablesorter.js"></script>
        <script src="../asset/js/tablesorter/tables.js"></script>

    </body>
</html>