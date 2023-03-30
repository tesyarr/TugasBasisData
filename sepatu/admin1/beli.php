<?php
	session_start ();
	$kode_sepatu=$_SESSION['kode_sepatu'];
	$jum=$_SESSION['qty'];
	$_SESSION['simpan'][$kode_sepatu]=$jum;
	echo "<script>alert('Produk telah disimpan');</script>";
	echo "<script>location='http://localhost/sepatu/admin1/keranjang.php';</script>";
	?>
