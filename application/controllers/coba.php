public function proses(){
        $this->form_validation->set_rules('id_user,id_user, trim|required');
        $this->form_validation->set_rules('password_user,password, trim|required');
       
        if ($this->form_validation->run()==TRUE) {
            $user=$this->Mlogin->get_id($this->input->post('id_user'));
            if (!$user) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Id User tidak ditemukan</div>');
            redirect('auth/login','refresh');
            }elseif ($user->user_status == 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Id User tidak aktif</div>');
            redirect('auth/login','refresh');
            }elseif (!password_verify($this->input->post('password_user'),$user->password_user)) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">password anda salah</div>');
                redirect('auth/login','refresh');
            }else {
                $data=array(
                    'id_user'=> $user->id_user,
                    'nama_user'=> $user->nama_user,
                    'email'=> $user->email,
                    'id_level'=> $user->id_level,
                );
                $this->session->set_userdata($data);
                redirect('user');
            }
        }
    }

    private function autentikasi(){
        $id = $this->input->post('id_user');
        $password = $this->input->post('password_user');

        $user=$this->db->get_where('user', ['id_user'=>$id])->row_array();

        if ($user) {
            if ($user['user_status']== 1) {
                if (password_verify($password, $user['password_user'])) {
                    $data =[
                            'id_user'=>$user['id_user'],
                            'id_level'=>$user['id_level'],
                    ];
                    $this->session->set_userdata($data);
                    redirect('user');
                }else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah</div>');
            redirect('login');
                }
               
            }else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Id tidak aktif</div>');
            redirect('login');
            }
            
        }else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Id tidak terdaftar</div>');
            redirect('login');
        }

        $this->form_validation->set_rules('id_user,id_user, trim|required');
        $this->form_validation->set_rules('password_user,password, trim|required');

        public function Proses()
    {
        $post=$this->input->post(null,TRUE);
        if (isset($post['login'])) {
            $this->load->model('Mlogin');
            $query= $this->Mlogin->login($post);
            if ($query->num_rows()>0) {
                $row=$query->row();
                $data= array(
                    'id_user'=> $row->id_user,
                    'nama_user'=> $row->nama_user,
                    'email'=> $row->email,
                    'id_level'=> $row->id_level,
                );
                $this->session->set_userdata($data);
                redirect('user');
            }else {
                redirect('login/login');
            }
        }
    }

    // function autentikasi(){
    //     $id = $this->input->post('ID_USER');
    //     $password = $this->input->post('pass');
                
    //     $validasi_email = $this->Mlogin->query_validasi_email($id);
    //     if($validasi_email->num_rows() > 0){
    //         $validate_ps=$this->Mlogin->query_validasi_password($id,$password);
    //         if($validate_ps->num_rows() > 0){
    //             $x = $validate_ps->row_array();
    //             if($x['user_status']=='1'){
    //                 $this->session->set_userdata('logged',TRUE);
    //                 $this->session->set_userdata('user',$id);
    //                 $id=$x['id_user'];
    //                 if($x['id_level']=='1'){ //Administrator
    //                     $name = $x['nama_user'];
    //                     $this->session->set_userdata('access','Administrator');
    //                     $this->session->set_userdata('id',$id);
    //                     $this->session->set_userdata('name',$name);
    //                     redirect('dashboard');

    //                 }else if($x['id_level']=='2'){ //Pengguna
    //                     $name = $x['nama_user'];
    //                     $email = $x['email'];
    //                     $no = $x['no_telp'];
    //                     $this->session->set_userdata('access','Pengguna');
    //                     $this->session->set_userdata('id',$id);
    //                     $this->session->set_userdata('email',$email);
    //                     $this->session->set_userdata('no.telp',$no);
    //                     redirect('user');

    //                 }else if($x['id_level']=='3'){ //IT Support
    //                     $name = $x['nama_user'];
    //                     $this->session->set_userdata('access','IT Support');
    //                     $this->session->set_userdata('id',$id);
    //                     $this->session->set_userdata('name',$name);
    //                     redirect('dashboard');
    //                 }
    //             }else{
    //                 $url=base_url('login');
    //                 echo $this->session->set_flashdata('msg','<span onclick="this.parentElement.style.display=`none`" class="w3-button w3-large w3-display-topright">&times;</span>
    //                 <h3>Uupps!</h3>
    //                 <p>Akun Kamu Salah, Silahkan Masukkan Lagi</p>');
    //                 redirect($url);
    //             }
    //         }else{
    //             $url=base_url('login');
    //             echo $this->session->set_flashdata('msg','<span onclick="this.parentElement.style.display=`none`" class="w3-button w3-large w3-display-topright">&times;</span>
    //                 <h3>Uupps!</h3>
    //                 <p>Password yang kamu masukan salah.</p>');
    //             redirect($url);
    //         }

    //     }else{
    //         $url=base_url('login');
    //         echo $this->session->set_flashdata('msg','<span onclick="this.parentElement.style.display=`none`" class="w3-button w3-large w3-display-topright">&times;</span>
    //         <p>Email yang kamu masukan salah.</p>');
    //         redirect($url);
    //     }

    // }
    style="z-index: 999; max-height: 100vh; position: fixed;"
    style="position: -webkit-sticky; z-index: 99; top:0; right: 0; left: 0"
    style="margin-top: 80px; margin-left: 200px; position: absolute; left: 100px !important; width: 1000px "
    $id=$this->input->post('id_user');
                    $pass=$this->input->post('password_user');
                    $cek=$this->ml->cek_login($id,$pass);
                    var_dump($cek);
                    die();
                    if ($cek->num_rows()==1) {
                        foreach ($cek->result() as $row) {
                        
                        $session_data=array(
                            'id_user'=>$row->id_user,
                            'id_level'=>$row->id_level,
                            'email'=>$row->email,
                            'no_telp'=>$row->no_telp
                        );
                        $this->session->set_userdata($session_data);
                        if ($row->id_level==1) {
                            redirect('admin');
                        }elseif ($row->id_level==2) {
                            redirect('user');
                        }elseif ($row->id_level==3) {
                            redirect('teknisi');
                        }else {
                            redirect('login');
                        }
                    }
                    }

                    <div class="col-md-6">
                                <label for="nama" class="form-label">No.Pegawai<sup style="color: red;">*</sup></label>
                                <input type="text" class="form-control" id="nama" value="<?=$user['id_user']?>"disabled>
                              </div>
                              <div class="col-md-6">
                                <label for="nama" class="form-label">Nama Lengkap<sup style="color: red;">*</sup></label>
                                <input type="text" class="form-control" id="nama" value="<?=$user['nama_user']?>">
                              </div>
                              <div class="col-md-6">
                                <label for="masalah" class="form-label">Email<sup style="color: red;">*</sup></label>
                                <input type="email" class="form-control" id="masalah" value="<?=$user['email']?>">
                              </div>
                              <div class="col-md-6">
                                <label for="tgl" class="form-label">Departemen<sup style="color: red;">*</sup></label>
                                <input type="text" class="form-control" id="tgl"value="<?=$user['departemen']?>">
                              </div>
                              <div class="col-md-6">
                               <label for="tgl" class="form-label">Nomor Telepon<sup style="color: red;">*</sup></label>
                                <input type="text" class="form-control" id="tgl" value="<?=$user['no_telp']?>">
                             </div>

            <!-- modals -->
            <div class="modal fade" id="edituser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form action="<?=base_url('user/ubah_profil')?>" method="POST">
                                <div class="modal-body row g-2">
                                  <div class="col-md-6">
                                    <label for="nama" class="form-label">No.Pegawai<sup style="color: red;">*</sup></label>
                                    <input type="text" class="form-control" id="nama" value="<?=$user['id_user']?>"disabled>
                                  </div>
                                <div class="col-md-6">
                                    <label for="nama" class="form-label">Nama Lengkap<sup style="color: red;">*</sup></label>
                                    <input type="text" class="form-control" id="nama" value="<?=$user['nama_user']?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="masalah" class="form-label">Email<sup style="color: red;">*</sup></label>
                                    <input type="email" class="form-control" id="masalah" value="<?=$user['email']?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="tgl" class="form-label">Departemen<sup style="color: red;">*</sup></label>
                                    <input type="text" class="form-control" id="tgl"value="<?=$user['departemen']?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="tgl" class="form-label">Nomor Telepon<sup style="color: red;">*</sup></label>
                                    <input type="text" class="form-control" id="tgl" value="<?=$user['no_telp']?>">
                                </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="submit" class="btn btn-primary" >Ubah</button>
                                  <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        <!-- modals end -->