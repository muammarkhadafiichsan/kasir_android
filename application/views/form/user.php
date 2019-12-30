<form action="<?= base_url() . 'User/tambah_user' ?>" method="post" enctype="multipart/form-data">


  <div class="form-row">
    <div class="form-group col-md-5 ml-4">
      <label for="inputNama">Username</label>
      <input type="text" class="form-control" name="user_name" id="inputNama" placeholder="Username">
    </div>


    <div class="form-group col-md-5 ml-4">
      <label for="inputNoHP">No. HP</label>
      <input type="text" class="form-control" name="No_HP" id="inputNoHP" placeholder="No. HP">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-5 ml-4">
      <label for="inputPass1">Password</label>
      <input type="text" class="form-control" name="pass_1" id="inputPass1" placeholder="Password">
    </div>

    <div class="form-group col-md-5 ml-4">
      <label for="inputPass2">Konfirmasi Password</label>
      <input type="text" class="form-control" name="pass_2" id="inputPass2" placeholder="Konfirmasi Password">
    </div>
  </div>

  <button type="submit" class="btn btn-primary ml-4">Simpan</button>

</form>