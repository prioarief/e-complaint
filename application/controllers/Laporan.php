<?php

class Laporan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('LaporanModel');
		$this->load->library('pagination');
		hakAkses();
	}

	public function index()
	{
		login();


		$config['base_url'] = 'http://localhost/E-Complaint/Laporan/index';
		$config['per_page'] = 4;
		$config['total_rows'] = $this->LaporanModel->CountMyLaporan();

		$start = $this->uri->segment(3);

		//style
		$config['full_tag_open'] = '<ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul>';


		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		$this->pagination->initialize($config);

		$data = [
			'laporan' => $this->LaporanModel->GetMyLaporan($config['per_page'], $start),
			'title' => 'Laporan Saya'
		];
		$this->load->view('templates/header', $data);
		$this->load->view('User/laporan/laporanSaya', $data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		login();
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi Laporan', 'required');
		// $this->form_validation->set_rules('foto', 'Lampiran/foto', 'required');

		$data = [
			'title' => 'Buat Laporan'
		];

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('User/laporan/create_laporan');
			$this->load->view('templates/footer');
		} else {
			$config['upload_path'] = './assets/img/lampiran/';
			$config['allowed_types'] = 'png|jpg|jpeg';
			$config['max_size'] = '3072';
			$config['encrypt_name'] = true;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('foto')) {
				$this->session->set_flashdata('alert', 'Laporan Pengaduan gagal di buat');
				redirect('Laporan/create', 'refresh');
				return false;
			} else {
				$lampiran = array('upload_data' => $this->upload->data());
				$data = [
					'judul' => htmlspecialchars($this->input->post('judul', true)),
					'tgl_pengaduan' => date('Y-m-d', time()),
					'nik' => $this->session->userdata('nik'),
					'isi_laporan' => htmlspecialchars($this->input->post('isi', true)),
					'foto' => $lampiran['upload_data']['file_name'],
					'status' => 'menunggu verifikasi'
				];
				$this->LaporanModel->CreateLaporan($data);
				$this->session->set_flashdata('alert', 'Laporan Pengaduan berhasil di buat');
				redirect('Laporan', 'refresh');
			}
		}
	}

	public function edit($id = null)
	{
		if (is_null($id)) {
			redirect('Home');
		}


		login();


		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi Laporan', 'required');

		$data = [
			'title' => 'Edit Laporan'
		];

		if ($this->form_validation->run() == FALSE) {

			$data['detail'] = $this->LaporanModel->DetailLaporan($id);
			$this->load->view('templates/header', $data);
			$this->load->view('User/laporan/edit_laporan', $data);
			$this->load->view('templates/footer');
		} else {
			if (empty($_FILES['foto']['name'])) {
				$data = [
					'judul' => $this->input->post('judul', true),
					'tgl_pengaduan' => date('Y-m-d', time()),
					'nik' => $this->session->userdata('nik'),
					'isi_laporan' => $this->input->post('isi')
				];

				$this->LaporanModel->EditLaporan($id, $data);
			} else {
				$config['upload_path'] = './assets/img/lampiran/';
				$config['allowed_types'] = 'png|jpg|jpeg';
				$config['max_size'] = '3072';
				$config['encrypt_name'] = true;

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('foto')) {
					$error = array('error' => $this->upload->display_errors());
					var_dump($error);
				} else {
					$lampiran = array('upload_data' => $this->upload->data());

					$data = [
						'judul' => $this->input->post('judul', true),
						'tgl_pengaduan' => date('Y-m-d', time()),
						'nik' => $this->session->userdata('nik'),
						'isi_laporan' => $this->input->post('isi'),
						'foto' => $lampiran['upload_data']['file_name'],
						'status' => 'menunggu verifikasi'
					];

					$dataLaporan = $this->LaporanModel->DetailLaporan($id);
					$foto = $dataLaporan['foto'];
					$path = './assets/img/lampiran/';

					@unlink($path . $foto);

					$this->LaporanModel->EditLaporan($id, $data);
				}
			}
			$this->session->set_flashdata('alert', 'Laporan Pengaduan berhasil di edit');
			redirect('Laporan', 'refresh');
		}
	}

	public function detail($id)
	{

		$data = [
			'title' => 'Detail Laporan',
			'detail' => $this->LaporanModel->DetailLaporan($id)
		];

		$this->load->view('templates/header', $data);
		$this->load->view('User/laporan/detail_laporan', $data);
		$this->load->view('templates/footer');
	}

	public function hapus($id = null)
	{
		if (is_null($id)) {
			redirect('Home');
		}

		login();
		$laporan = $this->LaporanModel->DetailLaporan($id);
		$foto = $laporan['foto'];
		$path = './assets/img/lampiran/';

		$this->LaporanModel->DeleteLaporan($id);
		@unlink($path . $foto);

		$this->session->set_flashdata('alert', 'Laporan Pengaduan berhasil di hapus');
		redirect('Laporan', 'refresh');
	}
}
