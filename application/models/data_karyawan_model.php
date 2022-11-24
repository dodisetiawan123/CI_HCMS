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

    public function get_organisasi()
    {
        $this->db->select('idmd_organisasi,kodeorganisasi,namaorganisasi');
        $this->db->from('md_organisasi');
        $query=$this->db->get();
        return $query->result();
    }

    public function get_level()
    {
        $this->db->select('level,namalevel');
        $this->db->from('md_level');
        $query=$this->db->get();
        return $query->result();
    }
     public function get_grade()
    {
        $this->db->select('idmd_grade,grade,gajipokok');
        $this->db->from('md_grade');
        $query=$this->db->get();
        return $query->result();
    }

    
     
}
