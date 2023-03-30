<?php
									$ambil=$koneksi->query("SELECT * FROM user WHERE level='admin'");
									$pecah=$ambil->fetch_assoc();
								?>
				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h2 align="center" >Selamat Datang <?php echo $pecah['nama']; ?>, Enjoy with Belsbee!</h2>
							</div> 	<br></br>

							<form method="POST" entype="multipart/form-data" class="form-horizontal row-fluid">

										<div class="control-group">
											<label class="control-label" for="basicinput">Nama </label>
											<div class="controls">
												<input type="text" id="basicinput"  class="span8" readonly value="<?php echo $pecah['nama'];?>">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Nomor Telepon </label>
											<div class="controls">
												<input type="text" id="basicinput"  class="span8" readonly value="<?php echo $pecah['no_telepon'];?>">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Alamat</label>
											<div class="controls">
												<input type="text" id="basicinput"  class="span8" readonly value="<?php echo $pecah['alamat'];?>">
											</div>
										</div> <br></br>
							</form>
