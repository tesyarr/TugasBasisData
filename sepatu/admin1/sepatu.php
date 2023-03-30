				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h3>sepatu</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>Kode sepatu</th>
											<th>Nama sepatu</th>
											<th>Harga Jual</th>
											<th>Stok</th>
											<th>Nama Jenis</th>
											<th>Foto</th>
											<th>Deskripsi</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
											<?php $ambil=$koneksi->query(" SELECT* FROM sepatu join jenis_sepatu on sepatu.id_jenissepatu=jenis_sepatu.id_jenissepatu"); ?>
											<?php while ($pecah=$ambil->fetch_assoc()) {?>
											<tr>
												<td><?php echo $pecah['kode_sepatu'];?> </td>
												<td><?php echo $pecah['nama_sepatu'];?></td>
												<td>Rp. <?php echo number_format( $pecah['harga_jual']);?></td>
												<td><?php echo $pecah['stok'];?></td>
												<td><?php echo $pecah['nama_jenissepatu'];?></td>
												<td>
													<img src="http://localhost/sepatu/foto/<?php echo $pecah['gambar'];?>" width="40" height="70" >
												</td>

												<td><?php echo $pecah['deskripsi'];?></td>
												<td>
													<a href="index1.php?page=ubah_sepatu&id=<?php echo $pecah['kode_sepatu'];?>" class="btn btn-primary">Ubah</a> <br></br>
													<a href="index1.php?page=hapus_sepatu&id=<?php echo $pecah['kode_sepatu'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
												</td>

											<?php } ?>

									</tbody>
								</table>
							</div>
						</div><!--/.module-->


					</div><!--/.content-->
					<a href="index1.php?page=tambah_sepatu" class="btn btn-primary"> Tambah Produk </a>
				</div><!--/.span9-->
