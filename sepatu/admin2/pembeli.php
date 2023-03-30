<div class="span9">
  <div class="content">
    <div class="module">
      <div class="module-head">
        <h3>Data Pembeli</h3>
      </div>
      <div class="module-body table">
        <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
          <thead>
            <tr>
              <th>Nomor</th>
              <th>ID</th>
              <th>Nama Pembeli</th>
              <th>Nomor Telepon</th>
            </tr>
          </thead>
          <tbody>
              <?php $nomor=1;?>
              <?php $ambil=$koneksi->query("Select * FROM pembeli"); ?>
              <?php while ($pecah=$ambil->fetch_assoc()) {?>
              <tr>
                <td><?php echo $nomor;?></td>
                <td><?php echo $pecah['ID_pembeli'];?> </td>
                <td><?php echo $pecah['nama_pembeli'];?></td>
                <td><?php echo $pecah['no_telepon'];?> </td>
              </tr>
              <?php $nomor++;?>
              <?php } ?>

          </tbody>
        </table>
      </div>
    </div><!--/.module-->

  <br />

  </div><!--/.content-->
</div><!--/.span9-->
