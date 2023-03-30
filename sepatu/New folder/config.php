<?php
$koneksi=mysqli_connect("localhost","root","");
$default=mysqli_select_db($koneksi,"sepatu");
session_start ();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>
