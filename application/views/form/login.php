  <body>


    <div class="wrapper" style="background-image: url('assets2/images/bg2.jpg');">
      <div class="inner">
        <div class="image-holder">
          <img src="assets2/images/kopipojok.jpg" alt="kopipojok">
        </div>
        <form method="post" action="<?= base_url('Login/index'); ?>">
          <h3>Masuk Untuk Lanjut!</h3>
          <?= $this->session->flashdata('message'); ?>
          <?= $this->session->flashdata('pesan'); ?>
          <br>
          <div class="form-wrapper">
            <input type="text" placeholder="Username" id="username" name="username" class="form-control">

            <i class="zmdi zmdi-account"></i>

          </div>

          <div class="form-wrapper">
            <input type="password" placeholder="Password" id="password" name="password" class="form-control">
            <i class="zmdi zmdi-lock"></i>

          </div>
          <button type="submit" class="btn btn-outline-dark form-control"> masuk </button>55
        </form>
      </div>
    </div>

  </body>

  </html>