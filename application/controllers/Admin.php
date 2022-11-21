<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('dashboard_model');
		$this->load->model('data_karyawan_model');
		$this->load->model('data_renumerasi_model');
		$this->load->helper(['url', 'language']);
		date_default_timezone_set('Asia/Jakarta');
	}

	//DASHBOARD
	public function dashboard()
	{
		$this->data['karyawan'] = $this->data_karyawan_model->get_karyawan();
		$this->load->view('dashboard', $this->data);
	}

	//RENUMERASI
	public function renumerasi()
	{
		$this->data['grade'] = $this->data_renumerasi_model->get_renumerasi();
		$this->load->view('matrik_grade', $this->data);
	}

	//ORGANISASI
	public function satuan_organisasi()
	{
		$this->load->view('satuan_organisasi');
	}

	public function bagian()
	{
		$this->load->view('bagian_organisasi');
	}

	public function jabatan()
	{
		$this->load->view('jabatan_organisasi');
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
		$this->data['karyawan'] = $this->data_karyawan_model->get_karyawan();
		$this->load->view('list_karyawan', $this->data);
	}

	public function insertdata()
	{
		var_dump($_POST);
		exit();
		
		$this->validasi_form();
		if($this->form_validation->run() === FALSE)
		{
			$this->data['data'] =[
				'email' => $this->input->post('nama'),
				'name' => $this->input->post('alamat_jalan'),
				'jenisid' => $this->input->post('rt'),
				'no_id' => $this->input->post('rw'),
				'no_telp' => $this->input->post('kecamatan'),
				'alamat' => $this->input->post('kabupaten'),
				'subjekinfo' => $this->input->post('pekerjaan'),
				'rincian' => $this->input->post('email'),
				'tujuan' => $this->input->post('telp')
			];

			$this->session->set_flashdata('gagal', 'Permohonan gagal terkirim!! Pastikan semua form telah terisi.');
			//$this->load->view('public/informasiform', $this->data);
			redirect('home/forminformasi','refresh');
		}else{

			    /* Conf */
            $config['upload_path']      = './uploads/';
            $config['allowed_types']    = 'gif|jpg|png';
            $config['max_size']         = 50480;
            $config['file_ext_tolower'] = TRUE;

            $this->load->library('upload', $config);

            //Upload Dokumen Wajib
            if ( ! $this->upload->do_upload('userfile'))
            {
                /* Data */
                $eror = $this->upload->display_errors();
                $this->session->set_flashdata('gagal_file', 'Pastikan file gambar yang di upload memiliki format jpg/png');
                redirect('home/forminformasi','refresh');
            }
            else
            {
                
                /* Data */
                $data = $this->upload->data();
                $additional_data = array(
                        'nama_file'  => $data['file_name']
                    );
                $id_file = $this->public_model->insert_file($additional_data);
            }


			date_default_timezone_set('Asia/Jakarta');
			$additional_data = array(
				'email' => $this->input->post('email'),
				'nama' => $this->input->post('nama'),
				'jenisid' => $this->input->post('jenisid'),
				'no_id' => $this->input->post('no_id'),
				'no_telp' => $this->input->post('no_telp'),
				'alamat' => $this->input->post('alamat')
			);
			
			$insert_id = $this->public_model->add_identitas($additional_data);

			$data_informasi = array(
				'subjekinfo' => $this->input->post('subjekinfo'),
				'rincian' => $this->input->post('rincian'),
				'tujuan' => $this->input->post('tujuan'),
				'col_id_identitas' => $insert_id
			);

			$insert_id_informasi = $this->public_model->add_informasi($data_informasi);

			$data_informasi_status = array(
				'id_status' => 1,
				'id_informasi' => $insert_id_informasi,
				'col_id_identitas' => $insert_id,
				'id_file' => $id_file
			);
			$this->public_model->set_status($data_informasi_status);
			$this->sendEmail($insert_id_informasi);
            $this->session->set_flashdata('berhasil', 'Data berhasil terkirim');
            redirect('home/forminformasi');

		}
	}

	public function detail_karyawan()
	{
		$this->load->view('detail_karyawan');
	}

}
