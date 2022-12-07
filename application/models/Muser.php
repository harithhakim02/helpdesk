<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Muser extends CI_Model
{


    public function tiket()
    {
        $this->db->select('t.*, d.nama_departemen AS DEPARTEMEN');
        $this->db->from('tiket t');
        $this->db->join('inventory i', 'i.id_inventory=i.id_inventory');
        $this->db->join('departemen d', 'd.id_departemen=i.id_departemen');
        $this->db->where('t.id_user', $this->session->userdata('id_user'));
        return $this->db->get()->result();
    }
    public function get_profil($id = null)
    {
        $this->db->select('u.*, d.NAMA_DEPARTEMEN AS departemen');
        $this->db->from('user u');
        $this->db->join('departemen d', 'd.ID_DEPARTEMEN=u.id_departemen');
        $this->db->where('id_user', $id);
        return $this->db->get();
    }
    public function generate()
    {
        $no_tiket="T-" . time() . rand(999, 111);
        return $no_tiket;
        // $thn=date("Ym");
        // $this->db->select('RIGHT(tiket.id_tiket,4) as id',FALSE);
        // $this->db->order_by('id','DESC');
        // $this->db->limit(1);
        // $query=$this->db->get('tiket');

        // if ($query->num_rows()<>0) {
        //     $data=$query->row();
        //     $autonumber=intval($data->id)+1;
        // }else { 
        //     $autonumber=1;
        // }
        // $limit=str_pad($autonumber,4,"0",STR_PAD_LEFT);
        // $id= $thn.$limit;
        // return $id;
    }
    public function insert($data, $table)
    {
        return $this->db->insert($table, $data);
    }
    // public function update_profil($data,$id)
    // {
    //     $id = $this->input->post('id_user', true);
    //     $nama = $this->input->post('nama_user', true);
    //     $email = $this->input->post('email', true);
    //     $no_telp = $this->input->post('email', true);
    //     $departemen = $this->input->post('departemen', true);


    //     $this->db->set('nama_user', $email);
    //     $this->db->set('email', $nama);
    //     $this->db->set('no_telp', $no_telp);
    //     $this->db->set('no_telp', $departemen);
    //     $this->db->where('id_user', $id);
    //     return $this->db->update('user');
    // }
    function update_profil($where, $data, $table)
    {
        $this->db->where($where);
        // $this->db->from('user u');
        // $this->db->join('departemen d', 'd.id_departemen=d.id_departemen');
        // $this->db->select('u.*, d.nama_departemen AS departemen');
        $this->db->update($table, $data);
    }
}
