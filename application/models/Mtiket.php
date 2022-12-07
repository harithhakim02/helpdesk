<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Mtiket extends CI_Model {
		public function getAll() 
		{
			return $this->db->get('departemen')->result();
		}
		public function getAll1() 
		{
			return $this->db->get('inventory')->result();
		}
		
	
	}
	
	/* End of file ModJur.php */
	/* Location: ./application/models/ModJur.php */

 ?>