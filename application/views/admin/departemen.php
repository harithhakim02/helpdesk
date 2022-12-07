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
                                    Keluar
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Data Departemen</h1>

                <!-- Begin ADD Data Example -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3 ">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Tambah Data
                            </button>
                        </div>
                       
                        <form action="<?php echo site_url('Departemen/simpanData') ?>" method="post">
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Departemen</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-sm-12 col-xl-1 m-b-30">
                                                
                                        </div>
                                        <div class="col-sm-12 col-xl-12 m-b-30">
                                            <p>Nama Departemen</p>
                                            <div class="form-group">
                                                <div class="input-group date">
                                                    <input type="text" class="form-control" name="NAMA_DEPARTEMEN">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-primary" value="Tambah">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
            <!-- End Of ADD Data Example -->

                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <!-- Begin Table data -->     
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 57px;">No</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 61px;">ID Departemen</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 49px;">Departemen</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 69px;">Aksi</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
		                                        $no = 1;
		                                        foreach($user as $u){
                                                ?>
                                                    <tr class="odd">
                                                        <td class="sorting_1"><?php echo $no++ ?></td>
                                                        <td><?php echo $u->ID_DEPARTEMEN ?></td>
                                                        <td><?php echo $u->NAMA_DEPARTEMEN ?></td>
                                                        <td>       
                                                        <a href="<?php echo site_url('Departemen/edit/'.$u->ID_DEPARTEMEN)?>" class="btn btn-primary">Edit</a>                                                      
                                                        <a href="<?php echo site_url('Departemen/delete/'.$u->ID_DEPARTEMEN)?>" class="btn btn-danger" onclick="return confirm('Apakah kamu yakin?')">Hapus</a>                                                      
                                                        </td>
                                                    </tr>
                                                <?php } ?>

                                            <!-- Begin of Form Edit data -->
                                             
                                            <!-- End of form edit data -->        
                                            </tbody>
                                        </table>
                                    </div>
                                </div> 
                            <!-- End of Table data -->
                            
                            </div>
                        </div>
                    </div>
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
        <!-- End of Content Wrapper -->
        