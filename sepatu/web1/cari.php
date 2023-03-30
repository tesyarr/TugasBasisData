<?php
$koneksi= new mysqli("localhost","root","","toko_sepatu");
session_start();
?>
<?php
	if(isset($_GET['id'])) {
		$cari=$_GET['id']; ?>
		<div class="gallery">
			<div class="text-center">
				<h3>Hasil Pencarian untuk "<?php echo $cari; ?>"</h3>
					<div class="container">	 <br></br>
	<?php
		$data=$koneksi->query("SELECT * FROM sepatu join jenis_sepatu on sepatu.id_jenissepatu=jenis_sepatu.id_jenissepatu where
						nama_sepatu LIKE '%".$cari."%' or nama_jenissepatu LIKE '%".$cari."%' ");
		$jumlah=mysqli_num_rows($data);
		if($jumlah>0) {
		  while($sepatu=$data->fetch_assoc()){?>
		<div class="col-md-4">
			<img src="http://localhost/sepatu/foto/<?php echo $sepatu['gambar'];?>" width="200" height="200" class="img-responsive">
			<h4><?php echo $sepatu['nama_sepatu'];?></h4>
			<h4>( <?php echo $sepatu['nama_jenissepatu'];?>)</h4>
			<h4>RP. <?php echo number_format( $sepatu['harga_jual']);?></h4>
			<form method="POST">
				<?php if($sepatu['stok']>0) { ?>
					<a href="index.php?page=beli&id=<?php echo $sepatu['kode_sepatu']; ?>" class="btn btn-success"> Beli Sekarang </a>
					<?php } else { ?>
					<button class="btn btn-succes" disabled > Beli Sekarang </button>
					<?php } ?>
					<a href="index.php?page=detail&id=<?php echo $sepatu['kode_sepatu']; ?>" class="btn btn-info"> Detail</a>
			</form>
		</div>
		<?php }
	 }
	else  { ?>
			<br></br>

		<?php	echo	"<h3>Maaf, hasil pencarian tidak ditemukan</h3>";	?>
			<br> </br>
			<br> </br>
			<br> </br>
			<br> </br>
			<br> </br>

	<?php } }
	else { ?>
		<div class="gallery">
			<div class="text-center">
				<h2>Produk Kami</h2>
					<div class="container">
					<?php $data=$koneksi->query("SELECT * FROM sepatu join jenis_sepatu on sepatu.id_jenissepatu=jenis_sepatu.id_jenissepatu"); ?>
	<?php while($sepatu=$data->fetch_assoc()){?>
		<div class="col-md-4">
			<img src="http://localhost/sepatu/foto/<?php echo $sepatu['gambar'];?>" alt="" class="img-responsive">
			<h4><?php echo $sepatu['nama_sepatu'];?></h4>						<h4>(<?php echo $sepatu['nama_jenis'];?>)</h4>
			<h4>RP. <?php echo number_format( $sepatu['harga_jual'])?></h4>
			<form method="POST">
				<?php if($sepatu['stok']>0) { ?>
					<a href="index.php?page=beli&id=<?php echo $sepatu['kode_sepatu']; ?>" class="btn btn-success"> Beli Sekarang </a>
					<?php } else { ?>
					<button class="btn btn-succes" disabled > Beli Sekarang </button>
					<?php } ?>
					<a href="index.php?page=detail&id=<?php echo $sepatu['kode_sepatu']; ?>" class="btn btn-primary"> Detail</a>
			</form>

		</div>
	<?php } }?>
	</div>
</div>
</div>
