<?php
	$koneksi->query("DELETE FROM provinsi WHERE id_provinsi='$_GET[id]'");
	echo "<script> location='index1.php?page=provinsi';</script>";
?>
