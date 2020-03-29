<?php

class Laporan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('LaporanModel');
	}

	public function index()
	{
		$data['laporan'] = $this->LaporanModel->GetAllLaporan();
		$this->load->view('templates/header');
		$this->load->view('User/laporan/laporanSaya', $data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi Laporan', 'required');
		// $this->form_validation->set_rules('foto', 'Lampiran/foto', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('User/laporan/create_laporan');
			$this->load->view('templates/footer');
		} else {
			$this->LaporanModel->CreateLaporan();
			redirect('Laporan', 'refresh');
		}
	}
}
