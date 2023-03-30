<?php
$koneksi=mysqli_connect("localhost","root","");
$default=mysqli_select_db($koneksi,"toko_sepatu");
session_start ();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>
<div class="gallery">
	<div class="text-center">
	<?php $ambil1=$koneksi->query("SELECT * FROM jenis_sepatu where id_jenissepatu='$_GET[id]'");
		 $sepatu1=$ambil1->fetch_assoc(); ?>
			<h2 style="color:black"><?php echo $sepatu1['nama_jenissepatu']; ?></h2>
	<div class="container">	 <br></br>
		<?php $ambil=$koneksi->query("SELECT * FROM sepatu join jenis_sepatu on sepatu.id_jenissepatu=jenis_sepatu.id_jenissepatu where sepatu.id_jenissepatu='$_GET[id]'");
				while($sepatu=$ambil->fetch_assoc()){?>
			<div class="col-md-4">
				<img src="http://localhost/sepatu/foto/<?php echo $sepatu['gambar'];?>" alt="" class="img-responsive">
						<h4><?php echo $sepatu['nama_sepatu'];?></h4>
						<h4>RP. <?php echo number_format( $sepatu['harga_jual'])?></h4>
						<a href="index.php?page=beli&id=<?php echo $sepatu['kode_sepatu']; ?>" class="btn btn-success"> Beli Sekarang </a>
						<a href="index.php?page=detail&id=<?php echo $sepatu['kode_sepatu']; ?>" class="btn btn-primary"> Detail</a>

			</div> <?php } ?>
			</div>

		</div>
	</div>
