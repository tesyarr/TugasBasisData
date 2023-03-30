
				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h2 align="center" >Produk Baru</h2>
							</div> 	<br></br>
							<form method="POST" enctype="multipart/from-data" class="form-horizontal row-fluid">
										<div class="control-group">
											<label class="control-label" for="basicinput">Kode sepatu</label>
											<div class="controls">
												<input type="text" id="basicinput"  class="span8" name="kode_sepatu">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Nama sepatu</label>
											<div class="controls">
												<input type="text" id="basicinput"  class="span8" name="nama_sepatu">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Harga</label>
											<div class="controls">
												<div class="input-append">
													<input type="number" class="span8" name="harga_beli"><span class="add-on">Rp</span>
												</div>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Jenis sepatu</label>
											<div class="controls">
												<select name="kode_jenissepatu" class="span8">
												<option value="">-- Pilih Jenis sepatu -- </option>
													<?php $ambil=$koneksi->query("SELECT * FROM jenis_sepatu");
															while ($pecah=$ambil->fetch_assoc()) { ?>
												<option value="<?php echo $pecah['id_jenissepatu']; ?>"> <?php echo $pecah['nama_jenissepatu']; ?></option>
													<?php } ?>
												 </select>
											</div>
										</div>
										<br></br>
										<button class="btn btn-primary" name="simpan" value="upload" > Simpan</button>
							</form>
							<?php
								if(isset($_POST['simpan']))
								{
									$sql=$koneksi->query("INSERT INTO sepatuu (kode_sepatu,nama_sepatu,harga_beli,kode_jenissepatu)
									 VALUES ('$_POST[kode_sepatu]','$_POST[nama_sepatu]','$_POST[harga_beli]','$kode_jenissepatu')");
									 if(isset($sql)===TRUE) {
									echo "<script>alert('Data Berhasil Ditambahkan');</script>";
									echo "<script> location='index1.php?page=sepatuu';</script>";
									 }
									else
									 { echo "<script>alert('Data Gagal Ditambahkan');</script>";
									}
								}

							?>
