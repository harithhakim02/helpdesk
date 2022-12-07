


<br><br><br>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><?=$title?></h1>
                                    </div>
                                    <?= $this->session->flashdata('message')?>
                                    <form class="user" method="POST" action="<?=base_url('login/validation');?>">
                                        <div class="form-group">
                                            <input type="text" name="id_user" class="form-control form-control-user" value="<?=set_value('id_user')?>" placeholder="No. Pegawai" > 
                                                <?=form_error('id_user','<small class="text-danger pl-3">','</small>')?>
                                        <div class="form-group mt-lg-3">
                                            <input type="password" name="password_user" class="form-control form-control-user" value="<?=set_value('password_user')?>"  placeholder="Password">
                                            <?= form_error('password_user','<small class="text-danger pl-3">','</small>')?>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block" name="login">
                                            Login
                                        </button>
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    