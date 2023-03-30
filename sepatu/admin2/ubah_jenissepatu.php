<div class="span9">
  <div class="content">
    <div class="module">
      <div class="module-head">
        <h2 align="center" >Form Edit</h2>
        <?php
          $ambil=$koneksi->query("SELECT * FROM jenis_sepatu WHERE id_jenissepatu='$_GET[id]'");
          $pecah=$ambil->fetch_assoc ();
        ?>
        <br></br>
        <form method="POST" class="form-horizontal row-fluid">
            <div class="control-group">
              <label class="control-label" for="basicinput">Nama Jenis</label>
              <div class="controls">
                <input type="text" id="basicinput"  class="span8" name="nama_jenissepatu" value ="<?php echo $pecah['nama_jenissepatu']?>">
              </div>
            <button class="btn btn-primary" name="simpan"> Simpan </button>
            <a href="index1.php?page=jenis_sepatu" class="btn btn-warning"> Kembali </a>
      </form>
      <?php
        if(isset($_POST['simpan']))
        {
          $koneksi->query("UPDATE jenis_sepatu SET nama_jenissepatu='$_POST[nama_jenissepatu]' where id_jenissepatu='$_GET[id]'");
          echo "<script>alert('Data Berhasil Diubah');</script>";
          echo "<script> location='index1.php?page=jenis_sepatu';</script>";
        }



      ?>
