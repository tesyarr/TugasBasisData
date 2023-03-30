<?php include "config.php"?>
<?php include "header.php"?>

<div class="gallery">
	 <div class="text-center">
		 <h2>Detail Produk</h2>	 </div>
		 <div class="container"><br></br>
		 <?php
		 $ambil=$koneksi->query("SELECT * FROM sepatu where kode_sepatu=['$id_produk']");
 $_SESSION['keranjang'][$id_produk];
			$id_produk=$_GET['id'];
			 $sepatu=$ambil->fetch_assoc()
			 $jenis=$koneksi->query("SELECT * FROM sepatu join jenis_sepatu on sepatu.id_jenissepatu=jenis_sepatu.id_jenissepatu where kode_sepatu='$id_produk'");
			 $jenis_sepatu=$jenis->fetch_assoc();
		 ?>
		 <div class="row3">
			 <div class="col-md-6">
				<img src="http://localhost/sepatu/foto/<?php echo $sepatu['gambar']?>" alt="" class="img-res">
			</div>
			 <div class="col-md-6">
				 <h2> <?php echo $sepatu['nama_sepatu']; ?> </h2>
				 <h4> <b> Rp. <?php echo number_format ($sepatu['harga_jual']); ?> <b> </h4>
				 <h4> Jenis : <?php echo $jenis_sepatu['nama_jenissepatu']; ?> </h4>
				 <h4><?php echo $sepatu['deskripsi']; ?> </h4>
				 <h4> Stok : <?php echo $sepatu['stok']; ?> </h4>
				 <div class="row4">
				 <form method="POST">
						<label style="color:black"> Jumlah : <input type="number" min="1" required class="form-control"  name="jumlah"> </label> </div>
						<div class="input-group">
						<?php if($sepatu['stok']>0) { ?>
							<button name="beli" class="btn btn-success"> Beli Sekarang </button>
						<?php } else { ?>
							<button class="btn btn-succes" disabled > Beli Sekarang </button>
						<?php } ?>
							 <a href="index.php?page=produk" class="btn btn-warning" name="beli"> Kembali </a>
						</div>
				</form>
				<?php if(isset($_POST['beli'])) {
						$jumlah=$_POST['jumlah'];
						$_SESSION['keranjang'][$id_produk]=$jumlah+$_SESSION['keranjang'][$id_produk];
						echo "<script>alert('Produk Telah Masuk kedalam Keranjang Belanja');</script>";
						echo "<script>location='keranjang.php';</script>";
				}
				?>
			</div>
		</div>
