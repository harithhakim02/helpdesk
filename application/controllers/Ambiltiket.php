<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ambiltiket extends CI_Controller 
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
        $this->template->load('teknisi/template','teknisi/ambil_tiket');
    }
}