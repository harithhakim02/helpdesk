<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller 
{

    Public function __construct()
    {
	    parent::__construct();
				$this->load->model("Mpengguna");
				$this->load->model("Mdep");
	}
	
	public function index()
	{
		$data["user"] = $this->Mpengguna->getTable();
		$this->template->load('admin/template','admin/pengguna',$data);
	}

	public function tambahData()
		{
			$this->load->model('Mpengguna');
			$this->load->model('Mdep');
			$data['user'] = $this->Mpengguna->getTable();
			$data['departemen'] = $this->Mdep->getAll();
			$data['level'] = $this->Mdep->getAll1();
			$this->template->load('admin/template','admin/tambah_pengguna', $data);
		}

		public function simpanData()
		{
			$this->load->model('Mpengguna');
			$this->load->model('Mdep');
			$id_level = $this->input->post('id_level');
			$id_departemen = $this->input->post('id_departemen');
			$nama_user = $this->input->post('nama_user');
			$password_hash = $this->input->post('password_user');
			$password_user = password_hash($password_hash, PASSWORD_DEFAULT);
			$email = $this->input->post('email');
			$no_telp = $this->input->post('no_telp');
			$user_status = $this->input->post('user_status');

			$data = [
				'id_level' => $id_level,	
				'id_departemen' => $id_departemen,	
				'nama_user' => $nama_user,	
				'password_user' => $password_user,	
				'email' => $email,	
				'no_telp' => $no_telp,	
				'user_status' => $user_status
			];

			$simpan = $this->Mpengguna->insert($data);

			redirect('User');
		}
		
		public function edit($id_user)
		{
			$this->load->model('Mpengguna');
			$this->load->model('Mdep');
			$data['departemen'] = $this->Mdep->getAll();
			$data['level'] = $this->Mdep->getAll1();
			$data['user'] = $this->Mpengguna->get($id_user);
			$this->template->load('admin/template','admin/edit_pengguna', $data);
		}

		public function update(){
				$this->load->model('Mpengguna');
				$this->load->model('Mdep');
				
				$id_user = $this->input->post('id_user');
				$id_level = $this->input->post('id_level');
				$id_departemen = $this->input->post('id_departemen');
				$nama_user = $this->input->post('nama_user');
				$email = $this->input->post('email');
				
				$data = [

					'id_user' => $id_user,
					'id_level' => $id_level,		
					'id_departemen' => $id_departemen,		
					'nama_user' => $nama_user,
					'email' => $email	
				];

			$save = $this->Mpengguna->update($data, $id_user);
			
			if($save) {
				$this->session->set_flashdata('msg_success', 'Data telah diubah!');
			} else {
				$this->session->set_flashdata('msg_error', 'Data gagal disimpan, silakan isi ulang!');
			}
			
			redirect('User');
		}

		public function delete($id_user){
			$this->load->model('Mpengguna');

			$delete = $this->Mpengguna->delete($id_user);

			if ($delete) {
				$this->session->set_flashdata('msg_success', 'Data yang anda pilih telah terhapus');
			} else {
				$this->session->set_flashdata('msg_error', 'Tidak bisa hapus pesan');
			}
			redirect('User');
			}
}
