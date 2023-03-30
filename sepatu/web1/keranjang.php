<?php
$koneksi= new mysqli("localhost","root","","toko_sepatu");
session_start();
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


  <div class="gallery">
    <div class="text-center">
      <h2 >Keranjang Anda</h2> <center>
      <table class="table table-bordered text-center">
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
        $tampil=$koneksi->query("SELECT * FROM sepatu where kode_sepatu='$kode_sepatu'");
        $sepatu=$tampil->fetch_assoc();
        $subharga=$sepatu['harga_jual']*$jumlah; ?>
      <tr>
        <td><?php echo $nomor;?></td>
        <td><?php echo $sepatu['nama_sepatu'] ?></td>
        <td>Rp. <?php echo number_format( $sepatu['harga_jual']) ?></td>
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
