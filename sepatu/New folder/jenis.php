<div class="gallery">
	<div class="text-center">
	<?php $ambil1=$koneksi->query("SELECT * FROM jenis_sepatu where id_jenissepatu='$_GET[id]'");
		 $sepatuu1=$ambil1->fetch_assoc(); ?>
			<h2 style="color:black"><?php echo $sepatuu1['nama_jenissepatu']; ?></h2>
	<div class="container">	 <br></br>
		<?php $ambil=$koneksi->query("SELECT * FROM sepatuu join jenis_sepatu on sepatuu.id_jenissepatu=jenis_sepatu.id_jenissepatu where sepatuu.id_jenissepatu='$_GET[id]'");
				while($sepatuu=$ambil->fetch_assoc()){?>
			<div class="col-md-4">
				<img src="http://localhost/sepatu/foto/<?php echo $sepatuu['gambar'];?>" alt="" class="img-responsive">
						<h4><?php echo $sepatuu['nama_sepatu'];?></h4>
						<h4>RP. <?php echo number_format( $sepatuu['harga_jual'])?></h4>
						<a href="index.php?page=beli&id=<?php echo $sepatuu['kode_sepatu']; ?>" class="btn btn-success"> Beli Sekarang </a>
						<a href="index.php?page=detail&id=<?php echo $sepatuu['kode_sepatu']; ?>" class="btn btn-primary"> Detail</a>

			</div> <?php } ?>
			</div>

		</div>
	</div>
