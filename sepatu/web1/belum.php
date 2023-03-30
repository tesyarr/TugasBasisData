web1<?php
$koneksi= new mysqli("localhost","root","","sepatu");
session_start();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$benar=$_SESSION['ID_pembeli'];
?>
<!DOCTYPE html>

<html lang="en">
<!--================Home Banner Area =================-->
<section class="home_banner_area">
    <div class="box_1620">
      <div class="banner_inner d-flex align-items-center">
  <div class="container">
    <div class="banner_content text-center">
      <h3>Belsbee <br /></h3>
      <p>Buy the dress, Own the style</p>
      <li  role="presentation">
  							<form  method="get"><br>
  								<input type="text"  class="form-control" name="cari" placeholder="search">
  							</form>
  								<?php if(isset($_GET['cari'])) {
  										$cari=$_GET['cari'];
  										echo "<script>location='index.php?page=cari&id=$cari';</script>";	}?>
  							</li>
    </div>
  </div>
</div>
    </div>
</section>
<!--================End Home Banner Area =================-->
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="icon" href="img/dress(1).PNG" type="image/png">
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

     <!--================Header Menu Area =================-->
     <header class="header_area">
         <div class="main_menu">
           <nav class="navbar navbar-expand-lg navbar-light">
       <div class="container">
         <!-- Brand and toggle get grouped for better mobile display -->
         <a class="navbar-brand logo_h" href="http://localhost/sepatu/web1/index.php"><img src="img/logo.JPEG" alt=""></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
           <ul class="nav navbar-nav menu_nav ml-auto">

							<li class="nav-item"><a class="nav-link" href="index.php?home.php">Home</a></li>
							<li class="nav-item"><a class="nav-link"href="http://localhost//sepatu/web1/belum.php">Belum Bayar</a></li>
							<li class="nav-item"><a class="nav-link" href="http://localhost//sepatu/web1/kirim.php">Dikirim</a></li>
							<li class="nav-item"><a class="nav-link" href="http://localhost//sepatu/web1/selesai.php">Selesai</a></li>
							<li class="nav-item"><a class="nav-link" href="http://localhost//sepatu/web1/batal.php">Batal</a></li>
							<li class="nav-item"><a class="nav-link" href="http://localhost//sepatu/web1/data.php">Saya</a></li>
							<li class="nav-item"><a class="nav-link" href="http://localhost/login/logout.php" onclick="return confirm ('Apakah Anda yakin ingin log out?')">log out</a></li>

						</ul>
					</nav>
					</div>
				</div>
            </div><!--/.container-->
        </nav><!--/nav-->	<br>
    </header><!--/header-->	<center> <br>
      <br></br>
							<table class="table1 text-center">
									<thead>
										<tr>
											<th>Nomor</th>
											<th>Nomor Pemesanan</th>
											<th>Tanggal</th>
											<th>Batas Pembayaran</th>
											<th>Total</th>
											<th>Aksi </th>
											<th>Konfirmasi </th>
										</tr>
									</thead>
									<tbody>
											<?php $nomor=1;?>
											<?php $ambil=$koneksi->query(" SELECT * FROM faktur_penjualan join pembeli on faktur_penjualan.ID_pembeli=pembeli.ID_pembeli
											where faktur_penjualan.ID_pembeli='$benar' AND id_status='S001'");
											?>
											<?php while ($pecah=$ambil->fetch_assoc()); {
												$kode=$pecah['kode_fakturjual'];
												$end=$pecah['tanggal_jatuhtempo'];
												if(time() >=time($end)) {
												$koneksi->query("UPDATE faktur_penjualan SET id_status='S004' WHERE faktur_penjualan.kode_fakturjual='$kode'
												And faktur_penjualan.ID_pembeli='$benar'"); }

												?>
											<tr>
												<td><?php echo $nomor;?></td>
												<td><?php echo $pecah['kode_fakturjual'];?> </td>
												<td><?php echo $pecah['tanggal_penjualan'];?></td>
												<td><?php echo $pecah['tanggal_jatuhtempo'];?></td>
												<td>Rp. <?php echo number_format ($pecah['total']);?></td>
												<td>
													<a href="index.php?page=detailriwayat&ids=<?php echo $pecah['kode_fakturjual'];?>" class="btn btn-info"> Detail </a>
												</td>
												<td>
													<a href="http://localhost//sepatu/web1/update1.php?ids=<?php echo $pecah['kode_fakturjual']; ?>&status=bayar" class="btn btn-success" > Sudah Bayar </a>
													<a href="http://localhost//sepatu/web1/update1.php?ids=<?php echo $pecah['kode_fakturjual']; ?>&status=batal" class="btn btn-primary" > Batal </a>
												</td>

											<?php $nomor++;?>
											<?php } ?>
									</tbody>
								</table>
			</tr>
							</div>
						</div>
						<br></br>
						<br></br>
						<br></br>
						<br></br>
						<br></br>
						<br></br>
						<br></br>
						<br></br>
	<?php include "footer.php"?>
