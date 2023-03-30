<?php
$koneksi= new mysqli("localhost","root","","toko_sepatu");
$username = $_POST['username'];
$password = $_POST['password'];
$cek      = mysqli_query($koneksi, "select * from user where ID_user='$username' and password='$password'");
$result   = mysqli_num_rows($cek);
$data = mysqli_fetch_array($cek);

if($result>0){
    if ($data['level'] == 'superadmin') {
        session_start();
        $_SESSION['ID_user'] = $data['ID_user'];
        $_SESSION['level']    = $data['level'];
        echo "<script>alert('Selamat Datang, Admin.');document.location.href='http://localhost/sepatu/admin1/index1.php'</script>";

    }elseif($data['level'] == 'admin'){
        session_start();
        $_SESSION['ID_user'] = $data['ID_user'];
        $_SESSION['level']    = $data['level'];
        echo "<script>alert('Selamat Datang, Admin.');document.location.href='http://localhost/sepatu/admin2/index1.php'</script>";
     }
	 else if ($data['level'] == 'pembeli'){
        session_start();
        $_SESSION['ID_user'] = $data['ID_user'];
        $_SESSION['level']    = $data['level'];
        echo "<script>alert('Selamat Datang, Customer Kami. Selamat Berbelanja.');</script>";
		$ID_pembeli=$data['ID_user'];
		$password=$data['password'];
		$ambil=$koneksi->query("select * from pembeli where ID_pembeli='$ID_pembeli' and password='$password'");
		$akunco=$ambil->num_rows;
		if($akunco==1)
		{
			$_SESSION['ID_pembeli']=$data['ID_user'];
			echo "<meta http-equiv='refresh' content='1;url=http://localhost/sepatu/web1/index.php'>";
		}
}
	}
else{
    header("location:index.php");
}
?>
