<div class="span9">
  <div class="content">
    <div class="module">
      <div class="module-head">
        <h2 align="center" >Form Edit</h2>
        <?php
          $ambil=$koneksi->query("SELECT * FROM sepatuu WHERE kode_sepatu='$_GET[id]'");
          $pecah=$ambil->fetch_assoc ();
        ?>
        <br></br>
        <form method="POST" class="form-horizontal row-fluid">
            <div class="control-group">
              <label class="control-label" for="basicinput">Nama sepatu</label>
              <div class="controls">
                <input type="text" id="basicinput"  class="span8" name="nama_sepatu"  value ="<?php echo $pecah['nama_sepatu']?>">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="basicinput">Harga Jual</label>
              <div class="controls">
                <input type="number" id="basicinput"  class="span8" name="harga_jual"  value ="<?php echo $pecah['harga_jual']?>">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="basicinput">Jenis </label>
              <div class="controls">
                <select name="id_jenissepatu" class="span8">
                <option value="">-- Pilih Jenis sepatu -- </option>
                  <?php $ambil=$koneksi->query("SELECT * FROM jenis_sepatu");
                      while ($pecah1=$ambil->fetch_assoc()) { ?>
                <option value="<?php echo $pecah1['id_jenissepatu']; ?>"> <?php echo $pecah1['nama_jenissepatu']; ?></option>
                  <?php } ?>
                 </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="basicinput">Foto</label>
              <div class="controls">
                <input type="file" id="basicinput"  class="span8" name="gambar"  value ="<?php echo $pecah['gambar']?>">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="basicinput"> Deskripsi </label>
              <div class="controls">
                <input type="text" id="basicinput"  class="span8" name="deskripsi"  value ="<?php echo $pecah['deskripsi']?>">
              </div>
            </div> <br> </br> <center>
            <button class="btn btn-primary" name="simpan"> Simpan </button>
            <a href="index1.php?page=sepatuu" class="btn btn-warning"> Kembali </a>
      </form>
      <?php
        if(isset($_POST['simpan']))
        {
          $sql=$koneksi->query("UPDATE sepatuu SET nama_spatu='$_POST[nama_sepatu]', harga_jual='$_POST[harga_jual]',
          harga_beli='$_POST[harga_beli]', id_jenissepatu='$_POST[id_jenissepatu]' ,gambar='$_POST[gambar]', deskripsi='$_POST[deskripsi]' where kode_sepatu='$_GET[id]'");
          if(isset($sql)===TRUE) {
          echo "<script>alert('Data Berhasil Diubah');</script>";
          echo "<script> location='index1.php?page=sepatuu';</script>";
           }
          else
           {
              echo "<script>alert('Data Gagal Ditambahkan');</script>";
          }

        }



      ?>
