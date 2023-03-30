
				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h3>Data Pembelian</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>Nomor</th>
											<th>Nama Pembeli</th>
											<th>Tanggal </th>
											<th>Batas Pembayaran</th>
											<th>Total</th>
											<th>Jenis Pengiriman</th>
											<th>Status</th>
											<th>Aksi </th>
										</tr>
									</thead>
									<tbody>
											<?php $nomor=1;?>
											<?php $ambil=$koneksi->query("Select * FROM (((faktur_penjualan join pembeli on faktur_penjualan.ID_pembeli=pembeli.ID_pembeli)
											join status on faktur_penjualan.id_status=status.id_status) join pengiriman on faktur_penjualan.id_tarifpengiriman=
											pengiriman.id_tarifpengiriman) join tipe on pengiriman.id_tipe=tipe.id_tipe"); ?>
											<?php while ($pecah=$ambil->fetch_assoc()) {?>
											<tr>
												<td><?php echo $nomor;?></td>
												<td><?php echo $pecah['nama_pembeli'];?> </td>
												<td><?php echo $pecah['tanggal_penjualan'];?></td>
												<td><?php echo $pecah['tanggal_jatuhtempo'];?></td>
												<td>Rp. <?php echo number_format ($pecah['total']);?></td>
												<td><?php echo  ($pecah['nama']);?></td>
												<td><?php echo  ($pecah['status']);?></td>
												<td>
													<a href="index1.php?page=Detail&id=<?php echo $pecah['kode_fakturjual'];?>" class="btn btn-info"> Detail </a>
												</td>

											</tr>
											<?php $nomor++;?>
											<?php } ?>

									</tbody>
									</thead>
								</table>
							</div>
						</div><!--/.module-->

					</div><!--/.content-->
				</div><!--/.span9-->
