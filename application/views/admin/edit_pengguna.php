    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                    <!-- Topbar Search -->
                        <h3 class="font-weight-bold text-gray-900 ml-md-3 my-2 my-md-0 mw-100"><?php echo $this->session->userdata('access'); ?></h3>
                                <!-- Topbar Navbar -->
                                <ul class="navbar-nav ml-auto">

                                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                                    <li class="nav-item dropdown no-arrow d-sm-none">
                                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-search fa-fw"></i>
                                        </a>
                                        <!-- Dropdown - Messages -->
                                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                            aria-labelledby="searchDropdown">
                                            <form class="form-inline mr-auto w-100 navbar-search">
                                                <div class="input-group">
                                                    <input type="text" class="form-control bg-light border-0 small"
                                                        placeholder="Search for..." aria-label="Search"
                                                        aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary" type="button">
                                                            <i class="fas fa-search fa-sm"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </li>

                                    <!-- Nav Item - Alerts -->
                                    <li class="nav-item dropdown no-arrow mx-1">
                                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-bell fa-fw"></i>
                                            <!-- Counter - Alerts -->
                                            <span class="badge badge-danger badge-counter">3+</span>
                                        </a>
                                        <!-- Dropdown - Alerts -->
                                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                            aria-labelledby="alertsDropdown">
                                            <h6 class="dropdown-header">
                                                Alerts Center
                                            </h6>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="mr-3">
                                                    <div class="icon-circle bg-primary">
                                                        <i class="fas fa-file-alt text-white"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="small text-gray-500">December 12, 2019</div>
                                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                                </div>
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="mr-3">
                                                    <div class="icon-circle bg-success">
                                                        <i class="fas fa-donate text-white"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="small text-gray-500">December 7, 2019</div>
                                                    $290.29 has been deposited into your account!
                                                </div>
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="mr-3">
                                                    <div class="icon-circle bg-warning">
                                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="small text-gray-500">December 2, 2019</div>
                                                    Spending Alert: We've noticed unusually high spending for your account.
                                                </div>
                                            </a>
                                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                        </div>
                                    </li>

                                    <!-- Nav Item - Messages -->
                                    <li class="nav-item dropdown no-arrow mx-1">
                                        <!-- Dropdown - Messages -->
                                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                            aria-labelledby="messagesDropdown">
                                            <h6 class="dropdown-header">
                                                Message Center
                                            </h6>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="dropdown-list-image mr-3">
                                                    <img class="rounded-circle" src="<?= base_url()?>assets/back/img/undraw_profile_1.svg"
                                                        alt="...">
                                                    <div class="status-indicator bg-success"></div>
                                                </div>
                                                <div class="font-weight-bold">
                                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                                        problem I've been having.</div>
                                                    <div class="small text-gray-500">Emily Fowler ?? 58m</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="dropdown-list-image mr-3">
                                                    <img class="rounded-circle" src="<?= base_url()?>assets/back/img/undraw_profile_2.svg"
                                                        alt="...">
                                                    <div class="status-indicator"></div>
                                                </div>
                                                <div>
                                                    <div class="text-truncate">I have the photos that you ordered last month, how
                                                        would you like them sent to you?</div>
                                                    <div class="small text-gray-500">Jae Chun ?? 1d</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="dropdown-list-image mr-3">
                                                    <img class="rounded-circle" src="<?= base_url()?>assets/back/img/undraw_profile_3.svg"
                                                        alt="...">
                                                    <div class="status-indicator bg-warning"></div>
                                                </div>
                                                <div>
                                                    <div class="text-truncate">Last month's report looks great, I am very happy with
                                                        the progress so far, keep up the good work!</div>
                                                    <div class="small text-gray-500">Morgan Alvarez ?? 2d</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="dropdown-list-image mr-3">
                                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                                        alt="...">
                                                    <div class="status-indicator bg-success"></div>
                                                </div>
                                                <div>
                                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                                        told me that people say this to all dogs, even if they aren't good...</div>
                                                    <div class="small text-gray-500">Chicken the Dog ?? 2w</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                                        </div>
                                    </li>

                                    <div class="topbar-divider d-none d-sm-block"></div>

                                    <!-- Nav Item - User Information -->
                                    <li class="nav-item dropdown no-arrow">
                                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('name'); ?></span>
                                            <img class="img-profile rounded-circle"
                                                src="<?= base_url()?>assets/back/img/undraw_profile.svg">
                                        </a>
                                        <!-- Dropdown - User Information -->
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                            aria-labelledby="userDropdown">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Logout
                                            </a>
                                        </div>
                                    </li>

                                </ul>

                            </nav>
                            <!-- End of Topbar -->
        </div>
        <!-- Content Wrapper -->
        <div class="container-fluid">
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Edit Data Pengguna</h1>
                    <div class="bg-white py-lg-5 card shadow mb-4">
                        <form class="col row-cols-lg-auto g-4 align-items-center" action="<?php echo site_url('User/Update') ?>" method = "post">                         
                        <input type="hidden" class="form-control" name="id_user" value=" <?php echo $user->id_user ?> ">
                          <div class="row mb-3 ml-12">
                            <label for="masalah" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="nama_user" value="<?php echo $user->nama_user ?> ">
                            </div>
                          </div>

                          <div class="row mb-3 ml-12">
                            <label for="masalah" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" name="email" value="<?php echo $user->email ?> ">
                            </div>
                          </div>

                          <div class="row mb-3 ml-12">
                            <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Departemen</label>
                            <div class="col-sm-10">
                                <select name="id_departemen" class="form-control">
                                    <?php foreach ($departemen as $dpn): ?>
                                        <option value="<?php echo $dpn->ID_DEPARTEMEN ?>" <?php if($dpn->ID_DEPARTEMEN == $user->id_departemen) echo 'selected'; ?>><?php echo $dpn->NAMA_DEPARTEMEN ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                          </div>

                          <div class="row mb-3 ml-12">
                            <label for="masalah" class="col-sm-2 col-form-label">Nomor Telepon</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="no_telp" value="<?php echo $user->no_telp ?> ">
                            </div>
                          </div>

                          <div class="row mb-3 ml-12">
                            <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Level</label>
                            <div class="col-sm-10">
                                <select name="id_level" class="form-control">
                                    <?php foreach ($level as $lvl): ?>
                                        <option value="<?php echo $lvl->ID_LEVEL ?>" <?php if($lvl->ID_LEVEL == $user->id_level) echo 'selected'; ?>><?php echo $lvl->NAMA_LEVEL ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                          </div>

                            <br>
                            <div class="col-8 text-center">
                                <input type="submit" class="col-3 btn btn-primary" role="button" value="Tugaskan">
                                <a class="col-3 btn btn-danger" href="<?=site_url('user')?>" role="button">Kembali</a>
                            </div>
                        </form>
                    </div>
                <!-- /.container-fluid -->
        </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Helpdesk RSUD Jombang 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

    </div>
    <!-- End of Page Wrapper -->