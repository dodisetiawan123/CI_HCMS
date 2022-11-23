<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		date_default_timezone_set('Asia/Jakarta');
	}

	//Bidang
	public function getbidang()
	{
		header('Content-Type:application/json');
		header('Access-Control-Allow-Origin: *');
		$id   = $this->input->post('id');
		$data = $this->db->query("SELECT * FROM md_bidang WHERE idmd_organisasi='$id'")->result();
		echo json_encode($data);
	}

	//Bagian
	public function GetBagian()
	{
		header('Content-Type:application/json');
		header('Access-Control-Allow-Origin: *');
		$id   = $this->input->post('id');
		$data = $this->db->query("SELECT * FROM MKBagian a INNER JOIN MKSatuanOrganisasi b ON a.SatuanOrganisasi=b.IDSatuanOrganisasi WHERE b.NamaSatuanOrganisasi='$id'")->result();
		echo json_encode($data);
	}

}
