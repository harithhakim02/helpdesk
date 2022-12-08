<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tiket_teknisi extends CI_Controller 
{
    function __construct()
    {
	    parent::__construct();
	        if($this->session->userdata('logged') !=TRUE)
                {
                        $url=base_url('login');
                        redirect($url);
				};
	}
    
    public function index()
    {
        $tiket['tiket'] = $this->M_riwayattiket->tampil_data();
        $this->template->load('teknisi/template', 'teknisi/tiket_teknisi',$tiket);
    }
    public function print() {
        $tiket['tiket'] = $this->M_riwayattiket->tampil_data("tiket");
        $tiket['contents'] = 'jjj';
        $this->template->load('teknisi/template', 'teknisi/print_tiket', $tiket);
    }
}