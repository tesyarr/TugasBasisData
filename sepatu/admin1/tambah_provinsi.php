
				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h2 align="center" >Tambah Provinsi</h2>
							</div> 	<br></br>
							<form method="POST" entype="multipart/form-data" class="form-horizontal row-fluid">
										<div class="control-group">
											<label class="control-label" for="basicinput">Nama Provinsi</label>
											<div class="controls">
												<input type="text" id="basicinput"  class="span8" name="provinsi">
											</div>
										</div>
									 <br> </br>
<center>
										<button class="btn btn-primary" name="simpan"> Simpan </button>
										<a href="index1.php?page=provinsi" class="btn btn-warning"> Kembali </a> <br> </br>
							</form>
							<?php
								if(isset($_POST['simpan']))
								{
									$data=$koneksi->query("SELECT max(id_provinsi) as kode from provinsi");
									$tm_cari=mysqli_fetch_array($data);
									$kode=substr($tm_cari['kode'],2,4);
									$tambah=$kode+1;
									if($tambah<10) {
									$id="PR000".$tambah; }
									else
										$id="PR00".$tambah;
									$koneksi->query("INSERT INTO provinsi (id_provinsi,nama_provinsi)
									 VALUE ('$id','$_POST[provinsi]')");
									echo "<script>alert('Data Berhasil Ditambahkan');</script>";
									echo "<script> location='index1.php?page=provinsi';</script>";
								}
							?>
