sepatu<?php
	 session_start();
	 $koneksi=new mysqli("localhost","root","","toko_sepatu");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blanka Admin</title>
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
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index1.php?page=index">Blanka</a>
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
                                    <li><a href="http://localhost/login1/logout.php">Logout</a></li>
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
                                <li><a href="index1.php?page=sepatu"><i class="menu-icon icon-table"></i>sepatu </a></li>
								<li><a href="index1.php?page=jenissepatu"><i class="menu-icon icon-table"></i>Jenis sepatu </a></li>
								<li><a href="index1.php?page=provinsi"><i class="menu-icon icon-table"></i>Provinsi</a></li>
								<li><a href="index1.php?page=kota"><i class="menu-icon icon-table"></i>Kota</a></li>
                            </ul>
							<ul class="widget widget-menu unstyled">
                                <li><a href="index1.php?page=datajual"><i class="menu-icon icon-table"></i>Data Pembelian </a></li>
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
								<h3>Data Penyuplaian Barang</h3>
							</div>
							<?php
								$ambil=$koneksi->query(" SELECT * FROM faktur_beli join supplier on faktur_beli.ID_supplier=supplier.ID_supplier
								where faktur_beli.kode_fakturbeli='$_GET[ids]'");
								$detail=$ambil-> fetch_assoc();
							 ?>
							<strong> <?php echo $detail['nama_supplier'];?></strong> <p>
							<p>
								Nomor Pemesanan &nbsp;: <?php echo $detail['kode_fakturbeli']; ?> <br>
								Tanggal  &nbsp;: <?php echo $detail['tanggal_beli'];?>
							</p>
							<p>
								Alamat  &nbsp;:  <?php echo $detail['alamat_supplier']; ?>
							</p>
							<div class="module-body table">
								<table  class="dataTables_wrapper .table-bordered"  border="1%" cellpadding="1%" cellspacing="1&" width="100%">
									<thead>
										<tr>
											<th >Nomor</th>
											<th >Nama sepatu</th>
											<th >Harga Satuan</th>
											<th >Banyak</th>
											<th >Subtotal </th>
										 </tr>
									 </thead>
									<tbody>
										<?php $nomor=1;?>
										<?php $ambil=$koneksi->query(" SELECT * FROM penyuplaian_barang join sepatu on penyuplaian_barang.kode_sepatu=sepatu.kode_sepatu
										where penyuplaian_barang.kode_fakturbeli='$_GET[ids]' and penyuplaian_barang.kode_sepatu=sepatu.kode_sepatu"); ?>
										<?php while ($pecah=$ambil->fetch_assoc()) {?>
										<tr>
											<td style="color:black;"><?php echo $nomor;?></td>
											<td style="color:black;"><?php echo $pecah['nama_sepatu'];?> </td>
											<td style="color:black;"><?php echo $pecah['harga_beli'];?></td>
											<td style="color:black;"> <?php echo $pecah['qty'];?></td>
											<?php
												 $subtotal=$pecah['harga_beli']*$pecah['qty'];?>
												<td style="color:black;">Rp.  <?php echo number_format ($subtotal);?></td>
										</tr>
										<?php $nomor++;?>
										<?php } ?>
										</tbody>
											<?php
												$ambil=$koneksi->query(" SELECT * FROM faktur_beli join supplier on faktur_beli.ID_supplier=supplier.ID_supplier
												where faktur_beli.kode_fakturbeli='$_GET[ids]'");
												$detail=$ambil-> fetch_assoc();
											?>
										<tfoot>
											<th class="text-center" colspan="4">Total</th>
											<th class="text-center" colspan="2"> Rp. <?php echo number_format ($detail['total_beli']); ?></th>
										</tfoot>
							</table>
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
