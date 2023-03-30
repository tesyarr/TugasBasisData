<?php
	session_start ();
	$kode_bajju=$_GET['id'];
	$jum=$_GET['jum'];
		if($jum>1){
			$jum-=1;
			$_SESSION['keranjang'][$kode_sepatu]=$jum;}
		else
			unset($_SESSION['keranjang'][$kode_sepatu]);

echo "<script>location='http://localhost/sepatu/web1/keranjang.php';</script>"; 
?>
