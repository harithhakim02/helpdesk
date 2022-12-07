<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        belum_login();
        // check_user();
        $this->load->model('Mlogin', 'ml');
        $this->load->model('Muser', 'mu');
        $this->load->library('form_validation');
        $this->load->helper('url', 'form');
    }

    public function index()
    {
        $data['title'] = 'Tiket saya';
        $data['row'] = $this->mu->tiket();

        $this->template->load('user/template', 'user/page', $data);
    }


    public function buat_tiket()
    {
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->mu->get_profil($id)->row_array();
        $data['title'] = 'Buat Tiket';
        $this->template->load('user/template', 'user/buat_tiket', $data);
    }
    public function autonumber()
    {
        $this->mu->generate();
    }
    public function buat_tiket_action()
    {
        // $departemen= $this->input->post('departemen');
        // $id=$this->autonumber();
        $nama = $this->input->post('nama_tiket');
        $masalah = $this->input->post('masalah');
        $tanggal = $this->input->post('tanggal');
        $id_user = $this->input->post('id_user');
        $data = array(
            // 'departemen' => $departemen,
            // 'no_tiket' => $id,
            'nama_tiket' => $nama,
            'masalah' => $masalah,
            'id_user' => $id_user,
            'tanggal' => $tanggal
        );
        $this->mu->insert($data, 'tiket');
        redirect('user');
    }


    public function profil()
    {
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->mu->get_profil($id)->row_array();
        $data['title'] = 'Profil';
        $this->template->load('user/template', 'user/profil', $data);
    }

    public function form_ubah_profil()
    {
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->mu->get_profil($id)->row_array();
        $data['title'] = 'Ubah Profil';
        $this->template->load('user/template', 'user/form_edit_profil', $data);
    }

    public function ubah_profil()
    {
        $this->form_validation->set_rules('nama_user', 'Nama Lengkap', 'trim|required|min_length[4]|max_length[30]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[8]|max_length[50]');
        $this->form_validation->set_rules('no_telp', 'Telp', 'trim|required|min_length[11]|max_length[12]');
        // $this->form_validation->set_rules('departemen', 'Departemen', 'trim|required|min_length[8]|max_length[50]');

        if ($this->form_validation->run() == TRUE) {  
            $id_user = $this->input->post('id_user');
            $id_level = $this->input->post('id_level');
            $id_departemen = $this->input->post('id_departemen');
            $nama_user = $this->input->post('nama_user');
            $password_user = $this->input->post('password_user');
            $email = $this->input->post('email');
            $no_telp = $this->input->post('no_telp');
            $user_status = $this->input->post('user_status');
    
            $data = array(
                'id_level' => $id_level,
                'id_departemen' => $id_departemen,
                'nama_user' => $nama_user,
                'password_user' => $password_user,
                'email' => $email,
                'no_telp' => $no_telp,
                'user_status' => $user_status
            );
    
            $where = array(
                'id_user' => $id_user
            );
    
            $this->mu->update_profil($where, $data, 'user');
            redirect('user/profil');
        } else {
           $this->profil();
        }
        
    }
    public function ubah_password()
    {
        $data['title'] = 'Ubah Password';
        $this->template->load('user/template', 'user/ubah_password', $data);
    }
    public function ubah_password_action()
    {
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->mu->get_profil($id)->row_array();
        $this->form_validation->set_rules('password', 'Password Lama', 'trim|required', ['required' => 'Password Lama Wajib Diisi !!!']);
        $this->form_validation->set_rules('password1', 'Password Baru', 'trim|required|min_length[5]', ['required' => 'Password Baru Wajib Diisi !!!']);
        $this->form_validation->set_rules('password2', 'Konfirmasi Password Baru', 'trim|required|min_length[5]|matches[password1]', ['required' => 'Konfirmasi Password Wajib Diisi !!!']);
        if ($this->form_validation->run() == TRUE) {
            $password_lama = $this->input->post('password');
            $password_baru = $this->input->post('password1');
            if (!password_verify($password_lama, $data['user']['password_user'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Password Tidak Sama Dengan Password Sebelumnya</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                redirect('user/ubah_password');
            } else {
            if ($password_lama == $password_baru) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Password Baru Tidak Boleh Sama Dengan Password Lama</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                redirect('user/ubah_password');
            } else {
                // $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);

                $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);
                $this->db->set('password_user', $password_hash);
                $this->db->where('id_user', $this->session->userdata('id_user'));
                $this->db->update('user');
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>password Telah Diubah</strong> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>');
                redirect('user/ubah_password');
            }
            }
        } else {
            $this->ubah_password();
        }
    }

    public function track()
    {
        $data['title'] = 'Data Tracking';
        $this->template->load('user/template', 'user/track', $data);
    }
}
