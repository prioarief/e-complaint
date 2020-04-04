<?php

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Bangkok");
		$this->load->model('LaporanModel', 'laporan');
		$this->load->library('pagination');
	}

	public function index()
	{
		login_admin();

		$config['base_url'] = 'http://localhost/E-Complaint/Admin/index';
		$config['total_rows'] = $this->laporan->CountLaporanProses();
		$config['per_page'] = 10;


		$data = [
			'title' => 'Admin',
			'start' => $this->uri->segment(3),
			'data' => $this->laporan->getAll($config['per_page'], $this->uri->segment(3)),
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


		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('admin/templates/footer');
	}

	public function Auth()
	{
		if ($this->session->userdata('id_petugas')) {
			redirect('Admin');
		} elseif ($this->session->userdata('nik')) {
			redirect('Home');
		}
		$data = [
			'title' => 'Login Admin'
		];

		$this->form_validation->set_rules('username', 'Username', 'required', [
			'required' => 'username Wajib Di isi'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required', [
			'required' => 'Password Wajib Di isi'
		]);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/templates/header', $data);
			$this->load->view('admin/auth/login');
			$this->load->view('admin/templates/footer');
		} else {
			$cek = $this->db->get_where('petugas', ['username' => $this->input->post('username')])->row_array();
			if ($cek) {
				if (password_verify($this->input->post('password'), $cek['password'])) {
					$dataAdmin = [
						'id_petugas' => $cek['id_petugas'],
						'nama_petugas' => $cek['nama_petugas'],
						'user_admin' => $cek['username'],
						'telp' => $cek['telp'],
						'level' => $cek['level'],
						'time' => $cek['created_at'],
					];
					$this->session->set_userdata($dataAdmin);


					$this->session->set_flashdata('alert', '<div class="alert alert-success">Login berhasil, Welcome</div>');
					redirect('Admin');
				} else {
					$this->session->set_flashdata('alert', '<div class="alert alert-danger">Password salah</div>');
					redirect('Admin/Auth');
				}
			} else {
				$this->session->set_flashdata('alert', '<div class="alert alert-danger">username tidak terdaftar</div>');
				redirect('Admin/Auth');
			}
		}
	}

	public function Register()
	{
		login_admin();

		if ($this->session->userdata('level') == 'Petugas') {
			redirect('Admin');
		}
		$time = new DateTime();
		$date = $time->getTimestamp();
		$data = [
			'nama_petugas' => 'Prio Arief Gunawan',
			'username' => 'prioarieff',
			'password' => password_hash('12345678', PASSWORD_DEFAULT),
			'telp' => '0895606060390',
			'level' => 'Petugas',
			'created_at' => date('Y-m-d H:i:s', $date)
		];

		$this->db->insert('petugas', $data);
	}

	public function Logout()
	{
		login_admin();
		$this->session->unset_userdata('id_petugas');
		$this->session->unset_userdata('nama_petugas');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		$this->session->unset_userdata('telp');
		$this->session->unset_userdata('time');

		redirect('Admin/auth');
	}
}
