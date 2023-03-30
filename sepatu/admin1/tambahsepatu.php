				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h2 align="center" >Tambah Produk</h2>
							</div> 	<br></br>
							<form method="POST" enctype="multipart/from-data" class="form-horizontal row-fluid">
										<div class="control-group">
											<label class="control-label" for="basicinput">Kode sepatu</label>
											<div classepatutrols">
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
											<label class="control-label" for="basicinput">Harga Jual</label>
											<div class="controls">
												<div class="input-append">
													<input type="number" class="span8" name="harga_jual"><span class="add-on">Rp</span>
												</div>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Stok</label>
											<div class="controls">
												<input type="number" id="basicinput"  class="span8" name="stok">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label" for="basicinput">Gambar</label>
											<div class="controls">
												<input type="text" id="basicinput"  class="form-control" name="gambar">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Deskripsi sepatu</label>
											<div class="controls">
												<input type="text" id="basicinput"  class="span8" name="deskripsi">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Jenis sepatu</label>
											<div class="controls">
												<select name="id_jenissepatu" class="span8">
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
										<a href="index1.php?page=sepatu" class="btn btn-warning"> Kembali </a>
							</form>
							<?php
								if(isset($_POST['simpan']))
								{

									$sql=$koneksi->query("INSERT INTO sepatu (kode_sepatu,nama_sepatu,id_jenissepatu,harga_jual,stok,gambar,deskripsi)
									 VALUES ('$_POST[kode_sepatu]','$_POST[nama_sepatu]','$_POST[id_jenissepatu]','$_POST[harga_jual]','$_POST[stok]','$_POST[gambar]','$_POST[deskripsi]')");
									 if(isset($sql)===TRUE) {
									echo "<script>alert('Data Berhasil Ditambahkan');</script>";
									echo "<script> location='index1.php?page=sepatu';</script>";
									 }
									else
									 { echo "<script>alert('Data Gagal Ditambahkan');</script>";
									}
								}

							?>
