<?php include "config.php" ?>
<?php include "header.php" ?>
							<section>
							<?php
								if(isset($_GET['page'])) {
									if($_GET['page']=='pembeli') {
									include "pembeli.php"; }
									elseif($_GET['page']=='sepatu') {
									include "sepatu.php";}
									elseif($_GET['page']=='jenissepatu') {
									include "jenissepatu.php";}
									elseif($_GET['page']=='datajual') {
									include "data_penjualan.php";}
									elseif($_GET['page']=='Detail') {
									include "detailbeli.php";}
									elseif($_GET['page']=='tambah_sepatu') {
									include "tambahsepatu.php";}
									elseif($_GET['page']=='tambah_jenissepatu') {
									include "tambah_jenissepatu.php";}
									elseif($_GET['page']=='ubah_jenissepatu') {
									include "ubah_jenissepatu.php";}
									elseif($_GET['page']=='hapus_jenissepatu') {
									include "hapus_jenissepatu.php";}
									elseif($_GET['page']=='hapus_pembeli') {
									include "hapus_pembeli.php";}

									elseif($_GET['page']=='hapus_sepatu') {
									include "hapus_sepatu.php";}
									elseif($_GET['page']=='ubah_sepatu') {
									include "ubah_sepatu.php";}
									elseif($_GET['page']=='index') {
									include "index.php";}
									elseif($_GET['page']=='profile') {
									include "profile.php";}
									elseif($_GET['page']=='editprofil') {
									include "editprofil.php";}
									elseif($_GET['page']=='kota') {
									include "kota.php";}
									elseif($_GET['page']=='tambah_kota') {
									include "tambah_kota.php";}
									elseif($_GET['page']=='ubah_kota') {
									include "ubah_kota.php";}
									elseif($_GET['page']=='hapus_kota') {
									include "hapus_kota.php";}
									elseif($_GET['page']=='provinsi') {
									include "provinsi.php";}
									elseif($_GET['page']=='tambah_provinsi') {
									include "tambah_provinsi.php";}
									elseif($_GET['page']=='ubah_provinsi') {
									include "ubah_provinsi.php";}
									elseif($_GET['page']=='hapus_provinsi') {
									include "hapus_provinsi.php";}



								}
								else {
									include "index.php";
								}
								?>
							</section>
                           			<?php include "footer.php" ?>
