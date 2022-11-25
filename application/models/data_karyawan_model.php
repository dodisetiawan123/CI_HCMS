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
        $this->db->select('nama,md_karyawan.npk,md_organisasi.namaorganisasi,md_bidang.namabidang,md_jabatan.namajabatan');
        $this->db->from('md_karyawan');
        $this->db->join('mk_jabatan', 'mk_jabatan.npk = md_karyawan.npk', 'left' );
        $this->db->join('md_jabatan', 'mk_jabatan.idmd_jabatan = md_jabatan.idmd_jabatan', 'left' );
        $this->db->join('md_bidang', 'mk_jabatan.idmd_bidang = md_bidang.idmd_bidang', 'left' );
        $this->db->join('md_organisasi', 'mk_jabatan.idmd_organisasi = md_organisasi.idmd_organisasi', 'left' );

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

  
    public function insertmdkaryawan($data_md_karyawan)
    {
         $this->db->insert('md_karyawan', $data_md_karyawan);
            
    }

    public function insertmkpendidikan($data_mk_pendidikan)
    {
         $this->db->insert('mk_pendidikan', $data_mk_pendidikan);
            
    }

    public function insertmkjabatan($data_mk_jabatan)
    {
         $this->db->insert('mk_jabatan', $data_mk_jabatan);
            
    }

    public function insertmkrenumerasi($data_mk_renumerasi)
    {
         $this->db->insert('mk_renumerasi', $data_mk_renumerasi);
            
    }

    
     
}
