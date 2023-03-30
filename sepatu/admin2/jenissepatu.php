
				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h3>Jenis sepatu</h3>

							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>Nomor</th>
											<th>Nama Jenis</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
											<?php $nomor=1;?>
											<?php $ambil=$koneksi->query("SELECT * FROM jenis_acara join jenis_sepatu on jenis_acara.id_jenisacara=jenis_sepatu.id_jenisacara"); ?>
											<?php while ($pecah=$ambil->fetch_assoc()) {?>
											<tr>
												<td><?php echo $nomor;?></td>
												<td><?php echo $pecah['nama_jenissepatu'];?></td>
												<td><?php  echo $pecah['nama_acara'];?></td>
												<td>
													<a href="index1.php?page=ubah_jenissepatu&id=<?php echo $pecah['id_jenissepatu'];?>"class="btn btn-primary">Ubah</a>
													<a href="index1.php?page=hapus_jenis&id=<?php echo $pecah['id_jenissepatu'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
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
					<a href="index1.php?page=tambah_jenissepatu" class="btn btn-primary"> Tambah Jenis sepatu </a>
				</div><!--/.span9-->
