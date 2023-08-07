<title>Laporan Surat Masuk</title>
<?php
	include '../koneksi.php';
?>
	<style type="text/css">
		body {
			font-size: 12px!important;
			color: #212121;
		}
		.header {
			text-align: center;
			margin: -.5rem 0;
		}
		.logo1 {
			float: ;
			position: relative;
			width: 380px;
			height: 80px;
			margin: 0 0 0 1.2rem;
		}
		.logo2 {
			float: right;
			position: relative;
			width: 80px;
			height: 80px;
			margin: 0 0 0 1.2rem;
		}
		.text {
			font-size: 15px!important;
			font-weight: bold;
			text-transform: uppercase;
		}
		#table tr th { 
			font-size: 11px;
	    } 
		#table { 
			font-size: 10px; 
		}
	</style>

	<div class="row" align="center">
		<div class="header">
			<!-- <br><div align="margin" style=" font-size: 200x;"> PEMERINTAHAN KOTA -->
			<!-- PEKANBARU </div></td></br> -->
			
		
		</div>
		<br>

			<?php
				if (isset($_POST['cetak'])) {
					$dari_tanggal = $_POST['dari_tanggal'];
					$sampai_tanggal= $_POST['sampai_tanggal'];


					if ($_REQUEST['dari_tanggal']=="" || $_REQUEST['sampai_tanggal']=="") {
						echo '<script>
								window.location.href="./index.php?page=cetak_suratmasuk";
						 	 </script>';
						die();
					}else{
						$query	= "SELECT * FROM surat_masuk WHERE tgl_surat BETWEEN '$dari_tanggal' AND '$sampai_tanggal'";
						$sql    = mysqli_query($koneksi, $query);
			?>
			<div class="col-md-10">
					<h2>LAPORAN SURAT MASUK</h2>
					<h3>SEKRETARIAT DPRD KOTA PEKANBARU</h3>
					<hr style="border: 1px solid #000;">
			</div><br><br>
				<table id="table" border="1" cellspacing="0" cellpadding="5" width="100%">
					<thead>
						<tr>
							<th width="1">No</th>
							<th>Tanggal Terima</th>
							<th>Nomor dan<br>Tanggal Surat</th>
							<th>Asal Surat</th>
							<th>Sifat Surat</th>
							<th>Perihal</th>
							<!-- <th>Tanggal Terima</th> -->
						</tr>
					</thead>
					<tbody>
						<?php
							if (mysqli_num_rows($sql) >0) {
								$no=1;
								while ($data = mysqli_fetch_array($sql)) {
									
						?>
						<td width="1"><?php echo $no++; ?></td>
						<td ><?php echo date('d-m-Y',strtotime($data['tgl_terima'])) ?></td>
	                    <td ><?php echo $data['no_surat']; ?>, <br> <?php echo date('d-m-Y',strtotime($data['tgl_surat'])) ?></td>
	                    <td ><?php echo $data['asal_surat']; ?></td>
	                    <td ><?php echo $data['sifat_surat']; ?></td>
	                    <td ><?php echo $data['perihal']; ?></td>
						
					</tbody>
					<?php			
								}
							}else{
								echo '<tr><td colspan="9"><center><h2><strong>Tidak Ada Data surat Masuk</></strong></h2></center></td></tr>';
							}
						}
						}
					?>
						
				</table>
	</div>
	<script type="text/javascript">
		window.print();
	</script>