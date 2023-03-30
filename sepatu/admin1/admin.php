<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h3>Data Admin</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>Nomor</th>
											<th>Username</th>
											<th>Password</th>
											<th>Nama Admin</th>
											<th>Nomor Telepon</th>
											<th>Alamat</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
											<?php $nomor=1;?>
											<?php $ambil=$koneksi->query("Select * FROM user where level='admin'"); ?>
											<?php while ($pecah=$ambil->fetch_assoc()) {?>
											<tr>
												<td><?php echo $nomor;?></td>
												<td><?php echo $pecah['ID_user'];?> </td>
												<td><?php echo $pecah['password'];?> </td>
												<td><?php echo $pecah['nama'];?></td>
												<td><?php echo $pecah['no_telepon'];?> </td>
												<td><?php echo $pecah['alamat'];?> </td>

											<td>
													<a href="index1.php?page=editadmin&id=<?php echo $pecah['ID_user'];?>"class="btn btn-primary">Ubah</a>
													<a href="index1.php?page=hapusadmin&id=<?php echo $pecah['ID_user'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
												</td> </tr>
											<?php $nomor++;?>
											<?php } ?>

									</tbody>
								</table>
							</div>
						</div><!--/.module-->


					</div><!--/.content-->
					<a href="index1.php?page=tambahadmin" class="btn btn-primary"> Tambah Admin </a>
				</div><!--/.span9-->
