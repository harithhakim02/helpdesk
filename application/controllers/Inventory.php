<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller {
	function __construct()
    {
	    parent::__construct();
			$this->load->model("Minv");
	}

	public function index()
		{
			$data["user"] = $this->Minv->getTable();
			$this->template->load('admin/template','admin/inventory',$data);
		}
		public function tambahData()
		{
			$this->load->model('Mdep');

			$data['departemen'] = $this->Mdep->getAll();
			$this->template->load('admin/template','admin/tambah_inventory',$data);
		}
		public function simpanData()
		{
			$this->load->model('Minv');
			$NAMA_INVENTORY = $this->input->post('NAMA_INVENTORY');
			$ID_DEPARTEMEN = $this->input->post('ID_DEPARTEMEN');
			$STATUS = $this->input->post('STATUS');

			$data = [
				'NAMA_INVENTORY' => $NAMA_INVENTORY,
				'ID_DEPARTEMEN' => $ID_DEPARTEMEN,
				'STATUS' => $STATUS			
			];

			$simpan = $this->Minv->insert($data);

			redirect('Inventory');
		}
		public function edit($ID_INVENTORY)
		{
			$this->load->model('Mdep');
			$this->load->model('Minv');
			$data['departemen'] = $this->Mdep->getAll();
			$data['inventory'] = $this->Minv->get($ID_INVENTORY);
			$this->template->load('admin/template','admin/edit_inventory',$data);
		}

		public function update(){
	        $this->load->model('Minv');
			$ID_INVENTORY = $this->input->post('ID_INVENTORY');
			$NAMA_INVENTORY = $this->input->post('NAMA_INVENTORY');
			$ID_DEPARTEMEN = $this->input->post('ID_DEPARTEMEN');
			$STATUS = $this->input->post('STATUS');
			
			$data = [

				'NAMA_INVENTORY' => $NAMA_INVENTORY,
				'ID_DEPARTEMEN' => $ID_DEPARTEMEN,
				'STATUS' => $STATUS			
			];

        $save = $this->Minv->update($data, $ID_INVENTORY);
		
		if($save) {
            $this->session->set_flashdata('msg_success', 'Data telah diubah!');
        } else {
            $this->session->set_flashdata('msg_error', 'Data gagal disimpan, silakan isi ulang!');
        }
		
        redirect('Inventory');
    }

	public function delete($ID_INVENTORY){
        $this->load->model('Minv');

        $delete = $this->Minv->delete($ID_INVENTORY);

        if ($delete) {
            $this->session->set_flashdata('msg_success', 'Data yang anda pilih telah terhapus');
        } else {
            $this->session->set_flashdata('msg_error', 'Tidak bisa hapus pesan');
        }
        redirect('Inventory');
		}
	}
?>