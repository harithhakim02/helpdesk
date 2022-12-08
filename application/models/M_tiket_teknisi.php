<?php

class M_tiket_teknisi extends CI_Model
{
    
    public function tampil_data()
    {
        $this->load->database();
       return $this->db->get('tiket')->result();
    }
}