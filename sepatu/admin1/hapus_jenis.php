<?php
	$koneksi->query("DELETE FROM jenis_sepatu WHERE id_jenisbaju='$_GET[id]'");
	echo "<script> location='index1.php?page=jenisbaju';</script>";
?>
