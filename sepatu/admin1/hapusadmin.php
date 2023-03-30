<?php
	$koneksi->query("DELETE FROM user WHERE ID_user='$_GET[id]'");
	echo "<script> location='index1.php?page=admin';</script>";
?>
