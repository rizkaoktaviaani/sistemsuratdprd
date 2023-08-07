<?php include 'header.php';
 require_once("../koneksi.php"); 
?>
 <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Setting</h1>
                            
                        </div>
                        <!-- /.col-lg-12 -->
                    </div> 
                <?php 
                $id = $_SESSION['id'];
                $query_data = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'");
                while ($id_pegawai = mysqli_fetch_array($query_data)) {
                ?>
              <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form action="proses_setting.php" method="post">
                                            <div class="container">
                                               <div class="form-group row">
                            <div class="form-group row">
                              <label  class="col-sm-2 col-form-label">Username</label>
                              <div class="col-sm-5">
                               <input type="hidden" name="iduser" value="<?php echo $id_pegawai['id'];?>">
                              <input type="text" class="form-control" name="username" value="<?= $id_pegawai['username']?>" >
                              </div>
                            </div>
                            <div class="form-group row">
                              <label  class="col-sm-2 col-form-label">Nama</label>
                              <div class="col-sm-5">
                                <input type="text" class="form-control" name="nama" value="<?= $id_pegawai['nama']?>" >
                              </div>
                            </div>

                             <div class="form-group row">
                              <label  class="col-sm-2 col-form-label">Password Baru</label>
                              <div class="col-sm-5">
                                <input type="password" class="form-control" name="passbaru" placeholder="Masukkan Password Baru Anda">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="disabledSelect" class="col-sm-2 col-form-label">Status</label>
                              <div class="col-sm-5">
                                <input type="text" class="form-control" name="level" id="disabledInput" value="<?= $id_pegawai['level']?>" disabled>
                              </div>
                            </div>

                            

                            </div>
                        <p align="center"><button type="submit" class=" btn btn-primary" name="simpan-data">Simpan</button> <button type="reset" class=" btn btn-warning">Reset </button> </a></p>

                        <br>
                        <br>
                        
                      </form>
                </div>
                <?php } ?>
                                      
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
                       </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
                  <script src="../asset/js/jquery-1.10.2.js"></script>
        <script src="../asset/js/bootstrap.js"></script>
        <script src="../asset/js/tablesorter/jquery.tablesorter.js"></script>
        <script src="../asset/js/tablesorter/tables.js"></script>

    </body>
</html>

