  <body>


    <div class="wrapper" style="background-image: url('assets2/images/bg2.jpg');">
      <div class="inner">
        <div class="image-holder">
          <img src="assets2/images/kopipojok.jpg" alt="kopipojok">
        </div>
        <form method="post" action="<?= base_url('Login'); ?>">
          <h3>Masuk Untuk Lanjut!</h3>
          <?= $this->session->flashdata('message'); ?>
          <?= $this->session->flashdata('pesan'); ?>
          <br>
          <div class="form-wrapper">
            <input type="text" placeholder="Username" id="username" name="username" class="form-control">
            <i class="zmdi zmdi-account"></i>
            <?= form_error('username', '<div class="text-danger small">', '</div>'); ?>

          </div>

          <div class="form-wrapper">
            <input type="password" placeholder="Password" id="password" name="password" class="form-control">
            <i class="zmdi zmdi-lock"></i>
            <?= form_error('password', '<div class="text-danger small">', '</div>'); ?>
          </div>
          <button type="submit" class="btn btn-outline-dark form-control"> masuk </button>
        </form>
      </div>
    </div>
    </div>

  </body>

  </html>