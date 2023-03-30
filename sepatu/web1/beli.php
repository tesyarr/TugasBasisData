<?php
$koneksi= new mysqli("localhost","root","","toko_sepatu");
	session_start ();
	$kode_sepatu=$_GET['id'];
	$_SESSION['keranjang'][$kode_sepatu];
	if(isset($_SESSION['keranjang'][$kode_sepatu])) {
		$_SESSION['keranjang'][$kode_sepatu]= 1+$_SESSION['keranjang'][$kode_sepatu];
	}
	else {
	$_SESSION['keranjang'][$kode_sepatu]=1;}
echo "<script>alert('Produk telah masuk ke keranjang');</script>";
echo "<script>location='http://localhost/sepatu/web1/keranjang.php';</script>";
	?>
