<?php
$koneksi= new mysqli("localhost","root","","toko_sepatu");
 session_start();
 error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
 $kode=$_SESSION['kode_fakturbeli'];
$jumlah=$_SESSION['jumlah'];
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Femmebags Admin</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index1.php?page=index">Femmebags</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                        </ul>
                        <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                        </form>
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="http://localhost/admin1/login_admin/login.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index1.php?page=index""><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                            </ul>
                            <!--/.widget-nav-->


                            <ul class="widget widget-menu unstyled">
                                <li><a href="index1.php?page=pembeli"><i class="menu-icon icon-table"></i>Pembeli </a></li>

                            </ul>
							<ul class="widget widget-menu unstyled">
                                <li><a href="index1.php?page=sepatu"><i class="menu-icon icon-table"></i>Baji </a></li>
								<li><a href="index1.php?page=jenissepatu"><i class="menu-icon icon-table"></i>Jenis sepatu </a></li>

                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>More Pages </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="index1.php?page=all_admin"><i class="icon-inbox"></i>All Users </a></li>
                                    </ul>
                                </li>
                                <li><a href="http://localhost/admin2/login_admin/login.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
	<div class="span9">
		<div class="content">
			<div class="module">
				<div class="module-head">
					<h2 align="center" >Tambah Data Barang Penyuplaian</h2>
				</div> 	<br></br>
					<form method="POST" enctype="multipart/from-data" class="form-horizontal row-fluid">
						<div class="control-group">
							<label class="control-label" for="basicinput">Nama</label>
								<div class="controls">
									<select name="kode_sepatu" class="span8">
									<option value="">-- Pilih Nama sepatu -- </option>
									<?php $ambil=$koneksi->query("SELECT * FROM sepatu");
										while ($pecah=$ambil->fetch_assoc()) { ?>
									<option value="<?php echo $pecah['kode_sepatu']; ?>"> <?php echo $pecah['nama_sepatu']; ?></option>
									<?php } ?>
									</select>
								</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="basicinput">Qty</label>
								<div class="controls">
									<div class="input-append">
										<input type="number" class="span8" name="qty"><span class="add-on">buah</span>
									</div>
								</div>
						</div> <br> </br>
					<center> <a href="index.php?page=beli&id=<?php echo $_POST['kode_sepatu']; ?>&jum=<?php echo $_POST['qty']; ?>"  class="btn btn-primary" name="simpan" value="upload" > Simpan</button>
				</form>
