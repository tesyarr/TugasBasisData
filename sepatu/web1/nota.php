<?php
	 $koneksi= new mysqli("localhost","root","","toko_sepatu");
	 session_start();
	   error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	 $benar=$_SESSION['ID_pembeli'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello World</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="outer-container">
    <header class="site-header">
        <div class="top-header-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 flex align-items-center">
                        <div class="header-bar-text d-none d-lg-block">
                            <p>Hello world, My name is Blanca</p>
                        </div><!-- .header-bar-text -->
                    </div><!-- .col -->

                    <div class="col-12 col-lg-6 flex justify-content-between justify-content-lg-end align-items-center">
                        <div class="header-bar-social d-none d-md-block">
                            <ul class="flex align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .header-bar-social -->

                        <div class="header-bar-search d-none d-md-block">
                            <form>
                                <input type="search" placeholder="Search">
                            </form>
                        </div><!-- .header-bar-search -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container-fluid -->
        </div><!-- .top-header-bar -->

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="site-branding flex flex-column align-items-center">
                        <h1 class="site-title"><a href="index.php?home.php" rel="home">Blanca</a></h1>
                        <p class="site-description">Sport</p>
                    </div><!-- .site-branding -->
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
								<li role="presentation"><a href="index.php?page=jenis&id=<?php echo $pecah['id_jenissepatu']; ?>"><?php echo $pecah['nama_jenis']; ?></a></li>
								  <?php } ?>
							</ul> </li>
							<li role="presentation"><a href="http://localhost/sepatu/web1/keranjang.php">Keranjang</a></li>
							<?php if (isset($_SESSION['ID_pembeli'])) {?>
								<?php if (isset($_SESSION['keranjang'])) { ?>
									<li role="presentation"><a href="http://localhost/sepatu/web1/checkout.php">Checkout</a></li>
								<?php }  ?>
								<li role="presentation"><a href="http://localhost/login1/logout.php" onclick="return confirm ('Apakah Anda yakin ingin log out?')">log out</a></li>
								<li role="presentation"><a href="http://localhost/sepatu/web1/data.php">Saya</a></li>
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

	<div class="gallery">
		<div class="text-center">
			<h2 >Detail Pembelian</h2> </div>
			<?php
				$ambil=$koneksi->query(" SELECT * FROM ((((faktur_penjualan join pembeli on faktur_penjualan.ID_pembeli=pembeli.ID_pembeli) join pengiriman
					on faktur_penjualan.id_tarifpengiriman=pengiriman.id_tarifpengiriman) join tipe on pengiriman.id_tipe=tipe.id_tipe) join kota on pengiriman.id_kota=
					kota.id_kota) join provinsi on kota.id_provinsi=provinsi.id_provinsi
				where faktur_penjualan.kode_fakturjual='$_GET[ids]'");
				$detail=$ambil-> fetch_assoc();
			 ?>
			 <div class="row2">
			 <strong style="color:black;"> <?php echo $detail['nama_pembeli'];?></strong> <br> </br>
			 <p style="color:black;">
				Nomor Pemesanan &nbsp;: <?php echo $detail['kode_fakturjual']; ?> <br>
				Tanggal &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <?php echo $detail['tanggal_penjualan'];?>
			 </p>
			 <p style="color:black;">
				Nomor Telepon &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:  <?php echo $detail['no_telepon']; ?> <br>
				Alamat Pengiriman &nbsp; &nbsp;:  <?php echo $detail['alamat_pengiriman']; ?>, <?php echo $detail['kota']; ?>, <?php echo $detail['nama_provinsi']; ?>. <br>
				Jenis Pengiriman &nbsp;&nbsp; &nbsp;&nbsp;: <?php echo $detail['nama']; ?>
			 </p>
			<table class="table1 text-center">
					 <thead>
						<tr>
							<th >Nomor</th>
							<th >Nama sepatu</th>
							<th >Harga Satuan</th>
							<th >Banyak</th>
							<th >Subtotal </th>
						 </tr>
					 </thead>
					<tbody>
						<?php $nomor=1;?>
						<?php $ambil=$koneksi->query(" SELECT * FROM transaksi_barang join sepatu on transaksi_barang.kode_sepatu=sepatu.kode_sepatu
						where transaksi_barang.kode_fakturjual='$_GET[ids]' and transaksi_barang.kode_sepatu=sepatu.kode_sepatu"); ?>
						<?php while ($pecah=$ambil-> fetch_assoc()) {?>
						<tr>
							<td style="color:black;"><?php echo $nomor;?></td>
							<td style="color:black;"><?php echo $pecah['nama_sepatu'];?> </td>
							<td style="color:black;"><?php echo $pecah['harga_jual'];?></td>
							<td style="color:black;"> <?php echo $pecah['qty_jual'];?></td>
							<?php
								 $subtotal=$pecah['harga_jual']*$pecah['qty_jual'];?>
								 <?php $pecah['subtotal_jual']=$subtotal; ?>
								<td style="color:black;">Rp.  <?php echo number_format ($pecah['subtotal_jual']);?></td>
						</tr>
						<?php $nomor++;?>
						<?php } ?>
						<tr>
							<td colspan="4" style="color:black;"> Tarif Pengiriman </td>
							<?php
								$ambil=$koneksi->query(" SELECT * FROM faktur_penjualan join pengiriman on faktur_penjualan.id_tarifpengiriman=pengiriman.id_tarifpengiriman
								where faktur_penjualan.kode_fakturjual='$_GET[ids]' AND faktur_penjualan.id_tarifpengiriman='$detail[id_tarifpengiriman]' ");
								$kota=$ambil-> fetch_assoc();
							?>
							<td  colspan="2" style="color:black;"> Rp. <?php echo number_format ($kota['tarif']); ?></th>
						</tr>
							<?php
								$ambil=$koneksi->query(" SELECT * FROM faktur_penjualan join pembeli on faktur_penjualan.ID_pembeli=pembeli.ID_pembeli
								where faktur_penjualan.kode_fakturjual='$_GET[ids]'");
								$detail=$ambil-> fetch_assoc();
							?>
						<tfoot>
							<th class="text-center" colspan="4">Total</th>
							<th class="text-center" colspan="2"> Rp. <?php echo number_format ($detail['total']); ?></th>
						</tfoot>
					</tbody>
			</table> <br>
				<div class="col-md-7 alert alert-success">
					<p style="color:black;"> Silahkan lakukan pembayaran <strong> Rp. <?php echo number_format ($detail['total']); ?> </strong> ke <br>
					<strong> BANK MANDIRI SYARI'AH 145-000567-1234 AN. Nur Avisa Calista </strong><br>
					Jika Anda tidak melakukan pembayaran samapai tanggal <?php echo $detail['tanggal_jatuhtempo']; ?> maka pemesanan akan otomatis <strong> dibatalkan </strong>  </p>
				</div>
			</div>
