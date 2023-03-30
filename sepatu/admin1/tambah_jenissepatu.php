
				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h2 align="center" >Tambah Jenis Baju</h2>
							</div> 	<br></br>
								<form method="POST" entype="multipart/form-data" class="form-horizontal row-fluid">
							<div class="control-group">
								  <label class="control-label" for="basicinput">Jenis Acara</label>
								<div class="controls">
									<select name="id_jenisacara" class="span8">
									<option value="">-- Pilih Acara -- </option>
										<?php $ambil=$koneksi->query("SELECT * FROM jenis_acara");
												while ($pecah1=$ambil->fetch_assoc()) { ?>
									<option value="<?php echo $pecah1['id_jenisacara']; ?>"> <?php echo $pecah1['nama_acara']; ?></option>
										<?php } ?>
									 </select>
								</div>
							</div>
							 <br> </br> <center>
							<form method="POST" entype="multipart/form-data" class="form-horizontal row-fluid">
										<div class="control-group">
											<label class="control-label" for="basicinput">Kode Jenis</label>
											<div class="controls">
												<input type="text" id="basicinput"  class="span8" name="id_jenisbaju">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Nama Jenis</label>
											<div class="controls">
												<input type="text" id="basicinput"  class="span8" name="jenisbaju">
											</div>
										</div>

										<button class="btn btn-primary" name="simpan"> Simpan </button>
										<a href="index1.php?page=jenisbaju" class="btn btn-warning"> Kembali </a>
							</form>
							<?php
								if(isset($_POST['simpan']))
								{
									$koneksi->query("INSERT INTO jenis_baju (id_jenisbaju,nama_jenisbaju,id_jenisacara)
									 VALUE ('$_POST[id_jenisbaju]','$_POST[jenisbaju]','$_POST[id_jenisacara]')");
									echo "<script>alert('Data Berhasil Ditambahkan');</script>";
									echo "<script> location='index1.php?page=jenisbaju';</script>";
								}
							?>
