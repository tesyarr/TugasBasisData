<?php
$koneksi= new mysqli("localhost","root","","sepatu");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<!--================Home Banner Area =================-->

<!--================End Home Banner Area =================-->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="icon" href="img/dress(1).PNG" type="image/png">
      <title>Hijack</title>
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
        <th> Ubah </th>
        <th>Hapus</th>
      </tr>
      <tbody>
      <?php $nomor=1;?>
      <?php foreach ($_SESSION['keranjang'] as $kode_sepatu => $jumlah ):?>
      <?php
        $tampil=$koneksi->query("SELECT * FROM sepatuu where kode_sepatu='$kode_sepatu'");
        $sepatuu=$tampil->fetch_assoc();
        $subharga=$sepatuu['harga_jual']*$jumlah; ?>
      <tr>
        <td><?php echo $nomor;?></td>
        <td><?php echo $sepatuu['nama_sepatu'] ?></td>
        <td>Rp. <?php echo number_format( $sepatuu['harga_jual']) ?></td>
        <td>
          <?php echo $jumlah; ?>
        </td>
        <td>Rp.<?php echo number_format( $subharga )?></td>
        <td>
          <a href="tambah.php?id=<?php echo $kode_sepatu;?>" class="btn-danger btn-xs">[ + ]</a>
          <a href="kurang.php?id=<?php echo $kode_sepatu;?>&jum=<?php echo $jumlah; ?>" class="btn-danger btn-xs">[ - ]</a>
        </td>
        <td>
          <a href="hapus1.php?id=<?php echo $kode_sepatu;?>" class="btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin menghapus produk ini?')">Hapus</a>
        </td>
      </tr>
      <?php $nomor++;?>
      <?php endforeach ;?>
      </tbody>
    </table> <br></br>
    <form method="POST">
    <a href="produk.php" class="btn btn-success">Lanjut Belanja</a>
    <?php if(isset($_SESSION['keranjang'])) : ?>
    <button class="btn btn-primary" name="checkout">Checkout</button>
    <?php else: ?>
    <button class="btn btn-primary" name="produk">Checkout</button>
    <?php endif ?>
    </form>
    <?php
    if(isset($_POST['checkout'])) {
    echo "<script>location='http://localhost/sepatu/web1/checkout.php';</script>"; } ?>
    <?php
    if(isset($_POST['produk'])) {
    echo "<script>alert('Keranjang Anda Kosong, Silahkan Belanja Terlebih Dahulu');</script>";
      echo "<script>location='produk.php';</script>"; } ?>
