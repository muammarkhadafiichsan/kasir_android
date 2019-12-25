<form action="<?= base_url() . 'Produk/tambah_produk' ?>" method="post" enctype="multipart/form-data">


  <div class="form-row">
    <div class="form-group col-md-5 ml-4">
      <label for="inputNama">Nama Produk</label>
      <input type="text" class="form-control" name="nama_produk" id="inputNama" placeholder="Nama Produk">
    </div>


    <div class="form-group col-md-5 ml-4">
      <label for="inputHarga1">Harga Modal</label>
      <input type="text" class="form-control" name="harga_modal" id="inputHarga1" placeholder="Harga Modal">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-5 ml-4">
      <label for="inputHarga2">Harga Jual</label>
      <input type="text" class="form-control" name="harga_jual" id="inputHarga2" placeholder="Harga Jual">
    </div>

    <div class="form-group col-md-5 ml-4">
      <label for="inputGambar">Gambar</label>
      <div class="custom-file">
        <input type="file" class="custom-file-input" name="gambar" id="customFile">
        <label class="custom-file-label" name="gambar" for="customFile">Pilih File</label>
      </div>
    </div>
  </div>


  <label class="col-sm-2 ml-3 col-form-label">Kategori Produk</label>
  <div class="col-sm-10 ml-3">
    <select class="form-control m-b" name="id_kategori" id="id_kategori">
      <option value="">--Pilih Kategori--</option>
      <?php
      $servername = "localhost";
      $database = "kasir_android";
      $username = "root";
      $password = "";
      $conn = mysqli_connect($servername, $username, $password, $database);
      $sql_akses = mysqli_query($conn, "SELECT * FROM kategori_produk") or die(mysqli_error($conn));
      while ($data_akses = mysqli_fetch_array($sql_akses)) {
        echo '<option value="' . $data_akses['id_kategori'] . '">' . $data_akses['kategori'] . '</option>';
      }
      ?>
    </select>
  </div>


  <button type="submit" class="btn btn-primary ml-4 mt-3">Simpan</button>

</form>