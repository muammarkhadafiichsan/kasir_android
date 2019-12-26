<form action="<?= base_url() . 'Resetpass/reset_pass' ?>" method="post" enctype="multipart/form-data">



    <div class="form-group col-md-5 ml-3">
      <label for="inputNama">Password Lama</label>
      <input type="text" class="form-control" name="user_name" id="inputNama" placeholder="Masukkan password lama">
    </div>


    <div class="form-group col-md-5 ml-3">
      <label for="inputNoHP">Password Baru</label>
      <input type="text" class="form-control" name="No_HP" id="inputNoHP" placeholder="Masukkan password baru">
    </div>



  <div class="form-group col-md-5 ml-3">
      <label for="inputPass2">Konfirmasi Password</label>
      <input type="text" class="form-control" name="pass_2" id="inputPass2" placeholder="Konfirmasi Password">
    </div>


  <button type="submit" class="btn btn-primary ml-4">Simpan</button>

</form>