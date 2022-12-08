<?php 
	class Status extends CI_Controller{
		public function index(){
			$data['history_status'] = $this->M_Status->get_status();
			$this->load->view('status',$data);
		}
	}