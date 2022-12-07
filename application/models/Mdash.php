<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdash extends CI_Model{
    public function get_count(){
        $sql = "SELECT count(ID_TIKET) as id_tiket FROM tiket";
        $result = $this->db->query($sql);
        return $result->row()->id_tiket;
    }

} 