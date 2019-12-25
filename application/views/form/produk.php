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

  <div class="form-group col-md-5 ml-2">
    <label for="inputGambar">Kategori</label>
    <select class="custom-select">
      <option selected>Kategori</option>
      <option value="1">Makanan</option>
      <option value="2">Minuman</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary ml-4">Simpan</button>

</form>