<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mlogin', 'ml');
        $this->load->library('form_validation');
        $this->load->helper('url', 'form');
    }
    public function index()
    {
        sudah_login();
        $data['title'] = 'Login';
        $this->template->load('auth/template_auth', 'auth/login', $data);
    }
    public function validation()
    {
        $this->form_validation->set_rules('id_user', 'No. Pegawai', 'required', ['required' => 'No. Pegawai harus diisi!']);
        $this->form_validation->set_rules('password_user', 'Password', 'required|trim|min_length[5]', ['required' => 'Password harus diisi!']);
        // $password_user = $this->input->post('password_user');
        // password_verify($password_user);


        if ($this->form_validation->run() == TRUE) {
            $post = $this->input->post(null, TRUE);
            if (isset($post['login'])) {
                $this->load->model('Mlogin');
                $query = $this->Mlogin->cek_login($post);
                if ($query->num_rows() > 0) {
                    $row = $query->row_array();
                    $data = [
                        'id_user' => $row['id_user'],
                        'nama_user' => $row['nama_user'],
                        'email' => $row['email'],
                        'no_telp' => $row['no_telp'],
                        'id_level' => $row['id_level'],
                        'departemen' => $row['departemen']
                    ];
                    $this->session->set_userdata($data);
                    if ($row['id_level'] == 1) {
                        redirect('Departemen');
                    } elseif ($row['id_level'] == 2) {
                        redirect('user');
                    } else {
                        redirect('teknisi');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Username atau Password Anda Salah!!!</strong> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>');
                    redirect('login');
                }
            }
        } else {

            $this->index();
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect() . base_url('Login');
    }
}
