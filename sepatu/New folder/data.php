keba<?php
$koneksi= new mysqli("localhost","root","","sepatu");
session_start();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$benar=$_SESSION['ID_pembeli'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hijack</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/animate.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="style.css" rel="stylesheet" type="text/css" />
	<link href="http://localhost/css/style.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<header id="header">
        <nav class="navbar navbar-default navbar-static-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   <div class="navbar-brand">
						<a href="index.php?home.php"><h1>Hijack</h1></a>
					</div>
                </div>
                   <div class="navbar-collapse collapse">
					<div class="menu">
					<nav>
						<ul class="nav nav-tabs" role="tablist">
						<li  role="presentation">
							<form  method="get"><br>
								<input type="text"  class="form-control" name="cari" placeholder="search">
							</form>
								<?php if(isset($_GET['cari'])) {
										$cari=$_GET['cari'];
										echo "<script>location='index.php?page=produk&id=$cari';</script>";	}?>
							</li>
							<li role="presentation"><a href="index.php?home.php">Home</a></li>
							<li role="presentation"><a href="index.php?page=produk">Produk</a>
							<ul>
								<?php $ambil=$koneksi->query("SELECT * FROM jenis_sepatu");
								  while ($pecah=$ambil->fetch_assoc()) { ?>
								<li role="presentation"><a href="index.php?page=jenis&id=<?php echo $pecah['kode_jenis']; ?>"><?php echo $pecah['nama_jenis']; ?></a></li>
								  <?php } ?>
							</ul> </li>
							<li role="presentation"><a href="http://localhost/sepatu/web1/keranjang.php">Keranjang</a></li>

							<?php if (isset($_SESSION['ID_pembeli'])) {?>
								<?php if (isset($_SESSION['keranjang'])) { ?>
									<li role="presentation"><a href="http://localhost/sepatu/web1/checkout.php">Checkout</a></li>
								<?php }  ?>
								<li role="presentation"><a href="http://localhost/login1/logout.php" onclick="return confirm ('Apakah Anda yakin ingin log out?')">log out</a></li>
								<li role="presentation"><a href="http://localhost//sepatu/web1/data.php">Saya</a></li>
							<?php } else { ?>
								<?php if (isset($_SESSION['keranjang'])) { ?>
									<li role="presentation"><a href="http://localhost/sepatu/web1/checkout.php">Checkout</a></li>
								<?php }?>
								<li role="presentation"><a href="http://localhost/login1/index.php" >Log in</a></li>
								<?php }?>
						</ul>
					</nav>
					</div>
				</div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
	<section class="action">
		<div class="container">
			<div class="left-text hidden-xs">
				<h4>Data Saya</h4>
				<?php  $ambil=$koneksi->query("SELECT * FROM pembeli where ID_pembeli='$benar'");
						$sepatuu=$ambil->fetch_assoc()?>
				<p>
				<h5>Username &nbsp; &nbsp; &nbsp; &nbsp;: <?php echo $sepatuu[ID_pembeli]; ?><br> </br>
					Nama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <?php echo $sepatuu[nama_pembeli]; ?> <br> </br>
					Nomor telepon : <?php echo $sepatuu[no_telepon]; ?>
				<br></p>
				<a href="http://localhost/sepatu/web1/selesai.php" class="btn btn-default">Lihat Riwayat Pembelian</a>
				<a href="http://localhost/sepatu/web1/editakun.php" class="btn btn-default">Edit Akun</a>

			</div>
		</div> </div>
	</section>
	<br></br>
	<br></br>
	<?php	include"footer.php"?>
