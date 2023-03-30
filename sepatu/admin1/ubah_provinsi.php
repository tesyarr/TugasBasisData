<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h2 align="center" >Form Edit</h2>
								<?php
									$ambil=$koneksi->query("SELECT * FROM provinsi WHERE id_provinsi='$_GET[id]'");
									$pecah=$ambil->fetch_assoc ();
								?>
								<br></br>
								<form method="POST" class="form-horizontal row-fluid">
										<div class="control-group">
											<label class="control-label" for="basicinput">Nama Provinsi</label>
											<div class="controls">
												<input type="text" id="basicinput"  class="span8" name="provinsi" value ="<?php echo $pecah['nama_provinsi']?>">
											</div> <br> </br>
										 <br> </br> <center>
										<button class="btn btn-primary" name="simpan"> Simpan </button>
										<a href="index1.php?page=provinsi" class="btn btn-warning"> Kembali </a> <br> </br>
							</form>
							<?php
								if(isset($_POST['simpan']))
								{
									$koneksi->query("UPDATE provinsi SET nama_provinsi='$_POST[provinsi]' where id_provinsi='$_GET[id]'");
									echo "<script>alert('Data Berhasil Diubah');</script>";
									echo "<script> location='index1.php?page=provinsi';</script>";
								}



							?>
