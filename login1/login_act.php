<?php
$koneksi= new mysqli("localhost","root","","toko_sepatu");
if(isset($_POST['login']))
{
	$ID_pembeli=$_POST['ID_pembeli'];
	$password=$_POST['password'];
	$ambil=$koneksi->query("select * from pembeli where ID_pembeli='$ID_pembeli' and password='$password'");
	$akunco=$ambil->num_rows;
	if($akunco==1)
	{
		$_SESSION['ID_pembeli']=$_POST['ID_pembeli'];
		echo "Login Berhasil";
		echo "<meta http-equiv='refresh' content='1;url=http://localhost/sepatu/web1/checkout.php'>";
	}
	else
	{
		echo "Login Gagal";
		echo "<meta http-equiv='refresh' content='1;url=index.php'>";
	}
	 if(isset($_SESSION['ID_pembeli'])){
	 echo "<script>location='http://localhost/sepatu/web1/checkout.php';</script>"; }
	 else {
		 echo "<script>alert('Silahkan login terlebih dahulu');</script>";
	 echo "<script>location='http://localhost/login/index.php';</script>"; }
}
else
{
	if(isset($_SESSION['ID_pembeli'])){
	 echo "<script>location='http://localhost/sepatu/web1/checkout.php';</script>"; }
	 else {
		 echo "<script>alert('Silahkan login terlebih dahulu');</script>";
	 echo "<script>location='http://localhost/login/index.php';</script>"; }
}
?>
