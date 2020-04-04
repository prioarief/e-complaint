<?php

class Home extends CI_Controller
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

		$config['base_url'] = 'http://localhost/E-Complaint/Home/index';
		$config['total_rows'] = $this->LaporanModel->CountLaporanProses();
		$config['per_page'] = 4;

		$start = $this->uri->segment(3);
		$data = [
			'data' => $this->LaporanModel->GetSpesificLaporan($config['per_page'], $start),
			'title' => 'Laporan Masyarakat',
		];

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



		$this->load->view('templates/header', $data);
		$this->load->view('User/index', $data);
		$this->load->view('templates/footer');
	}

	public function profile()
	{

		$this->load->view('templates/header');
		$this->load->view('User/profil/index');
		$this->load->view('templates/footer');
	}
}
