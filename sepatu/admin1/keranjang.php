<?php
SESSION_START ();
$koneksi= new mysqli("localhost","root","","toko_sepatu"); ?>
<!DOCTYPE html>
<html lang="en">
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
                                    <li><a href="index1.php?page=profile">Your Profile</a></li>
                                    <li><a href="index1.php?page=editprofile">Edit Profile</a></li>
                                    <li class="divider"></li>
                                    <li><a href="http://localhost/login/logout.php">Logout</a></li>
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
								<li><a href="index1.php?page=supplier"><i class="menu-icon icon-table"></i>Supplier </a></li>
                            </ul>
							<ul class="widget widget-menu unstyled">
                                <li><a href="index1.php?page=sepatu"><i class="menu-icon icon-table"></i>sepatu </a></li>
								<li><a href="index1.php?page=jenissepatu"><i class="menu-icon icon-table"></i>Jenis sepatu </a></li>
								<li><a href="index1.php?page=provinsi"><i class="menu-icon icon-table"></i>Provinsi</a></li>
								<li><a href="index1.php?page=kota"><i class="menu-icon icon-table"></i>Kota</a></li>
                            </ul>
							<ul class="widget widget-menu unstyled">
                                <li><a href="index1.php?page=datajual"><i class="menu-icon icon-table"></i>Data Pembelian </a></li>
								<li><a href="index1.php?page=datasuplai"><i class="menu-icon icon-table"></i>Data Penyuplaian</a></li>
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a href="index1.php?page=admin"><i class="menu-icon icon-signout"></i>Admin </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h3>Data Barang Yang Disuplai</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>Nomor</th>
											<th>Nama sepatu</th>
											<th>Harga </th>
											<th>Qty </th>
											<th>Subtotal</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php $nomor=1;?>
										<?php foreach ($_SESSION['simpan'] as $kode_sepatu => $jumlah ): ?>
										<?php
											$tampil=$koneksi->query("SELECT * FROM sepatu where kode_sepatu='$kode_sepatu'");
											$sepatu=$tampil->fetch_assoc();
											$subharga=$spatuu['harga_beli']*$jumlah; ?>
										<tr>
											<td><?php echo $nomor;?></td>
											<td><?php echo $sepatu['nama_sepatu'] ?></td>
											<td>Rp. <?php echo number_format( $sepatu['harga_beli']) ?></td>
											<td>
												<?php echo $jumlah; ?>
											</td>
											<td>Rp.<?php echo number_format($subharga )?></td>
											<td>
												<a href="hapus.php?id=<?php echo $kode_sepatu;?>" class="btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin menghapus produk ini?')">Hapus</a>
											</td>
										</tr>
										<?php $nomor++;?>
										<?php endforeach ;?>
									</tbody>
								</table> <br></br>
								<a href="http://localhost/sepatu/admin1/cubo.php" class="btn btn-primary"> Tambah data barang </a>
								<a href="http://localhost/sepatu/admin1/checkout1.php" class="btn btn-success">selesai</a>
							</div>
						</div>
    </div>
</div>
 <div class="footer">
            <div class="container">
                <b class="copyright"> <h5 align="center"> &copy; 2018 	Femmebags - Femmebagsoutfit.com </h5></b>
				<h5 align="center"> All rights reserved </h5>
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>

    </body>
</html>
