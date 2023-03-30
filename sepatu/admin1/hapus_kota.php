<?php
	$koneksi->query("DELETE FROM kota WHERE id_kota='$_GET[id]'");
	echo "<script> location='index1.php?page=kota';</script>";
?>
