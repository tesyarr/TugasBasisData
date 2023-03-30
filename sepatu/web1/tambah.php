<?php
	session_start ();
	$kode_sepatu=$_GET['id'];
	if(isset($_SESSION['keranjang'][$kode_sepatu])) {
		$_SESSION['keranjang'][$kode_sepatu]+= 1;
	}
	else {
	$_SESSION['keranjang'][$kode_sepatu]=1;}
echo "<script>location='http://localhost/sepatu/web1/keranjang.php';</script>";
?>
