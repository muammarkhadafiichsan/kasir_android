<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-center p-5">
                            <div class="brand-logo">

                            </div>
                            <h4>Nine Coffee</h4>
                            <h6 class="font-weight-light">login untuk lanjut</h6>

                            <?= $this->session->flashdata('message'); ?>
                            <?= $this->session->flashdata('pesan'); ?>
                            <form method="post" action="<?= base_url('Auth/login'); ?>" class="pt-3">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="username" placeholder="Username" name="username">
                                    <?= form_error('username', '<div class="text-danger small">', '</div>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                                    <?= form_error('password', '<div class="text-danger samall">', '</div>'); ?>
                                </div>
                                <button type="submit" class="btn btn-outline-dark form-control"> masuk </button>

                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>