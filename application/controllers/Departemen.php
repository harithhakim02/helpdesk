<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller 
{
    function __construct()
    {
	    parent::__construct();
	        // if($this->session->userdata('logged') !=TRUE)
            //     {
            //             redirect('Auth');
			// 	};

            if ($this->session->userdata('id_level')!='2') {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Id user atau password salah</div>');
                redirect('login','refresh');
            }
                $this->load->model('Muser','mu');
	}
    
    public function index()
    {   $data['title']= 'T';
        $data['row'] = $this->mu->get_tiket();
        $this->template->load('user/template','user/page',$data);
    }


    public function buat_tiket()
    {
        $data['title']= 'Buat Tiket';
        $this->template->load('user/template','user/buat_tiket',$data);
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
		$data = array(
			// 'departemen' => $departemen,
            // 'id_tiket' => $id,
			'nama_tiket' => $nama,
			'masalah' => $masalah,
            'tanggal' => $tanggal
			);
		$this->mu->insert($data,'tiket');
        redirect('user');
    }


    public function profil()
    {
        
        // $id_user=$this->session->userdata('ID_USER');
        // $userdata=$this->Muser->get($id_user);
        // return $userdata;
        
        // $id= $this->session->userdata('id_user');
        // $data['user']=$this->mu->get_profil($id);
        // if ($data['user']) {
           
        // }else {
        //     redirect('user');
        // }
        $data['title']= 'Profil';
        $this->template->load('user/template','user/profil',$data);
        // $data['row']= $this->Muser->get_profil();
        // $data['title']= 'Profil';
        // $this->template->load('user/template','user/profil',$data);
    }

    public function ubah_profil()
    {
        $this->form_validation->set_rules('nama_user', 'Nama Lengkap', 'trim|required|min_length[4]|max_length[15]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[8]|max_length[50]');
        $this->form_validation->set_rules('phone', 'Telp', 'trim|required|min_length[11]|max_length[12]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[8]|max_length[50]');
    
        if ($this->form_validation->run() == false) {
            $data['title']= 'Profil';
            $this->template->load('user/template','user/profil',$data);
            
        } else {
            $data = array(
                'nama_user' => $this->input->post('nama_user',TRUE),
                'email' => $this->input->post('email',TRUE),
                'no_telp' => $this->input->post('no_telp',TRUE),
            );

            $result= $this->mu->update($this->session->userdata('id_user'),$data);
            if ($result>0) {
                $session_data= array(
                    'NAMA_USER' =>$data['nama_user'],
                    'EMAIL' =>$data['email'],
                    'NO_TELP' =>$data['no_telp'],
                );
                $this->session->set_userdata($session_data);
                return redirect('user/profil');
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data tidak bisa diupdate</div>');
                return redirect('user/profil');
            }
        }
    
    }
    public function ubah_password()
    {
        $data['title']= 'Ubah Password';
        $this->template->load('user/template','user/ubah_password',$data);;
    }
}