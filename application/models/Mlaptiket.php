<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlaptiket extends CI_Model {
	public function getTable() 
	{
		$this->db->select('tiket.*,user.*,inventory.*,departemen.*');
		$this->db->from('tiket,user,inventory,departemen');
		/* $this->db->join('user', 'user.id_user = tiket.ID_USER');
		$this->db->join('inventory', 'inventory.ID_INVENTORY = tiket.ID_INVENTORY'); */
		$this->db->where('inventory.ID_INVENTORY = tiket.ID_INVENTORY');
		$this->db->where('user.id_user = tiket.id_user');
		$this->db->where('user.id_departemen = departemen.ID_DEPARTEMEN');
		$query = $this->db->get();
		return $query->result();
	}
	public function insert($data) 
	{
		return $this->db->insert('tiket', $data);
	}

	public function get($id) {
		return $this->db->where('ID_TIKET', $id)->get('tiket')->row();
	}

	public function Update($data, $id)
	{
		return $this->db->update('tiket', $data, ['ID_TIKET'=>$id]);
	}
}