<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h2 align="center" >Form Edit</h2>
								<?php
									$ambil=$koneksi->query(" SELECT * FROM kota join provinsi on kota.id_provinsi=provinsi.id_provinsi  WHERE id_kota='$_GET[id]'");
									$pecah=$ambil->fetch_assoc();
								?>
								<br></br>
								<form method="POST" class="form-horizontal row-fluid">
										<div class="control-group">
											<label class="control-label" for="basicinput">Nama Kota</label>
											<div class="controls">
												<input type="text" id="basicinput"  class="span8" name="kota" value ="<?php echo $pecah['kota']?>">
											</div> <br> </br>
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
									 <br> </br> <center>
										<button class="btn btn-primary" name="simpan"> Simpan </button>
										<a href="index1.php?page=kota" class="btn btn-warning"> Kembali </a> <br> </br>
							</form>
							<?php
								if(isset($_POST['simpan']))
								{
									$koneksi->query("UPDATE kota SET kota='$_POST[kota]', id_provinsi='$_POST[id_provinsi]' where id_kota='$_GET[id]'");
									echo "<script>alert('Data Berhasil Diubah');</script>";
									echo "<script> location='index1.php?page=kota';</script>";
								}



							?>
