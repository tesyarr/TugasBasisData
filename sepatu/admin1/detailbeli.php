
    <div class="span9">
      <div class="content">
        <div class="module">
          <div class="module-head">
            <h3>Detail Pembelian </h3>
          </div>
          <?php
    $ambil=$koneksi->query(" SELECT * FROM ((((faktur_penjualan join pembeli on faktur_penjualan.ID_pembeli=pembeli.ID_pembeli) join pengiriman
      on faktur_penjualan.id_tarifpengiriman=pengiriman.id_tarifpengiriman) join tipe on pengiriman.id_tipe=tipe.id_tipe) join kota on pengiriman.id_kota=
      kota.id_kota) join provinsi on kota.id_provinsi=provinsi.id_provinsi
    where faktur_penjualan.kode_fakturjual='$_GET[id]'");
    $detail=$ambil-> fetch_assoc();
   ?>
   <div class="row2">
   <strong style="color:black;"> <?php echo $detail['nama_pembeli'];?></strong> <br> </br>
   <p style="color:black;">
    Nomor Pemesanan &nbsp;: <?php echo $detail['kode_fakturjual']; ?> <br>
    Tanggal &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <?php echo $detail['tanggal_penjualan'];?>
   </p>
   <p style="color:black;">
    Nomor Telepon &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:  <?php echo $detail['no_telepon']; ?> <br>
    Alamat Pengiriman &nbsp; &nbsp;:  <?php echo $detail['alamat_pengiriman']; ?>, <?php echo $detail['kota']; ?>, <?php echo $detail['nama_provinsi']; ?>. <br>
    Jenis Pengiriman &nbsp;&nbsp; &nbsp;&nbsp;: <?php echo $detail['nama']; ?>
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
        <?php $ambil=$koneksi->query(" SELECT * FROM transaksi_barang join sepatu on transaksi_barang.kode_sepatu=sepatu.kode_sepatu
        where transaksi_barang.kode_fakturjual='$_GET[id]' and transaksi_barang.kode_sepatu=sepatu.kode_sepatu"); ?>
        <?php while ($pecah=$ambil->fetch_assoc()) {?>
        <tr>
          <td ><?php echo $nomor;?></td>
          <td ><?php echo $pecah['nama_sepatu'];?> </td>
          <td ><?php echo $pecah['harga_jual'];?></td>
          <td > <?php echo $pecah['qty_jual'];?></td>
          <?php
             $subtotal=$pecah['harga_jual']*$pecah['qty_jual'];?>
             <?php $pecah['subtotal_jual']=$subtotal; ?>
          <td>Rp.  <?php echo number_format ($pecah['subtotal_jual']);?></td>
        </tr>
        <?php $nomor++;?>
        <?php } ?>
        <tr>
          <td colspan="4"> Tarif Pengiriman </td>
          <?php
            $ambil=$koneksi->query(" SELECT * FROM faktur_penjualan join pengiriman on faktur_penjualan.id_pengiriman=pengiriman.id_pengiriman
            where faktur_penjualan.kode_fakturjual='$_GET[id]' AND faktur_penjualan.id_pengiriman='$detail[id_pengiriman]' ");
            $kota=$ambil-> fetch_assoc();
          ?>
          <td  colspan="2"> Rp. <?php echo number_format ($kota['tarif']); ?></td>
        </tr>

      </tbody>
          <?php
            $ambil=$koneksi->query(" SELECT * FROM faktur_penjualan join pembeli on faktur_penjualan.ID_pembeli=pembeli.ID_pembeli
            where faktur_penjualan.kode_fakturjual='$_GET[id]'");
            $detail=$ambil-> fetch_assoc();
          ?>
        <tfoot>
          <td class="text-center" colspan="4">Total</td>
          <td class="text-center" colspan="2"> Rp. <?php echo number_format ($detail['total']); ?></td>
        </tfoot>

  </table>

        </div><!--/.module-->
      </div><!--/.content-->
    </div><!--/.span9-->
