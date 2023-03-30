<?php
	$koneksi->query("DELETE FROM jenis_sepatu WHERE id_jenissepatu='$_GET[id]'");
	echo "<script> location='index1.php?page=jenis_sepatu';</script>";
?>
