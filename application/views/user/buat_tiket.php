        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
 <!-- Topbar -->
 <?php $this->load->view('user/template/navbar'); ?>

<!-- End of Topbar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <h3 class="container-fluid"><?=$title?></h3>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="bg-white py-lg-5">
                            <form method="POST" action="<?=site_url('user/buat_tiket_action');?>">
                            <!-- <div class="form-group row ml-5 mr-5">
                              <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
                              <div class="col-sm-10 search_select_box">
                                <select name="depertemen" id="" data-live-search="true" class="form-control">
                                  <?php foreach ($variable as $key => $value) {?>
                                    <option value=""></option>
                                 <?php }?>
                                </select>
                              </div>
                            </div> -->
                            <div class="form-group row ml-5 mr-5" hidden>
                              <label for="id" class="col-sm-2 col-form-label">ID Tiket</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_tiket" name="no_tiket" >
                              </div>
                            </div>
                            <div class="form-group row ml-5 mr-5">
                              <label for="tiket" class="col-sm-2 col-form-label">Nama Tiket</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="tiket" name="nama_tiket" >
                              </div>
                            </div>
                            <div class="form-group row ml-5 mr-5">
                              <label for="masalah" class="col-sm-2 col-form-label">Masalah</label>
                              <div class="col-sm-10">
                              <textarea class="form-control" id="masalah" name="masalah"></textarea>
                              </div>
                            </div>
                            <div class="form-group row ml-5 mr-5">
                              <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Ajuan</label>
                              <div class="col-sm-10">
                                <input type="date" class="form-control" id="tanggal" name="tanggal" >
                              </div>
                            </div>

                            <input hidden type="text" name="id_user" id="id_user" value="<?=$user['id_user']?>"></input>
                            
                            
                            <div class="form-group row justify-content-end ml-5">
                              <div class="col-sm-10">
                              <button type="submit" class="btn btn-primary">Ajukan</button>
                              <button type="reset" class="btn btn-danger">Batal</button>
                              </div>
                            </div>
                          </form>
                        
                        </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>