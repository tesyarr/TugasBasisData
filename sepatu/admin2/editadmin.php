
				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h2 align="center" >Form Edit Admin</h2>
								<?php
									$ambil=$koneksi->query("SELECT * FROM user WHERE ID_user='$_GET[id]'");
									$pecah=$ambil->fetch_assoc ();
								?>
							</div> 	<br></br>
							<form method="POST" entype="multipart/form-data" class="form-horizontal row-fluid">
										<div class="control-group">
											<label class="control-label" for="basicinput">Username</label>
											<div class="controls">
												<input type="text" id="basicinput"  class="span8" name="ID_user" placeholder ="<?php echo $pecah['ID_user']?>">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Password</label>
											<div class="controls">
												<input type="text" id="basicinput"  class="span8" name="password" placeholder ="<?php echo $pecah['password']?>">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Nama </label>
											<div class="controls">
												<input type="text" id="basicinput"  class="span8" name="nama" placeholder ="<?php echo $pecah['nama']?>">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Nomor Telepon</label>
											<div class="controls">
												<input type="text" id="basicinput"  class="span8" name="nomor" placeholder="<?php echo $pecah['no_telepon']?>">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Alamat</label>
											<div class="controls">
												<input type="text" id="basicinput"  class="span8" name="alamat" placeholder ="<?php echo $pecah['alamat']?>">
											</div>
										</div> <br> </br>
<center>
										<button class="btn btn-primary" name="simpan"> Simpan </button>
										<a href="index1.php?page=admin" class="btn btn-warning"> Kembali </a> <center>
							</form>
							<?php
								if(isset($_POST['simpan']))
								{

									$koneksi->query("UPDATE user SET ID_user='$_POST[ID_user]',password='$_POST[password]',nama='$_POST[nama]',no_telepon='$_POST[nomor]',
									alamat='$_POST[alamat]' where ID_user='$_GET[id]'");
									echo "<script>alert('Data Berhasil Diubah');</script>";
									echo "<script> location='index1.php?page=admin';</script>";
								}
							?>



										
