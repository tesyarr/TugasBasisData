<?php $koneksi= new mysqli("localhost","root","","toko_sepatu"); ?>

<?php
	$cek=$_GET['status'];
	if($cek=='bayar') {
		$koneksi->query("UPDATE faktur_penjualan SET id_status='S002' where kode_fakturjual='$_GET[ids]'");
		echo "<script>location='http://localhost//sepatu/web1/kirim.php';</script>"; }
	elseif ($cek=='batal') {
		$koneksi->query("UPDATE faktur_penjualan SET id_status='S004' where kode_fakturjual='$_GET[ids]'");
		echo "<script>location='http://localhost//sepatu/web1/batal.php';</script>"; }
	elseif ($cek=='kirim') {
		$koneksi->query("UPDATE faktur_penjualan SET id_status='S003' where kode_fakturjual='$_GET[ids]'");
		echo "<script>location='http://localhost//sepatu/web1/selesai.php';</script>"; }?>
