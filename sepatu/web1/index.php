<?php include "config.php" ?>
<?php include "header.php" ?>

<section>
          <?php
            if(isset($_GET['page']))
            {
              if($_GET['page']=='home') {
              include "produk.php"; }
              elseif($_GET['page']=='produk') {
              include "produk.php"; }
              elseif($_GET['page']=='beli') {
              include "beli.php"; }
              elseif($_GET['page']=='detail') {
              include "detailproduk.php"; }
              elseif($_GET['page']=='trail') {
              include "trail.php"; }
              elseif($_GET['page']=='football') {
              include "football.php"; }
              elseif($_GET['page']=='basket') {
              include "basket.php"; }
              elseif($_GET['page']=='data') {
              include "data.php"; }
              elseif($_GET['page']=='riwayat') {
              include "riwayat.php"; }
              elseif($_GET['page']=='detailriwayat') {
              include "detailriwayat.php"; }
              elseif($_GET['page']=='jenis') {
              include "jenis.php"; }
              elseif($_GET['page']=='keranjang') {
              include "keranjang.php"; }
elseif($_GET['page']=='editakun') {
              include "editakun.php"; }
              
elseif($_GET['page']=='cari') {
              include "cari.php"; }
            }
            else
            {
              include "home.php";
            }
          ?>
          </section>

        <?php include "footer.php" ?>
