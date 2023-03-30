<?php include "config.php" ?>
  <?php include "header.php"?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/dress(1).PNG" type="image/png">
        <title>Belsbee</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>




<body>


<div class="text-center">


<nav>

    <table class="table1 text-center">
                <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>Nama Pembeli</th>
                    <th>Tanggal dan Waktu </th>
                    <th>Total</th>
                    <th>Aksi </th>
                  </tr>
                </thead>
                <tbody>
                    <?php $nomor=1;?>
                    <?php $ambil=$koneksi->query("Select * FROM faktur_penjualan join pembeli on faktur_penjualan.ID_pembeli=pembeli.ID_pembeli
                    where faktur_penjualan.ID_pembeli='$benar'"); ?>
                    <?php while ($pecah=$ambil->fetch_assoc()) {?>
                    <tr>
                      <td><?php echo $nomor;?></td>
                      <td><?php echo $pecah['nama_pembeli'];?> </td>
                      <td><?php echo $pecah['tanggal_penjualan'];?></td>
                      <td>Rp. <?php echo number_format ($pecah['total']);?></td>
                      <td>
                        <a href="index.php?page=detailriwayat&ids=<?php echo $pecah['kode_fakturjual'];?>" class="btn-info"> Detail </a>
                      </td>
                    </tr>
                    <?php $nomor++;?>
                    <?php } ?>

                </tbody>
              </table>
            </div>
</nav>
</tbody
          <br></br>
          <br></br>
          <br></br>
          <br></br>
          <br></br>
<?php include  "footer.php" ?>
