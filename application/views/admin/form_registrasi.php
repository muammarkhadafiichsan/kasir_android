<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-center p-5">
                            <div class="brand-logo">

                            </div>

                            <h3 class="font-weight-light">sign up</h3>
                            <form method="post" action="<?= base_url('Registrasi/index') ?>" class="pt-3">

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="username" name="username" value="<?= set_value('username'); ?>">
                                    <?= form_error('username', '<div class="text-danger small">', '</div>'); ?>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                                    <?= form_error('password', '<div class="text-danger small">', '</div>'); ?>
                                </div>

                                <button type="submit" class="btn btn-outline-dark form-control"> registrasi </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>