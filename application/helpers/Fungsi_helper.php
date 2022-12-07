<?php
function sudah_login()
{
    $ci =& get_instance();
    if ($ci->session->userdata('id_user')) {
        if ($ci->session->userdata('id_level')==1) {
            redirect('admin','refresh');
        }elseif ($ci->session->userdata('id_level')==2) {
            redirect('user','refresh');
        }else {
            redirect('teknisi','refresh');
        }
        
    }
}
function belum_login()
{
    $ci =& get_instance();
    if (!$ci->session->userdata('id_user')) {
        $ci->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Anda Belum Login!!!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('login','refresh');
    }
}
function check_user()
{
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->id_level !=1) {
        redirect('Admin','refresh');
    }elseif ($ci->fungsi->user_login()->id_level !=2) {
        redirect('User','refresh');
    }elseif ($ci->fungsi->user_login()->id_level !=3) {
        redirect('teknisi','refresh');
    }
}
