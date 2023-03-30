
				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h2 align="center" >Form Admin</h2>
							</div> 	<br></br>
							<?php
									$ambil=$koneksi->query("SELECT * FROM user WHERE level='admin'");
									$pecah=$ambil->fetch_assoc();
								?>
							<form method="POST" entype="multipart/form-data" class="form-horizontal row-fluid">
										<div class="control-group">
											<label class="control-label" for="basicinput">Username</label>
											<div class="controls">
												<input type="text" id="basicinput" name="ID_user" class="span8"  value="<?php echo $pecah['ID_user'];?>">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Nama </label>
											<div class="controls">
												<input type="text" id="basicinput"  name="nama" class="span8"  value="<?php echo $pecah['nama'];?>">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Password </label>
											<div class="controls">
												<input type="text" id="basicinput"  name="password"  class="span8"  value="<?php echo $pecah['password'];?>">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Nomor Telepon </label>
											<div class="controls">
												<input type="text" id="basicinput"  name="nomor"  class="span8"  value="<?php echo $pecah['no_telepon'];?>">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Alamat</label>
											<div class="controls">
												<input type="text" id="basicinput"  class="span8"  name="alamat"  value="<?php echo $pecah['alamat'];?>">
											</div>
										</div> <br></br>
										<center>
										<button class="btn btn-primary" name="simpan"> Simpan </button>
							</form>
							<?php
							if(isset($_POST['simpan']))
								{

									$koneksi->query("UPDATE user SET ID_user='$_POST[ID_user]',password='$_POST[password]',nama='$_POST[nama]',no_telepon='$_POST[nomor]',
									alamat='$_POST[alamat]' where level='admin' ");
									echo "<script>alert('Data Berhasil Diubah');</script>";
									echo "<script> location='index1.php?page=profile';</script>";
								}
