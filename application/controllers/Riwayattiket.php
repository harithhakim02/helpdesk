<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayattiket extends CI_Controller {

	public function index()
    {
        $tiket['tiket'] = $this->M_riwayattiket->tampil_data();
        $this->template->load('admin/template', 'admin/riwayat_tiket',$tiket);
    }
    public function print() {
        $tiket['tiket'] = $this->M_riwayattiket->tampil_data("tiket");
        $tiket['contents'] = 'jjj';
        $this->template->load('teknisi/template', 'teknisi/print_tiket', $tiket);
    }

}