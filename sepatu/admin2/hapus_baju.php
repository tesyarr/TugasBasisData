<?php
	$koneksi->query("DELETE FROM sepatuu WHERE kode_sepatu='$_GET[id]'");
	echo "<script> location='index1.php?page=sepatuu';</script>";
?>
