<?php

	 $koneksi=new mysqli("localhost","root","","toko_sepatu");
	  session_start();
	  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	 $benar=$_SESSION['ID_pembeli'];
	 if (!isset($_SESSION['ID_pembeli'])) {
		 echo "<script>alert('Silahkan login terlebih dahulu');</script>";
		 echo "<script>location='http://localhost/login1/index.php';</script>"; }

?>
<!DOCTYPE html>
<html lang="en">
 <!--================Home Banner Area =================-->

<!--================End Home Banner Area =================-->
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/dress(1).PNG" type="image/png">
        <title>Blanca Sport</title>
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

        <!--================Header Menu Area =================-->

        <!--================Header Menu Area =================-->

	<div class="gallery">
		<div class="text-center">
			<h2 >Keranjang Anda</h2> <center>
			<table class="table table-bordered text-center">
			<tr>
				<th>No</th>
				<th>Nama Produk</th>
				<th>Harga Produk</th>
				<th>Qty</th>
				<th>Subtotal</th>
				<th></th>
			</tr>
			<tbody>
			<?php $nomor=1;?>
			<?php $total=0; ?>
			<?php foreach ($_SESSION['keranjang'] as $kode_sepatu => $jumlah ): ?>
			<?php
				$tampil=$koneksi->query("SELECT * FROM sepatu where kode_sepatu='$kode_sepatu'");
				$sepatu=$tampil->fetch_assoc();
				$subharga=$sepatu['harga_jual']*$jumlah;
				?>
			<tr>
				<td><?php echo $nomor;?></td>
				<td><?php echo $sepatu['nama_sepatu'] ?></td>
				<td>RP. <?php echo number_format( $sepatu['harga_jual']) ?></td>
				<td><?php echo $jumlah ?></td>
				<td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Rp. <?php echo number_format( $subharga) ?></td>
			</tr>
			<?php $nomor++;?>
			<?php $total+=$subharga; ?>
			<?php endforeach ;?>
			</tbody>
			<tfoot>
				<th class="text-center" colspan="4">Total</th>
				<th class="text-center" colspan="2"> Rp. <?php echo number_format ($total); ?></th>
			</tfoot>
		</table> <br>
		<div class="row">
		<form method="POST">
			<center>
				<div class="col-md-20">
				<?php $ambil=$koneksi->query("SELECT * FROM pembeli where ID_pembeli='$benar'");
							 $nohp=$ambil->fetch_assoc()?>
	 <input type="text" readonly class="form-control" placeholder="<?php echo $nohp['nama_pembeli']; ?>">
				<br>
					<input type="text" readonly class="form-control" placeholder="<?php echo $nohp['no_telepon']; ?>">
				<br>
				<select name="provinsi"  id="provinsi"class="form-control">
						<option value="">-- Pilih Provinsi -- </option>
						<?php $ambil=$koneksi->query("SELECT * FROM provinsi");
							 while ($pecah=$ambil->fetch_assoc()) { ?>
						<option value="<?php echo $pecah['id_provinsi']; ?>"> <?php echo $pecah['nama_provinsi']; ?></option>
							 <?php } ?>
					</select>
				<br>
				<select name="kota" id="kota"class="form-control">
						<option value="">-- Pilih Kota -- </option>
						<?php $ambil=$koneksi->query("SELECT * FROM kota inner join provinsi on kota.id_provinsi=provinsi.id_provinsi");
							 while ($pecah=$ambil->fetch_assoc()) { ?>
						<option id="kota" class="<?php echo $pecah['id_provinsi']; ?>" value="<?php echo $pecah['id_kota']; ?>"> <?php echo $pecah['nama_kota']; ?></option>
							 <?php } ?>
					</select>
				</br>
				<center>
				<select name="pengiriman" id="pengiriman" class="form-control">
						<option value="">-- Pilih tipe pengiriman -- </option>
						<?php $ambil=$koneksi->query("SELECT * FROM (pengiriman inner join kota on pengiriman.id_kota=kota.id_kota) join tipe on
						pengiriman.id_tipe=tipe.id_tipe");
							 while ($pecah=$ambil->fetch_assoc()) { ?>
						<option id="pengiriman" class="<?php echo $pecah['id_kota']; ?>" value="<?php echo $pecah['id_tarifpengiriman']; ?>">
						<?php echo $pecah['nama']; ?> <?php echo $pecah['nama_tipe']; ?>(<?php echo $pecah['tarif']; ?>)</option>
							 <?php } ?>
					</select>
				</center>
				</div> </div>
				<br>


				<div class="row1">
					<input type="text"  class="form-control" name="alamat_pengiriman" placeholder="Masukkan Alamat Pengiriman Secara Lengkap (Termasuk Kode Pos)"> </div>
			<button class="btn btn-success" name="checkout">Checkout</button>
			</div>
		</form>
		<script src="jquery-1.10.2.min.js"></script>
		<script src="jquery.chained.min.js"></script>
		<script>
			$("#kota").chained("#provinsi");
			$("#pengiriman").chained("#kota");
		</script>
		<?php if(isset($_POST['checkout'])) {
			date_default_timezone_set('Asia/Jakarta');
			$id_pembeli=$benar;
			$kota=$_POST['kota'];
			$tipe=$_POST['tipe'];
			$tanggalpembelian=date("Y-m-d H:i:s");
			$tanggalexp=date('Y-m-d H:i:s', time() +(3600*48));
			$alamat=$_POST['alamat_pengiriman'];
			$pengiriman=$_POST['pengiriman'];
			$ambil=$koneksi->query("SELECT * FROM pengiriman where id_tarifpengiriman='$pengiriman'");
			$array_ongkir=$ambil->fetch_assoc();
			$tarif=$array_ongkir['tarif'];
			$total_pembelian=$total+$tarif;

			$data=$koneksi->query("SELECT max(kode_fakturjual) as kode from faktur_penjualan");
			$tm_cari=mysqli_fetch_array($data);
			$kode=substr($tm_cari['kode'],1,4);
			$tambah=$kode+1;
			if($tambah<10) {
			$id="F000".$tambah; }
			else
				$id="F00".$tambah;
			$koneksi->query("INSERT INTO faktur_penjualan(kode_fakturjual, ID_pembeli, tanggal_penjualan, total,
			alamat_pengiriman,id_status,id_tarifpengiriman,tanggal_jatuhtempo) VALUES
			('$id','$id_pembeli','$tanggalpembelian','$total_pembelian','$alamat','S001','$pengiriman','$tanggalexp')");
			$koneksi->query("UPDATE user SET alamat='$alamat' where ID_user='$benar'");

			foreach ($_SESSION['keranjang'] as $kode_sepatu => $jumlah ) {
				$koneksi->query("INSERT INTO transaksi_barang (kode_fakturjual,kode_sepatu,qty_jual,subtotal_jual) VALUES ('$id','$kode_sepatu','$jumlah',
				'$subharga')");
			}
			// mengosongkan keranjang belanja
			unset($_SESSION['keranjang']);


			echo "<script>alert('Pembelian Sukses');</script>";
			echo "<script>location='http://localhost/sepatu/web1/nota.php?ids=$id';</script>";
		}
    	 ?>




	</div>
	</body>
</html>
