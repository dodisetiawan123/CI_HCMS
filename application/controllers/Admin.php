<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->model('dashboard_model');
		$this->load->model('data_karyawan_model');
		$this->load->model('data_renumerasi_model');
		$this->load->model('data_organisasi_model');
		$this->load->model('data_bidang_model');
		$this->load->model('data_bagian_model');
		$this->load->model('data_jabatan_model');
		$this->load->helper(['url', 'language']);
		date_default_timezone_set('Asia/Jakarta');
	}

	//DASHBOARD
	public function dashboard()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{

		$this->data['karyawan'] = $this->data_karyawan_model->get_karyawan();
		$this->load->view('dashboard', $this->data);

		}
	}

	//RENUMERASI
	public function renumerasi()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
			$this->data['grade'] = $this->data_renumerasi_model->get_renumerasi();
			$this->load->view('matrik_grade', $this->data);
		}
	}


	//ORGANISASI
	public function satuan_organisasi()
	{
		$this->data['organisasi'] = $this->data_organisasi_model->get_organisasi();
		$this->load->view('satuan_organisasi', $this->data);
	}

	public function insertorganisasi()
	{
		$data = array(
				'kodeorganisasi' => strtoupper($this->input->post('kodeorganisasi')),
				'namaorganisasi' => ucwords($this->input->post('namaorganisasi'))
			);
		$this->data_organisasi_model->insertorganisasi($data);
		$this->session->set_flashdata('done', 'Data berhasil tersimpan');
		redirect('admin/satuan_organisasi', 'refresh');

		
	}




	//BIDANG
	public function bidang()
	{
		$this->data['bidang'] = $this->data_bidang_model->get_bidang();
		$this->data['organisasi'] = $this->data_bidang_model->get_organisasi();
		$this->load->view('bidang_organisasi', $this->data);
	}

	public function insertbidang()
	{
		$data = array(
				'kodebidang' => strtoupper($this->input->post('kodebidang')),
				'namabidang' => ucwords($this->input->post('namabidang')),
				'idmd_organisasi' => $this->input->post('idmd_organisasi')
			);

		$this->data_bidang_model->insertbidang($data);
		$this->session->set_flashdata('done', 'Data berhasil tersimpan');
		redirect('admin/bidang', 'refresh');

		
	}




	//BAGIAN
	public function bagian()
	{
		$this->data['bagian'] = $this->data_bagian_model->get_bagian();
		$this->data['organisasi'] = $this->data_bagian_model->get_organisasi();
		$this->load->view('bagian_organisasi', $this->data);
	}

	public function insertbagian()
	{
		$data = array(
				'kodebagian' => strtoupper($this->input->post('kodebagian')),
				'namabagian' => ucwords($this->input->post('namabagian')),
				'idmd_bidang' => $this->input->post('idmd_bidang')
			);

		$this->data_bagian_model->insertbagian($data);
		redirect('admin/bagian', 'refresh');

		
	}


	//JABATAN
	public function jabatan()
	{
		$this->data['jabatan'] = $this->data_jabatan_model->get_jabatan();
		$this->data['organisasi'] = $this->data_jabatan_model->get_organisasi();
		$this->load->view('jabatan_organisasi', $this->data);
	}

	public function insertjabatan()
	{
		$data = array(
				'namajabatan' => ucwords($this->input->post('namajabatan')),
				'idmd_bidang' => $this->input->post('idmd_bidang')
			);

		$this->data_jabatan_model->insertjabatan($data);
		$this->session->set_flashdata('done', 'Data berhasil tersimpan');
		redirect('admin/jabatan', 'refresh');

		
	}

	public function struktur()
	{
		$this->load->view('struktur_organisasi');
	}

	//PROYEK
	public function master_proyek()
	{
		$this->load->view('dashboard');
	}

	public function jabatan_proyek()
	{
		$this->load->view('dashboard');
	}

	//Data Karyawan
	public function data_karyawan()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
			$this->data['karyawan'] = $this->data_karyawan_model->get_karyawan();
			$this->data['level'] = $this->data_karyawan_model->get_level();
			$this->data['grade'] = $this->data_karyawan_model->get_grade();
			$this->data['organisasi'] = $this->data_karyawan_model->get_organisasi();
			$this->load->view('list_karyawan', $this->data);
		}
	}

	public function insertdata()
	{
		var_dump($_POST);
		exit();
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{

			$data = array(
				'nama' => $this->input->post('nama'),
				'npk' => $this->input->post('npk'),
				'tempatlahir' => $this->input->post('jenisid'),
				'tgllahir' => $this->input->post('no_id'),
				'jeniskelamin' => $this->input->post('no_telp'),
				'agama' => $this->input->post('alamat')
			);
			
            $this->session->set_flashdata('berhasil', 'Data berhasil terkirim');
            redirect('admin/data_karyawan');

		}
	}

	public function detail_karyawan()
	{
		$this->load->view('detail_karyawan');
	}

}
