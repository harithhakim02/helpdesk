<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiket extends CI_Controller {
		public function __construct(){
			parent:: __construct();
			$this->load->model("Mlaptiket");
		}
		public function index()
		{
			$data["tiket"] = $this->Mlaptiket->getTable();
            $this->template->load('admin/template','admin/laporan_tiket',$data);
		}
		public function edit($ID_TIKET)
		{
			$this->load->model('Mlaptiket');
			$this->load->model('Mtiket');
			$data['departemen'] = $this->Mtiket->getAll();
			$data['inventory'] = $this->Mtiket->getAll1();
			$data['tiket'] = $this->Mlaptiket->get($ID_TIKET);
			$this->template->load('admin/template','admin/data_tiket',$data);
		}

		public function update(){
			$this->load->model('Mtiket');
	        $this->load->model('Mlaptiket');
			$ID_TIKET = $this->input->post('ID_TIKET');
			$ID_USER = $this->input->post('ID_USER');
			$ID_INVENTORY = $this->input->post('ID_INVENTORY');
			$NAMA_TIKET = $this->input->post('NAMA_TIKET');
			$MASALAH = $this->input->post('MASALAH');
			$TANGGAL = $this->input->post('TANGGAL');
			$STATUS_TIKET = $this->input->post('STATUS_TIKET');
			$nama_user = $this->input->post('nama_user');
			$TEKNISI = $this->input->post('TEKNISI');
			$ID_DEPARTEMEN = $this->input->post('ID_DEPARTEMEN');
			
			$data = [

				'ID_TIKET' => $ID_TIKET,
				'ID_USER' => $ID_USER,
				'ID_INVENTORY' => $ID_INVENTORY,
				'NAMA_TIKET' => $NAMA_TIKET,
				'MASALAH' => $MASALAH,
				'TANGGAL' => $TANGGAL,
				'STATUS_TIKET' => $STATUS_TIKET,						
				'nama_user' => $nama_user,			
				'TEKNISI' => $TEKNISI,			
				'ID_DEPARTEMEN' => $ID_DEPARTEMEN			
			];

        $save = $this->Mlaptiket->update($data, $ID_TIKET);
		
		if($save) {
            $this->session->set_flashdata('msg_success', 'Data telah diubah!');
        } else {
            $this->session->set_flashdata('msg_error', 'Data gagal disimpan, silakan isi ulang!');
        }
		
        redirect('Tiket');
    }

	public function print(){
		$data["tiket"] = $this->Mlaptiket->getTable();
		$this->load->view('admin/print_tiket',$data);
	}

	}
?>