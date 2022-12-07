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
                <h1 class="h3 mb-2 text-gray-800">Tiket</h1>
                    <div class="bg-white py-lg-5 card shadow mb-4">
                        <form class="col row-cols-lg-auto g-4 align-items-center" action="<?php echo site_url('Tiket/Update') ?>">
                        <input type="hidden" name="ID_TIKET" value=" <?php echo $tiket->ID_INVENTORY ?> ">
                            <div class="form-group row">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Nomor Tiket</label>
                                </div>
                                <div class="col-sm-4">
                                    <input name="ID_TIKET" type="text" class="form-control" value=" <?php echo $tiket->ID_TIKET ?> " readonly>
                                </div>
                                <div class="col-sm-2">
                                    <label class="col-form-label">Tanggal Ajuan</label>
                                </div>
                                <div class="col-sm-4">
                                    <input name="TANGGAL" type="text" class="form-control" value=" <?php echo $tiket->TANGGAL ?> " readonly>
                                </div>

    
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Nama Pengaju</label>
                                </div>
                                <div class="col-sm-4">
                                    <input name="ID_USER" type="text" class="form-control" value=" <?php echo $tiket->ID_USER ?> " readonly>
                                </div>
                                <div class="col-sm-2">
                                    <label class="col-form-label">Inventory</label>
                                </div>
                                <div class="col-sm-4">
                                    <input name="ID_INVENTORY" type="text" class="form-control" value=" <?php echo $tiket->ID_INVENTORY ?> " readonly>
                                </div>

                            </div>
                            


                          <div class="row mb-3 ml-12">
                            <label for="masalah" class="col-sm-2 col-form-label">Nama Tiket</label>
                            <div class="col-sm-10">
                              <input name="NAMA_TIKET" type="text" class="form-control" id="namatiket" value=" <?php echo $tiket->NAMA_TIKET ?> " readonly>
                            </div>
                          </div>

                          <div class="row mb-3 ml-12">
                            <label for="masalah" class="col-sm-2 col-form-label">Masalah</label>
                            <div class="col-sm-10">
                              <textarea name="MASALAH" rows="5" cols="5" type="text" class="form-control" id="masalah" readonly><?php echo $tiket->MASALAH ?></textarea>
                            </div>
                          </div>
                          <div class="row mb-3 ml-12">
                                <label for="masalah" class="col-sm-2 col-form-label">Teknisi</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="namatiket">
                                </div>
                            </div>
                            <br>
                            <div class="col-8 text-center">
                                <a class="col-3 btn btn-primary" href="#" role="button">Tugaskan</a>
                                <a class="col-3 btn btn-danger" href="#" role="button">Kembali</a>
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