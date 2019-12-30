<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile">
                <a href="#" class="nav-link">
                    <div class="profile-image">
                        <img class="img-xs rounded-circle" src="" alt="">
                        <div class="dot-indicator bg-success"></div>
                    </div>
                    <div class="text-wrapper">
                        <div> <?= $this->session->userdata('username')
                                ?> </div>

                    </div>
                </a> </li>
            <li class="nav-item nav-category">
                <span class="nav-link">Dashboard</span>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Admin/Dashboard'); ?>">
                    <span class=" menu-title">Dashboard</span>
                    <i class="icon-screen-desktop menu-icon"></i>
                </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">Input</span></li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
                    <span class="menu-title">News</span>
                    <i class="icon-layers menu-icon"></i>
                </a>
                <div class="collapse" id="ui-basic2">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="<?= base_url('Admin/News/');
                                                                        'index' ?>">Input</a></li>
                        <li class="nav-item"> <a class="nav-link" href="<?= site_url('Admin/News/list');
                                                                        ?>">List</a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
                    <span class="menu-title">retail</span>
                    <i class="icon-layers menu-icon"></i>
                </a>
                <div class="collapse" id="ui-basic2">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="<?= base_url('Admin/Retail/');
                                                                        'index' ?>">Input</a></li>
                        <li class="nav-item"> <a class="nav-link" href="<?= site_url('Admin/Retail/list');
                                                                        ?>">List</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic3">
                    <span class="menu-title">Event</span>
                    <i class="icon-layers menu-icon"></i>
                </a>
                <div class="collapse" id="ui-basic3">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="<?= base_url('Admin/Event/');
                                                                        'index' ?>">Input</a></li>
                        <li class="nav-item"> <a class="nav-link" href="<?= site_url('Admin/Event/list');
                                                                        ?>">List</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">
                    <span class="menu-title">Barista</span>
                    <i class="icon-layers menu-icon"></i>
                </a>
                <div class="collapse" id="ui-basic4">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="<?= base_url('Admin/Barista/');
                                                                        'index' ?>">Input</a></li>
                        <li class=" nav-item"> <a class="nav-link" href="<?= site_url('Admin/Barista/list');
                                                                            ?>">List</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">
                    <span class="menu-title">Produk</span>
                    <i class="icon-layers menu-icon"></i>
                </a>
                <div class="collapse" id="ui-basic4">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="<?= base_url('Admin/Produk/');
                                                                        'index' ?>">Input</a></li>
                        <li class=" nav-item"> <a class="nav-link" href="<?= site_url('Admin/Produk/list');
                                                                            ?>">List</a></li>
                    </ul>
                </div>
            </li>
            <span class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic5">
                    <span class="menu-title">Award's</span>
                    <i class="icon-layers menu-icon"></i>
                </a>
                <div class="collapse" id="ui-basic5">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="<?= base_url('Admin/Awards/');
                                                                        'index' ?>">Input</a></li>
                        <li class="nav-item"> <a class="nav-link" href="<?= site_url('Admin/Awards/list');
                                                                        ?>">List</a></li>
                    </ul>
                </div>
                </li>
                <span class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic5">
                        <span class="menu-title">Tips & Trik</span>
                        <i class="icon-layers menu-icon"></i>
                    </a>
                    <div class="collapse" id="ui-basic5">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="<?= base_url('Admin/Tips_trik/');
                                                                            'index' ?>">Input</a></li>
                            <li class="nav-item"> <a class="nav-link" href="<?= site_url('Admin/Tips_trik/list');
                                                                            ?>">List</a></li>
                        </ul>
                    </div>
                    </li>
                    <span class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic5">
                            <span class="menu-title">Artikel</span>
                            <i class="icon-layers menu-icon"></i>
                        </a>
                        <div class="collapse" id="ui-basic5">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="<?= base_url('Admin/Artikel/');
                                                                                'index' ?>">Input</a></li>
                                <li class="nav-item"> <a class="nav-link" href="<?= site_url('Admin/Artikel/list');
                                                                                ?>">List</a></li>
                            </ul>
                        </div>
                        </li>
                        <span class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic5">
                                <span class="menu-title">profile</span>
                                <i class="icon-layers menu-icon"></i>
                            </a>
                            <div class="collapse" id="ui-basic5">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('Admin/Profile/');
                                                                                    'index' ?>">Input</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="<?= site_url('Admin/Profile/list');
                                                                                    ?>">List</a></li>
                                </ul>
                            </div>
                            </li>
                            <span class="nav-item">
                                <a class="nav-link" data-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic5">
                                    <span class="menu-title">profile2</span>
                                    <i class="icon-layers menu-icon"></i>
                                </a>
                                <div class="collapse" id="ui-basic5">
                                    <ul class="nav flex-column sub-menu">
                                        <li class="nav-item"> <a class="nav-link" href="<?= base_url('Admin/Profile2/');
                                                                                        'index' ?>">Input</a></li>
                                        <li class="nav-item"> <a class="nav-link" href="<?= site_url('Admin/Profile2/list');
                                                                                        ?>">List</a></li>
                                    </ul>
                                </div>
                                </li>
                                <span class="nav-item">
                                    <a class="nav-link" data-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic5">
                                        <span class="menu-title">profile3</span>
                                        <i class="icon-layers menu-icon"></i>
                                    </a>
                                    <div class="collapse" id="ui-basic5">
                                        <ul class="nav flex-column sub-menu">
                                            <li class="nav-item"> <a class="nav-link" href="<?= base_url('Admin/Profile3/');
                                                                                            'index' ?>">Input</a></li>
                                            <li class="nav-item"> <a class="nav-link" href="<?= site_url('Admin/Profile3/list');
                                                                                            ?>">List</a></li>
                                        </ul>
                                    </div>
                                    </li>

        </ul>
    </nav>