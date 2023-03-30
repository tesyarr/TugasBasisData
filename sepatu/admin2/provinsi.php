
				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h3>Provinsi</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>Nomor</th>
											<th>Nama Provinsi</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
											<?php $nomor=1;?>
											<?php $ambil=$koneksi->query("Select * FROM provinsi"); ?>
											<?php while ($pecah=$ambil->fetch_assoc()) {?>
											<tr>
												<td><?php echo $nomor;?></td>
												<td><?php echo $pecah['nama_provinsi'];?></td>
												<td>
													<a href="index1.php?page=ubah_provinsi&id=<?php echo $pecah['id_provinsi'];?>"class="btn btn-primary">Ubah</a>
													<a href="index1.php?page=hapus_provinsi&id=<?php echo $pecah['id_provinsi'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
												</td>
											</tr>
											<?php $nomor++;?>
											<?php } ?>

									</stbody>
								</table>
							</div>
						</div><!--/.module-->

					<br />

					</div><!--/.content-->
					<a href="index1.php?page=tambah_provinsi" class="btn btn-primary"> Tambah Provinsi </a>
				</div><!--/.span9-->
