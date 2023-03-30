<?php $koneksi = new mysqli("localhost","root","","toko_sepatu"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blanca Admin</title>
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
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index1.php?page=index">Blanca</a>
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
                                    <li><a href="index1.php?page=editprofil">Edit Profile</a></li>
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
