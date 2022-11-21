<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_karyawan_model extends CI_Model {

    public function __construct()
    {
        
        $this->load->database();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function get_karyawan()
    {
        $this->db->select('Nama,NPK,');
        $this->db->from('md_karyawan');
        //$this->db->join('dbo.DEPARTMENTS', 'dbo.USERINFO.DEFAULTDEPTID = dbo.DEPARTMENTS.DEPTID', 'left' );

        $query=$this->db->get();
        return $query->result();
    }

    
     
}
