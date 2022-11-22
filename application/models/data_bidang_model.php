<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_bidang_model extends CI_Model {

    public function __construct()
    {
        
        $this->load->database();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function get_bidang()
    {
        $this->db->select('idmd_bidang,kodebidang,namabidang');
        $this->db->from('md_bidang');
        $query=$this->db->get();
        return $query->result();
    }

    public function insertbidang($data)
    {
        $this->db->insert('md_bidang', $data);
        
    }
    
     
}
