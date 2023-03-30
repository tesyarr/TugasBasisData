<?php
$koneksi= new mysqli("localhost","root","","toko_sepatu");
session_start();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$benar=$_SESSION['ID_pembeli'];
?>
<!doctype html>
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
					<nav>
						<ul class="nav navbar-nav menu_nav ml-auto"role="tablist">
              <li class="nav-item active">
							<li role="presentation"><a href="index.php?home.php">Home</a></li>
							<li role="presentation"><a href="http://localhost//sepatu/web1/belum.php">Belum Bayar</a></li>
							<li class="active" role="presentation"><a href="http://localhost//sepatu/web1/kirim.php">Dikirim</a></li>
							<li role="presentation"><a href="http://localhost//toko_sepatu/web1/selesai.php">Selesai</a></li>
							<li role="presentation"><a href="http://localhost//toko_sepatu/web1/batal.php">Batal</a></li>
							<li role="presentation"><a href="http://localhost//toko_sepatu/web1/data.php">Saya</a></li>
							<li role="presentation"><a href="http://localhost/login/logout.php" onclick="return confirm ('Apakah Anda yakin ingin log out?')">log out</a></li>
</li>
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
											<th>Konfirmasi </th>
										</tr>
									</thead>
									<tbody>
											<?php $nomor=1;?>
											<?php $ambil=$koneksi->query("Select * FROM faktur_penjualan join pembeli on faktur_penjualan.ID_pembeli=pembeli.ID_pembeli
											where faktur_penjualan.ID_pembeli='$benar' AND id_status='S002'"); ?>
											<?php while ($pecah=$ambil->fetch_assoc()) {?>
											<tr>
												<td><?php echo $nomor;?></td>
												<td><?php echo $pecah['kode_fakturjual'];?> </td>
												<td><?php echo $pecah['tanggal_penjualan'];?></td>
												<td>Rp. <?php echo number_format ($pecah['total']);?></td>
												<td>
													<a href="index.php?page=detailriwayat&ids=<?php echo $pecah['kode_fakturjual'];?>" class="btn btn-info"> Detail </a>
												</td>
												<td>
												<a href="http://localhost//toko_sepatu/web1/update1.php?ids=<?php echo $pecah['kode_fakturjual']; ?>&status=kirim" class="btn btn-success" > Barang Telah Sampai </a>
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
						<br></br>
						<br></br>
						<br></br>
		<div class="sub-footer">
		<div class="container">
			<div class="social-icon">
				<div class="col-md-4">
					<ul class="social-network">
						<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
					</ul>
				</div>
			</div>
      <!--================Footer Area =================-->
      <footer class="footer_area">
        <div class="container">
          <div class="row footer_inner">
            <div class="col-lg-5 col-sm-6">
              <aside class="f_widget ab_widget">
                <div class="f_title">
                  <h3>About Me</h3>
                </div>
                <p>Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills,</p>
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
              </aside>
            </div>
            <div class="col-lg-5 col-sm-6">
              <aside class="f_widget news_widget">
                <div class="f_title">
                  <h3>Newsletter</h3>
                </div>
                <p>Stay updated with our latest trends</p>
                <div id="mc_embed_signup">
                              <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                <div class="input-group d-flex flex-row">
                                      <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                      <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>
                                  </div>
                                  <div class="mt-10 info"></div>
                              </form>
                          </div>
              </aside>
            </div>
            <div class="col-lg-2">
              <aside class="f_widget social_widget">
                <div class="f_title">
                  <h3>Follow Me</h3>
                </div>
                <p>Let us be social</p>
                <ul class="list">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a href="#"><i class="fa fa-behance"></i></a></li>
                </ul>
              </aside>
            </div>
          </div>
        </div>
      </footer>
      <!--================End Footer Area =================-->






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
