<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller 
{

    function __construct()
    {
	    parent::__construct();
            $this->load->model('Mdata');
            $this->load->model('Mpengguna');
            $this->load->model("Minv");
            $this->load->model("Mlaptiket");
            $this->load->helper('url');
	}
	
	public function index()
	{
		$this->template->load('admin/template','admin/dashboard');
	}
    
	function dashboard()
	{
		$this->template->load('admin/template','admin/dashboard');
	}
	function buat_tiket()
	{
		$this->template->load('user/template','user/buat_tiket');
	}

	function departemen()
    {
        $data["user"] = $this->Mdata->getTable();
		$this->template->load('admin/template','admin/departemen',$data);
    }

	function inventory()
    {
        $data["user"] = $this->Minv->getTable();
        $this->template->load('admin/template','admin/inventory',$data);
    }

	function laporan_tiket()
    {
        $data["tiket"] = $this->Mlaptiket->getTable();
        $this->template->load('admin/template','admin/laporan_tiket',$data);
    }

    function edit_pengguna()
    {
        $this->template->load('admin/template','admin/edit_pengguna');
    }

    function tambah_inventory()
    {
        $this->template->load('admin/template','admin/tambah_inventory');
    }
}
