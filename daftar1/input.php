<?php
$server="localhost";
$user="root";
$pass="";
$db_name="toko_sepatu";
$conn=new mysqli ($server,$user,$pass,$db_name);
if ($conn->connect_error)
{
	die("connection failed".$conn->connect_error);
	echo "connection error";
}
else
	{
	 $ID_pembeli=$_POST['ID_pembeli'];
	 $nama_pembeli=$_POST['nama_pembeli'];
	 $no=$_POST['no_telepon'];
	 $password=$_POST['password'];
	 $sql=$conn->query("INSERT INTO pembeli (ID_pembeli,nama_pembeli,no_telepon,password) VALUES ('$ID_pembeli','$nama_pembeli','$no','$password')");
	 $level="pembeli";
	 $sql1=$conn->query("INSERT INTO user (ID_user,password,nama,no_telepon,level) VALUES ('$ID_pembeli','$password','$nama_pembeli','$no','$level')");
	 if((isset($sql)==TRUE)&&(isset($sql1)===TRUE)) {
		 $_SESSION['ID_pembeli']=$ID_pembeli;
		 echo "data sudah terkirim";
		 echo "<script> location='http://localhost/login1/index.php';</script>"; }

	 else
		 echo "data tidak terkirim";
	$conn->close();
	}
?>
