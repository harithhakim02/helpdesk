<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departemen extends CI_Controller {
		public function __construct(){
			parent:: __construct();
			$this->load->model("Mdata");
		}

        public function index()
		{
			$data["user"] = $this->Mdata->getTable();
			$this->template->load('admin/template','admin/departemen',$data);
		}

        public function tambahData()
        {
            $this->load->model('Mdata');
    
            $data['departemen'] = $this->Mdata->getTable();
            $this->template->load('admin/template','admin/departemen', $data);
        }
        public function simpanData()
        {
            $this->load->model('Mdata');
            $NAMA_DEPARTEMEN = $this->input->post('NAMA_DEPARTEMEN');
    
            $data = [
                'NAMA_DEPARTEMEN' => $NAMA_DEPARTEMEN		
            ];
    
            $simpan = $this->Mdata->insert($data);
            redirect('Departemen');
        }
        public function edit($ID_DEPARTEMEN)
		{
			$this->load->model('Mdata');

			$data['departemen'] = $this->Mdata->get($ID_DEPARTEMEN);
            $this->template->load('admin/template','admin/edit_departemen', $data);
		}

		public function update(){
	        $this->load->model('Mdata');
			$ID_DEPARTEMEN = $this->input->post('ID_DEPARTEMEN');
			$NAMA_DEPARTEMEN = $this->input->post('NAMA_DEPARTEMEN');
			
			$data = [

				'ID_DEPARTEMEN' => $ID_DEPARTEMEN,
				'NAMA_DEPARTEMEN' => $NAMA_DEPARTEMEN		
			];

        $save = $this->Mdata->update($data, $ID_DEPARTEMEN);
		
		if($save) {
            $this->session->set_flashdata('msg_success', 'Data telah diubah!');
        } else {
            $this->session->set_flashdata('msg_error', 'Data gagal disimpan, silakan isi ulang!');
        }
		
        redirect('Departemen');
    }

	public function delete($ID_DEPARTEMEN){
        $this->load->model('Mdata');

        $delete = $this->Mdata->delete($ID_DEPARTEMEN);

        if ($delete) {
            $this->session->set_flashdata('msg_success', 'Data yang anda pilih telah terhapus');
        } else {
            $this->session->set_flashdata('msg_error', 'Tidak bisa hapus pesan');
        }
        redirect('Departemen');
		}
	}
?>