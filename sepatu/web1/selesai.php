<?php
$koneksi= new mysqli("localhost","root","","toko_sepatu");
session_start();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$benar=$_SESSION['ID_pembeli'];
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/dress(1).PNG" type="image/png">
        <title>Blanca Sport</title>
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
					<nav>
						<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item active"><a class="nav-link" href="index.php?home.php">Home</a></li>
						<li class="nav-item active"><a class="nav-link" href="http://localhost//sepatu/web1/belum.php">Belum Bayar</a></li>
							<li class="nav-item active"><a class="nav-link"href="http://localhost//sepatu/web1/kirim.php">Dikirim</a></li>
						<li class="nav-item active"><a class="nav-link" href="http://localhost//sepatu/web1/selesai.php">Selesai</a></li>
			<li class="nav-item active"><a class="nav-link" href="http://localhost//sepatu/web1/batal.php">Batal</a></li>
					<li class="nav-item active"><a class="nav-link" href="http://localhost//sepatu/web1/data.php">Saya</a></li>
						<li class="nav-item active"><a class="nav-link" href="http://localhost/login1/logout.php" onclick="return confirm ('Apakah Anda yakin ingin log out?')">log out</a></li>

						</ul>
					</nav>
					</div>
				</div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->	<br>
		<center> <br>

							<table class="table1 text-center">
									<thead>
										<tr>
											<th>Nomor</th>
											<th>Nomor Pemesanan</th>
											<th>Tanggal</th>
											<th>Total</th>
											<th>Aksi </th>
										</tr>
									</thead>
									<tbody>
											<?php $nomor=1;?>
											<?php $ambil=$koneksi->query("Select * FROM faktur_penjualan join pembeli on faktur_penjualan.ID_pembeli=pembeli.ID_pembeli
											where faktur_penjualan.ID_pembeli='$benar' AND id_status='S003'"); ?>
											<?php while ($pecah=$ambil->fetch_assoc()) {?>
											<tr>
												<td><?php echo $nomor;?></td>
												<td><?php echo $pecah['kode_fakturjual'];?> </td>
												<td><?php echo $pecah['tanggal_penjualan'];?></td>
												<td>Rp. <?php echo number_format ($pecah['total']);?></td>
												<td>
													<a href="index.php?page=detailriwayat&ids=<?php echo $pecah['kode_fakturjual'];?>" class="btn btn-info"> Detail </a>
												</td>
											</tr>
											<?php $nomor++;?>
											<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
						<br></br>
						<br></br>
						<br></br>
						<br></br>
						<br></br>
		<?php include "footer.php"?>
