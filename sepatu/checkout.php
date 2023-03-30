<?php

	 $koneksi=new mysqli("localhost","root","","toko_baju");
	  session_start();
	  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	 $benar=$_SESSION['ID_pembeli'];
	 if (!isset($_SESSION['ID_pembeli'])) {
		 echo "<script>alert('Silahkan login terlebih dahulu');</script>";
		 echo "<script>location='http://localhost/login/index.php';</script>"; }

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
						<a class="navbar-brand logo_h" href="http://localhost/toko_baju/web/index.php"><img src="img/logo.JPEG" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="http://localhost/toko_baju/web/index.php">Home</a></li>
								<li class="nav-item"><a class="nav-link" href="http://localhost/toko_baju/web/produk.php">Produk</a>
                </li>
                <li class="nav-item submenu dropdown">
                  <a href="jenis.php" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jenis</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="nav-link" href="jenis.php"></a>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=kebaya&id=">Kebaya</a></li>
                  </li>

                    <li class="nav-item"><a class="nav-link" href="jenis.php"></a>
                    <li class="nav-item"><a class="nav-link" href="http://localhost/toko_baju/web/long_dress.php">Long Dress</a></li>
                  </li>

                    <li class="nav-item"><a class="nav-link" href="jenis.php"></a>
                    <li class="nav-item"><a class="nav-link" href="http://localhost/toko_baju/web/formal_dress.php">Formal Dress</a></li>
                  </li>

                    <li class="nav-item"><a class="nav-link" href="jenis.php"></a>
                    <li class="nav-item"><a class="nav-link" href="http://localhost/toko_baju/web/hijab.php">Hijab</a></li>
                  </li>

                    <li class="nav-item"><a class="nav-link" href="jenis.php"></a>
                    <li class="nav-item"><a class="nav-link" href="mini_dress.php">Mini Dress</a></li>
                  </li>
                  </ul>
                </li>
                <li class="nav-item submenu dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Acara</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="nav-link" href="kondangan.php">Kondangan</a></li>
                    <li class="nav-item"><a class="nav-link" href="wisuda.php">Wisuda</a></li>
                    <li class="nav-item"><a class="nav-link" href="prom.php">Prom/Bithday Party</a></li>
                    <li class="nav-item"><a class="nav-link" href="prewedding.php">Pre-Wedding</a></li>
                  </ul>
                </li>
                	<li class="nav-item"><a class="nav-link" href="keranjang.php">Keranjang</a></li>
                  <?php if (isset($_SESSION['ID_pembeli'])) {?>
								<?php if (isset($_SESSION['keranjang'])) { ?>

									<li  class="nav-item submenu dropdown">
							<class="nav-item"><a class="nav-link" href="http://localhost/toko_baju/web/checkout.php">Checkout</a></li>
								<?php }  ?>
                  		<li class="nav-item active">
                <a href="http://localhost/login/logout.php"  class="nav-link dropdown-toggle" role="button" onclick="return confirm ('Apakah Anda yakin ingin log out?')">log out</a></li>
</li>
                  		<li class="nav-item submenu dropdown">
							  <a href="http://localhost/toko_baju/web/data.php" class="nav-link dropdown-toggle" role="button">Saya</a></li>
              </li>
							<?php } else { ?>
								<?php if (isset($_SESSION['keranjang'])) { ?>
									<li role="presentation"><a href="http://localhost/toko_baju/web/checkout.php">Checkout</a></li>
								<?php }?>
                		<li class="nav-item submenu dropdown">
                <a href="http://localhost/login/index.php" class="nav-link dropdown-toggle" role="button" >login</a>
                	</li>
								<?php }?>
							</ul>
						</div>
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->

	<div class="gallery">
		<div class="text-center">
			<h2 >Keranjang Anda</h2> <center>
			<table class="table1 text-center">
			<tr>
				<th>No</th>
				<th>Nama Produk</th>
				<th>Harga Produk</th>
				<th>Qty</th>
				<th>Subtotal</th>
				<th></th>
			</tr>
			<tbody>
			<?php $nomor=1;?>
			<?php $total=0; ?>
			<?php foreach ($_SESSION['keranjang'] as $kode_baju => $jumlah ): ?>
			<?php
				$tampil=$koneksi->query("SELECT * FROM baju where kode_baju='$kode_baju'");
				$baju=$tampil->fetch_assoc();
				$subharga=$baju['harga_jual']*$jumlah;
				?>
			<tr>
				<td><?php echo $nomor;?></td>
				<td><?php echo $baju['nama_baju'] ?></td>
				<td>RP. <?php echo number_format( $baju['harga_jual']) ?></td>
				<td><?php echo $jumlah ?></td>
				<td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Rp. <?php echo number_format( $subharga) ?></td>
			</tr>
			<?php $nomor++;?>
			<?php $total+=$subharga; ?>
			<?php endforeach ;?>
			</tbody>
			<tfoot>
				<th class="text-center" colspan="4">Total</th>
				<th class="text-center" colspan="2"> Rp. <?php echo number_format ($total); ?></th>
			</tfoot>
		</table> <br>
		<div class="row">
		<form method="POST">
			<center>
				<div class="col-md-20">
				<?php $ambil=$koneksi->query("SELECT * FROM pembeli where ID_pembeli='$benar'");
							 $nohp=$ambil->fetch_assoc()?>
					<input type="text" readonly class="form-control" placeholder="<?php echo $nohp['nama_pembeli']; ?>">
				<br>
					<input type="text" readonly class="form-control" placeholder="<?php echo $nohp['no_telepon']; ?>">
				<br>
				<select name="provinsi"  id="provinsi"class="form-control">
						<option value="">-- Pilih Provinsi -- </option>
						<?php $ambil=$koneksi->query("SELECT * FROM provinsi");
							 while ($pecah=$ambil->fetch_assoc()) { ?>
						<option value="<?php echo $pecah['id_provinsi']; ?>"> <?php echo $pecah['nama_provinsi']; ?></option>
							 <?php } ?>
					</select>
				<br>
				<select name="kota" id="kota"class="form-control">
						<option value="">-- Pilih Kota -- </option>
						<?php $ambil=$koneksi->query("SELECT * FROM kota inner join provinsi on kota.id_provinsi=provinsi.id_provinsi");
							 while ($pecah=$ambil->fetch_assoc()) { ?>
						<option id="kota" class="<?php echo $pecah['id_provinsi']; ?>" value="<?php echo $pecah['id_kota']; ?>"> <?php echo $pecah['nama_kota']; ?></option>
							 <?php } ?>
					</select>
				</br>
				<center>
				<select name="pengiriman" id="pengiriman" class="form-control">
						<option value="">-- Pilih tipe pengiriman -- </option>
						<?php $ambil=$koneksi->query("SELECT * FROM (pengiriman inner join kota on pengiriman.id_kota=kota.id_kota) join tipe on
						pengiriman.id_tipe=tipe.id_tipe");
							 while ($pecah=$ambil->fetch_assoc()) { ?>
						<option id="pengiriman" class="<?php echo $pecah['id_kota']; ?>" value="<?php echo $pecah['id_tarifpengiriman']; ?>">
						<?php echo $pecah['nama']; ?> <?php echo $pecah['nama_tipe']; ?>(<?php echo $pecah['tarif']; ?>)</option>
							 <?php } ?>
					</select>
				</center>
				</div> </div>
				<br>


				<div class="row1">
					<input type="text"  class="form-control" name="alamat_pengiriman" placeholder="Masukkan Alamat Pengiriman Secara Lengkap (Termasuk Kode Pos)"> </div>
			<button class="btn btn-success" name="checkout">Checkout</button>
			</div>
		</form>
		<script src="jquery-1.10.2.min.js"></script>
		<script src="jquery.chained.min.js"></script>
		<script>
			$("#kota").chained("#provinsi");
			$("#pengiriman").chained("#kota");
		</script>
		<?php if(isset($_POST['checkout'])) {
			date_default_timezone_set('Asia/Jakarta');
			$id_pembeli=$benar;
			$kota=$_POST['kota'];
			$tipe=$_POST['tipe'];
			$tanggalpembelian=date("Y-m-d H:i:s");
			$tanggalexp=date('Y-m-d H:i:s', time() +(3600*48));
			$alamat=$_POST['alamat_pengiriman'];
			$pengiriman=$_POST['pengiriman'];
			$ambil=$koneksi->query("SELECT * FROM pengiriman where id_tarifpengiriman='$pengiriman'");
			$array_ongkir=$ambil->fetch_assoc();
			$tarif=$array_ongkir['tarif'];
			$total_pembelian=$total+$tarif;

			$data=$koneksi->query("SELECT max(kode_fakturjual) as kode from faktur_penjualan");
			$tm_cari=mysqli_fetch_array($data);
			$kode=substr($tm_cari['kode'],1,4);
			$tambah=$kode+1;
			if($tambah<10) {
			$id="F000".$tambah; }
			else
				$id="F00".$tambah;
			$koneksi->query("INSERT INTO faktur_penjualan(kode_fakturjual, ID_pembeli, tanggal_penjualan, total,
			alamat_pengiriman,id_status,id_tarifpengiriman,tanggal_jatuhtempo) VALUES
			('$id','$id_pembeli','$tanggalpembelian','$total_pembelian','$alamat','S001','$pengiriman','$tanggalexp')");
			$koneksi->query("UPDATE user SET alamat='$alamat' where ID_user='$benar'");

			foreach ($_SESSION['keranjang'] as $kode_baju => $jumlah ) {
				$koneksi->query("INSERT INTO transaksi_barang (kode_fakturjual,kode_baju,qty_jual,subtotal_jual) VALUES ('$id','$kode_baju','$jumlah',
				'$subharga')");
			}
			// mengosongkan keranjang belanja
			unset($_SESSION['keranjang']);


			echo "<script>alert('Pembelian Sukses');</script>";
			echo "<script>location='http://localhost/toko_baju/web/nota.php?ids=$id';</script>";
		}
    	 ?>




	</div>
	</body>
</html>
