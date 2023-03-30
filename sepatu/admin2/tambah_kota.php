
				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h2 align="center" >Tambah Kota</h2>
							</div> 	<br></br>
							<form method="POST" class="form-horizontal row-fluid">
										
										<div class="control-group">
											<label class="control-label" for="basicinput">Provinsi</label>
											<div class="controls">
												<select name="id_provinsi" class="span8">
												<option value="">-- Pilih Provinsi -- </option>
													<?php $ambil=$koneksi->query("SELECT * FROM provinsi");
															while ($pecah1=$ambil->fetch_assoc()) { ?>
												<option value="<?php echo $pecah1['id_provinsi']; ?>"> <?php echo $pecah1['nama_provinsi']; ?></option>
													<?php } ?>
												 </select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Nama Kota</label></div> 
											<div class="controls">
												<input type="text" id="basicinput"  class="span8" name="nama_kota">
											</div> <br> </br>
										 <br> </br> <center>
										<button class="btn btn-primary" name="simpan"> Simpan </button>
										<a href="index1.php?page=ongkir" class="btn btn-warning"> Kembali </a> <br> </br>
							</form>
							<?php
								if(isset($_POST['simpan']))
								{
									$data=$koneksi->query("SELECT max(id_kota) as kode from kota");
									$tm_cari=mysqli_fetch_array($data);
									$kode=substr($tm_cari['kode'],2,3);
									$tambah=$kode+1;
									if($tambah<10) {
									$id="IO0".$tambah; }
									else
										$id="IO".$tambah;
									$koneksi->query("INSERT INTO kota (id_kota,id_provinsi,nama_kota)
									 VALUE ('$id','$_POST[id_provinsi]','$_POST[nama_kota]')");
									echo "<script>alert('Data Berhasil Ditambahkan');</script>";
									echo "<script> location='index1.php?page=kota';</script>";
								}
							?>



										
