<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_dashboard_model extends CI_Model {

    public function __construct()
    {
        
        $this->load->database();
        date_default_timezone_set('Asia/Jakarta');
    }

    
     public function get_gender()
    {
     	$this->db->select('count(case when jeniskelamin="LK" then 1 end) as male_cnt, count(case when jeniskelamin="PR" then 1 end) as female_cnt, count(*) as total_cnt');
        $this->db->from('md_karyawan');

        $query=$this->db->get();
        return $query->row_array();  
    }

    
     
}
