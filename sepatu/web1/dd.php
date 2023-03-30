<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Belsbee</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
<?php
	if(isset($_GET['id'])) {
		$cari=$_GET['id']; ?>
		<div class="gallery">
			<div class="text-center">
				<h3>Hasil Pencarian untuk "<?php echo $cari; ?>"</h3>
					<div class="container">	 <br></br>
	<?php
		$data=$koneksi->query("SELECT * FROM sepatu join jenis_sepatu on sepatu.kode_jenis=jenis_sepatu.kode_jenis where
						nama_sepatu LIKE '%".$cari."%' or nama_jenis LIKE '%".$cari."%' or merk_sepatu LIKE '%".$cari."%' ");
		$jumlah=mysqli_num_rows($data);
		if($jumlah>0) {
		  while($sepatu=$data->fetch_assoc()){?>
		<div class="col-md-4">
			<img src="http://localhost/sepatu/foto/<?php echo $sepatu['gambar'];?>" alt="" class="img-responsive">
			<h4><?php echo $sepatu['nama_sepatu'];?></h4>
			<h4>(<?php echo $sepatu['merk_sepatu'];?> / <?php echo $sepatu['nama_jenis'];?>)</h4>
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
					<div class="container"> <br></br>
					<?php $data=$koneksi->query("SELECT * FROM sepatu join jenis_sepatu on sepatu.id_jenissepatu=jenis_sepatu.id_jenissepatu"); ?>
	<?php while($sepatu=$data->fetch_assoc()){?>
		<div class="col-md-4">
			<img src="http://localhost/sepatu/foto/<?php echo $sepatu['gambar'];?>" alt="" class="img-responsive">
			<h4><?php echo $sepatu['nama_sepatu'];?></h4>						<h4>(<?php echo $sepatu['merk_sepatu'];?> / <?php echo $sepatu['nama_jenis'];?>)</h4>
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

     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="js/jquery-3.3.1.min.js"></script>
     <script src="js/popper.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/stellar.js"></script>
     <script src="vendors/lightbox/simpleLightbox.min.js"></script>
     <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
     <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
     <script src="vendors/isotope/isotope.pkgd.min.js"></script>
     <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
     <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
     <script src="js/jquery.ajaxchimp.min.js"></script>
     <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
     <script src="vendors/counter-up/jquery.counterup.js"></script>
     <script src="js/mail-script.js"></script>
     <script src="js/theme.js"></script>
 </body>
</html>
