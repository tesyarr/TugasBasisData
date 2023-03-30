<?php
	 $koneksi= new mysqli("localhost","root","","sepatu");
	 session_start();
	   error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	 $benar=$_SESSION['ID_pembeli'];
?>
<!doctype html>
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
        <!--================Header Menu Area =================-->
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
                        <h1 class="site-title"><a href="index.php" rel="home">Blanca</a></h1>
                        <p class="site-description">Personal Blog</p>
                    </div><!-- .site-branding -->

                    <nav class="site-navigation">
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->

                        <ul class="flex-lg flex-lg-row justify-content-lg-center align-content-lg-center">
                            <li class="current-menu-item"><a href="index.php">Home</a></li>
                            <li><a href="produk.php">Produk</a></li>
                            <li class="nav-item submenu dropdown">
                  <a href="jenis.php" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jenis</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="nav-link" href="index.php?page=jenis">jenis</a>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=basket&id=">Basket</a></li>
                  </li>

                    <li class="nav-item"><a class="nav-link" href="jenis.php"></a>
                    <li class="nav-item"><a class="nav-link" href="http://localhost/sepatu/web/football.php">FootBall</a></li>
                  </li>

                    <li class="nav-item"><a class="nav-link" href="jenis.php"></a>
                    <li class="nav-item"><a class="nav-link" href="http://localhost/sepatu/web/trail.php">Trail</a></li>
                  </li>

                    <li class="nav-item"><a class="nav-link" href="jenis.php"></a>
                    <li class="nav-item"><a class="nav-link" href="http://localhost/sepatu/web/footsal.php">Footsal</a></li>
                  </li>

                    <li class="nav-item"><a class="nav-link" href="jenis.php"></a>
                    <li class="nav-item"><a class="nav-link" href="sneakers.php">Sneakres</a></li>
                  </li>
                  </ul>
                </li>
                            <li><a href="index.php?page=keranjang">Keranjang</a></li>
                            <li><a href="http://localhost/login1/index.php"">Login</a></li>
                        </ul>

                        <div class="header-bar-social d-md-none">
                            <ul class="flex justify-content-center align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .header-bar-social -->

                        <div class="header-bar-search d-md-none">
                            <form>
                                <input type="search" placeholder="Search">
                            </form>
                        </div><!-- .header-bar-search -->
                    </nav><!-- .site-navigation -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </header><!-- .site-header -->
        <!--================Header Menu Area =================-->


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
							<th >Nama baju</th>
							<th >Harga Satuan</th>
							<th >Banyak</th>
							<th >Subtotal </th>
						 </tr>
					 </thead>
					<tbody>
						<?php $nomor=1;?>
						<?php $ambil=$koneksi->query(" SELECT * FROM transaksi_barang join sepatuu on transaksi_barang.kode_sepatu=sepatuu.kode_sepatu
						where transaksi_barang.kode_fakturjual='$_GET[ids]' and transaksi_barang.kode_sepatu=sepatuu.kode_sepatu"); ?>
						<?php while ($pecah=$ambil->fetch_assoc()) {?>
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
					Jika Anda tidak melakukan pembayaran sampai tanggal <?php echo $detail['tanggal_jatuhtempo']; ?> maka pemesanan akan otomatis <strong> dibatalkan </strong>  </p>
				</div>
			</div>
