<?php include"config.php"?>
<?php include "header.php"?>
<!--================Home Banner Area =================-->
<section class="home_banner_area">
    <div class="box_1620">
      <div class="banner_inner d-flex align-items-center">
  <div class="container">
    <div class="banner_content text-center">
      <h3>Kondangan <br /></h3>
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

<!--================kebayakondangan=============================--->
<div class="container">
    <div class ="row">
  <?php $ambil=$koneksi->query("SELECT * FROM baju where id_jenisbaju='K10002'");?>
  <?php while($baju=$ambil->fetch_assoc()){?>
  <div class="col-md-4">
    <img src="http://localhost/toko_baju/foto/<?php echo $baju['gambar'];?>" width="360" height="360" class="img-responsive">
        <h4><?php echo $baju['nama_baju'];?></h4>
        <h4>RP. <?php echo number_format( $baju['harga_jual'])?></h4>
        <a href="index.php?page=beli&id=<?php echo $baju['kode_baju']; ?>" class="btn btn-success"> Beli Sekarang </a>
        <a href="index.php?page=detail&id=<?php echo $baju['kode_baju']; ?>" class="btn btn-primary"> Detail</a>

  </div>
        <?php } ?>

  </div>
<!-----===============endkebayakondangan===========---->
<!--================hijabkondangan=============================--->
<div class="container">
    <div class ="row">
  <?php $ambil=$koneksi->query("SELECT * FROM baju where id_jenisbaju='H10001'");?>
  <?php while($baju=$ambil->fetch_assoc()){?>
  <div class="col-md-4">
    <img src="http://localhost/toko_baju/foto/<?php echo $baju['gambar'];?>" width="360" height="360" class="img-responsive">
        <h4><?php echo $baju['nama_baju'];?></h4>
        <h4>RP. <?php echo number_format( $baju['harga_jual'])?></h4>
        <a href="index.php?page=beli&id=<?php echo $baju['kode_baju']; ?>" class="btn btn-success"> Beli Sekarang </a>
        <a href="index.php?page=detail&id=<?php echo $baju['kode_baju']; ?>" class="btn btn-primary"> Detail</a>

  </div>
        <?php } ?>

  </div>
<!-----===============endhijabkondangan===========---->
<!--================kebayakondangan=============================--->
<div class="container">
    <div class ="row">
  <?php $ambil=$koneksi->query("SELECT * FROM baju where id_jenisbaju='M10001'");?>
  <?php while($baju=$ambil->fetch_assoc()){?>
  <div class="col-md-4">
    <img src="http://localhost/toko_baju/foto/<?php echo $baju['gambar'];?>" width="360" height="360" class="img-responsive">
        <h4><?php echo $baju['nama_baju'];?></h4>
        <h4>RP. <?php echo number_format( $baju['harga_jual'])?></h4>
        <a href="index.php?page=beli&id=<?php echo $baju['kode_baju']; ?>" class="btn btn-success"> Beli Sekarang </a>
        <a href="index.php?page=detail&id=<?php echo $baju['kode_baju']; ?>" class="btn btn-primary"> Detail</a>

  </div>
        <?php } ?>

  </div>
<!-----===============endkebayakondangan===========---->
<?php include"footer.php"?>
