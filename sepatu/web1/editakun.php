<?php
	 session_start();
	 $koneksi=new mysqli("localhost","root","","toko_baju");
	  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	 $benar=$_SESSION['ID_pembeli'];
	 if (!isset($_SESSION['ID_pembeli'])) {
		 echo "<script>alert('Silahkan login terlebih dahulu');</script>";
		 echo "<script>location='http://localhost/login/index.php';</script>"; }

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
                        <h1 class="site-title"><a href="index.html" rel="home">Blanca</a></h1>
                        <p class="site-description">Sport</p>
                    </div><!-- .site-branding -->

                    <nav class="site-navigation">
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">

                        </div>
                        <ul class="flex-lg flex-lg-row justify-content-lg-center align-content-lg-center">
                            <li class="current-menu-item"><a href="index.php">Home</a></li>
                            <li class="current-menu-item"><a href="produk.php">Produk</a></li>
                            <li class="nav-item submenu dropdown">
                   <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Jenis </a>
                   <ul class="dropdown-menu">
                     <li class="nav-item"><a class="nav-link" href="kondangan.php">Kondangan</a></li>
                     <li class="nav-item"><a class="nav-link" href="wisuda.php">Wisuda</a></li>
                     <li class="nav-item"><a class="nav-link" href="prom.php">Prom/Bithday Party</a></li>
                     <li class="nav-item"><a class="nav-link" href="prewedding.php">Pre-Wedding</a></li>
                   </ul>
                 </li>
                            <li class="current-menu-item"><a class="nav-link" href="keranjang.php">Keranjang</a></li>
                            </li>
                  <?php if (isset($_SESSION['ID_pembeli'])) {?>
                            <?php if (isset($_SESSION['keranjang'])) {?>
                              <li role="button"> <a href="checkout.php"> Checkout </a></li>
                            <?php } ?>
                          <li class="current-menu-item" > <a href="http://localhost/login1/logout.php"  role="button" onclick="return confirm ('apakah anda yakin ingin logout?')" >Logout</a> </li>
                        </li>
                        <li class=class="current-menu-item">
                        <a href="data.php"  role="button"> Saya </a> </li>
</li>
<?php }else{ ?>
  <?php if(isset($_SESSION['keranjang'])) {?>
    <li role="presentation"> <a href="checkout.php"> Checkout </a> </li>
  <?php } ?>
  <li class="current-menu-item">
  <a href=" http://localhost/login1/index.php" role="button" ></a>Login </li>
<?php } ?>
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
								<?php $ambil=$koneksi->query("SELECT * FROM jenis_baju");
								  while ($pecah=$ambil->fetch_assoc()) { ?>
								<li role="presentation"><a href="index.php?page=jenis&id=<?php echo $pecah['id_jenisbaju']; ?>"><?php echo $pecah['nama_jenis']; ?></a></li>
								  <?php } ?>
							</ul> </li>
							<li role="presentation"><a href="http://localhost/toko_baju/web/keranjang.php">Keranjang</a></li>
							<?php if (isset($_SESSION['ID_pembeli'])) {?>
								<?php if (isset($_SESSION['keranjang'])) { ?>
									<li role="presentation"><a href="http://localhost/toko_baju/web/checkout.php">Checkout</a></li>
								<?php }  ?>
								<li role="presentation"><a href="http://localhost/login/logout.php" onclick="return confirm ('Apakah Anda yakin ingin log out?')">log out</a></li>
								<li role="presentation"><a href="http://localhost/toko_baju/web/data.php">Saya</a></li>
							<?php } else { ?>
								<?php if (isset($_SESSION['keranjang'])) { ?>
									<li role="presentation"><a href="http://localhost/toko_baju/web/checkout.php">Checkout</a></li>
								<?php }?>
								<li role="presentation"><a href="http://localhost/login/index.php" >Log in</a></li>
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
			<h2 >Edit Akun Anda</h2> <center>
	<div class="row">
		<form method="POST">
			<center>
				<div class="col-md-20">
				<?php $ambil=$koneksi->query("SELECT * FROM pembeli where ID_pembeli='$benar'");
							 $nohp=$ambil->fetch_assoc()?>
					<input type="text" class="form-control" value="<?php echo $nohp['ID_pembeli']; ?>" name="ID_pembeli">
				<br>
					<input type="text"  class="form-control" value="<?php echo $nohp['nama_pembeli'];  ?>" name="nama_pembeli">
				<br>
					<input type="text"  class="form-control" value="<?php echo $nohp['no_telepon']; ?>" name="no_telepon">
				<br>
					<input type="password"  class="form-control" value="<?php echo $nohp['password']; ?>" name="password">

				</div>  <br> </br>
			<button class="btn btn-warning" name="simpan">simpan</button> <br> </br>
		</form>
	</div>
	</div> </div>
							<?php
								if(isset($_POST['simpan']))
								{
									$ID_pembeli=$_POST['ID_pembeli'];
									$nama_pembeli=$_POST['nama_pembeli'];
									$no=$_POST['no_telepon'];
									$password=$_POST['password'];
									$sql=$koneksi->query("UPDATE pembeli SET ID_pembeli='$ID_pembeli', nama_pembeli='$nama_pembeli', no_telepon='$no',
									password='$password' where ID_pembeli='$benar'");
									$sql1=$koneksi->query("UPDATE user SET ID_user='$ID_pembeli', nama='$nama_pembeli', no_telepon='$no',
									password='$password' where ID_user='$benar'");
									$_SESSION['ID_pembeli']=$ID_pembeli;
									echo "<script>alert('Data Berhasil Diubah');</script>";
									echo "<script> location='index.php?page=data';</script>";
								}



							?>
