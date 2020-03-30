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
			$this->session->set_flashdata('alert', '<div class="alert alert-success text-center">Laporan Pengaduan berhasil di buat</div>');
			redirect('Laporan', 'refresh');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi Laporan', 'required');

		if ($this->form_validation->run() == FALSE) {

			$data['detail'] = $this->LaporanModel->DetailLaporan($id);
			$this->load->view('templates/header');
			$this->load->view('User/laporan/edit_laporan', $data);
			$this->load->view('templates/footer');
		} else {
			$this->LaporanModel->EditLaporan($id);
			$this->session->set_flashdata('alert', '<div class="alert alert-success text-center">Laporan Pengaduan berhasil di edit</div>');
			redirect('Laporan', 'refresh');
		}
	}

	public function detail($id)
	{
		$data['detail'] = $this->LaporanModel->DetailLaporan($id);
		$this->load->view('templates/header');
		$this->load->view('User/laporan/detail_laporan', $data);
		$this->load->view('templates/footer');
	}

	public function hapus($id)
	{
		$laporan = $this->LaporanModel->DetailLaporan($id);
		$foto = $laporan['foto'];
		$path = './assets/img/lampiran/';

		$this->LaporanModel->DeleteLaporan($id);
		@unlink($path . $foto);

		$this->session->set_flashdata('alert', '<div class="alert alert-success text-center">Laporan Pengaduan berhasil di hapus</div>');
		redirect('Laporan', 'refresh');
	}
}
