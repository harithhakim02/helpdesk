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
                                <div class="small text-gray-500">Emily Fowler · 58m</div>
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
                                <div class="small text-gray-500">Jae Chun · 1d</div>
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
                                <div class="small text-gray-500">Morgan Alvarez · 2d</div>
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
                                <div class="small text-gray-500">Chicken the Dog · 2w</div>
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

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800"><b>Laporan Tiket</b></h1>

        <!-- Button Cetak -->
        <a class="btn btn-danger" href=" <?php echo base_url('riwayattiket/print') ?>"> <i class="fa fa-print"></i>Cetak Laporan</a>
        

        

<!--MENAMPILKAN DATA DAN FITUR SEARCH & FILTER DATA-->
                        
<div class="container">
	<div class="row" style="margin-top: 50px;">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-2">
					<div class="form-group">
						<label>Pilih Filter Bulan</label>
						<select class="form-control bulan" name="">
							<option>-- Pilih --</option>
							<option value="Januari">Januari</option>
							<option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
							<option value="April">April</option>
                            <option value="Mei">Mei</option>
							<option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
							<option value="Agustus">Agustus</option>
                            <option value="September">September</option>
							<option value="Oktober">Oktober</option>
                            <option value="November">November</option>
							<option value="Desember">Desember</option>
						</select>
					</div>
				</div>
			</div>
		</div>

					<div class="form-group">
						<label>Pilih Filter Tahun</label>
						<select class="form-control TANGGAL" name="">
							<option>-- Pilih --</option>
							<option value="2021">2021</option>
							<option value="2022">2022</option>
                            <option value="2023">2023</option>
						</select>
					</div>

		<div class="col-md-12">
            <div class="table-responsive">
            <table id="tabelData" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Tiket</th>
                            <th>ID User</th>
                            <th>Nama Tiket</th>
                            <th>Masalah</th>
                            <th>Solusi</th>
                            <th>Tanggal Ajuan</th>
                            <th>Bulan</th>
                            <th>Status</th>
                            <th>Nama Teknisi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $no = 1;  
                        foreach ($tiket as $row) { ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?= $row->ID_TIKET ?></td>
                            <td><?= $row->ID_USER ?></td>
                            <td><?= $row->NAMA_TIKET ?></td>
                            <td><?= $row->MASALAH ?></td>
                            <td><?= $row->SOLUSI ?></td>
                            <td><?= $row->TANGGAL ?></td>
                            <td><?= $row->bulan ?></td>
                            <td><?= $row->STATUS ?></td>
                            <td><?= $row->NAMA_TEKNISI ?></td>

                        </tr>
                        <?php } ?>
                    </tbody>
                    
                </table>
            </div>
		</div>
		
	</div>
</div>

<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

       

                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">
                                    Showing 1 to 10 of 57 entries
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                                            <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                        </li>
                                        <li class="paginate_button page-item active">
                                            <a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">
                                                1
                                            </a>
                                        </li>
                                        <li class="paginate_button page-item ">
                                            <a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">
                                                2
                                            </a>
                                        </li>
                                        <li class="paginate_button page-item next" id="dataTable_next">
                                            <a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">
                                            Next
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

        <script type="text/javascript">
            $(document).ready(function() {
                $('#tabelData').DataTable();
                function filterData () {
                    $('#tabelData').DataTable().search(
                        $('.bulan').val()
                        ).draw();
                }
                $('.bulan').on('change', function () {
                    filterData();
                });
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#tabelData').DataTable();
                function filterData () {
                    $('#tabelData').DataTable().search(
                        $('.TANGGAL').val()
                        ).draw();
                }
                $('.TANGGAL').on('change', function () {
                    filterData();
                });
            });
        </script>

        

        
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
        <!-- End of Main Content -->


        
</div>
<!-- End of Content Wrapper -->
