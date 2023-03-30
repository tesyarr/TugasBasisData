
				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h2 align="center" >Form Edit Admin</h2>
							</div> 	<br></br>
							<?php
									$ambil=$koneksi->query("SELECT * FROM user WHERE ID_user='$_GET[id]'");
									$pecah=$ambil->fetch_assoc();
								?>
							<form method="POST" entype="multipart/form-data" class="form-horizontal row-fluid">
										<div class="control-group">
											<label class="control-label" for="basicinput">Nama </label>
											<div class="controls">
												<input type="text" id="basicinput"  class="span8" name="nama">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Nomor Telepon</label>
											<div class="controls">
												<input type="text" id="basicinput"  class="span8" name="nomor">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Alamat</label>
											<div class="controls">
												<input type="text" id="basicinput"  class="span8" name="alamat">
											</div>
										</div>

										<button class="btn btn-primary" name="simpan"> Simpan </button>
										<a href="index1.php?page=admin" class="btn btn-warning"> Kembali </a>
							</form>
							<?php
								if(isset($_POST['simpan']))
								{
									$data=$koneksi->query("SELECT max(ID_user) as kode from user");
									$tm_cari=mysqli_fetch_array($data);
									$kode=substr($tm_cari['kode'],1,4);
									$tambah=$kode+1;
									if($tambah<10) {
									$id="A000".$tambah; }
									else
										$id="A00".$tambah;
									$level='admin';
									$koneksi->query("INSERT INTO user (ID_user,password,nama,alamat,no_telepon,level)
									 VALUE ('$id','$id','$_POST[nama]','$_POST[alamat]','$_POST[nomor]','$level')");
									echo "<script>alert('Data Berhasil Ditambahkan');</script>";
									echo "<script> location='index1.php?page=admin';</script>";
								}
							?>
