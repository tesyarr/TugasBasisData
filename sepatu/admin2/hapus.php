<?php
	session_start();
	$kode_sepatu=$_GET['id'];
	unset($_SESSION['simpan'][$kode_sepatu]);
	echo "<script>location='keranjang.php';</script>";

?>
