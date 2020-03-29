<?php

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required', [
			'required' => 'username Wajib Di isi'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required', [
			'required' => 'Password Wajib Di isi'
		]);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('User/auth/login');
			$this->load->view('templates/footer');
		} else {
			$username =  $this->input->post('username');
			$password =  $this->input->post('password');
			$query = $this->db->get_where('masyarakat', ['username' => $username])->row_array();
			if ($query) {
				if (password_verify($password, $query['password'])) {
					$dataUser = [
						'nik' => $query['nik'],
						'nama' => $query['nama'],
						'username' => $query['username'],
						'created' => $query['created_at'],
						'telp' => $query['telp']
					];

					$this->session->set_userdata($dataUser);
				}
			}
			$this->session->set_flashdata('alert', '<div class="alert alert-success text-center">Login berhasil, silakan buat laporan pengaduan</div>');
			redirect('Home', 'refresh');
		}
	}

	public function register()
	{


		$this->form_validation->set_rules('nama', 'Nama', 'required', [
			'required' => 'Nama Wajib Di isi'
		]);
		$this->form_validation->set_rules('nik', 'NIK', 'required|numeric|is_unique[masyarakat.nik]', [
			'is_unique' => 'NIK sudah terdaftar',
			'required' => 'NIK Wajib Di isi',
			'numeric' => 'NIK hanya boleh nomor'
		]);
		$this->form_validation->set_rules('username', 'Username', 'required|alpha_dash|is_unique[masyarakat.username]', [
			'is_unique' => 'Username sudah terdaftar',
			'alpha_dash' => 'Username tidak memakai spasi',
			'required' => 'username Wajib Di isi'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|alpha_dash', [
			'required' => 'Password Wajib Di isi',
			'alpha_dash' => 'Username tidak memakai spasi'
		]);
		$this->form_validation->set_rules('telp', 'Telp', 'required|numeric', [
			'numeric' => 'Telp hanya boleh nomor'
		]);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('User/auth/register');
			$this->load->view('templates/footer');
		} else {
			date_default_timezone_set("Asia/Bangkok");
			$time = new DateTime();
			$date = $time->getTimestamp();
			$data = [
				'nik' => $this->input->post('nik', true),
				'nama' => $this->input->post('nama', true),
				'username' => $this->input->post('username', true),
				'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
				'telp' => $this->input->post('telp', true),
				'created_at' => date('Y-m-d H:i:s', $date)
			];

			$this->db->insert('masyarakat', $data);
			$this->session->set_flashdata('alert', '<div class="alert alert-success text-center">Registrasi berhasil, silakan login</div>');
			redirect('Auth', 'refresh');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('nik');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('created');

		redirect('Auth', 'refresh');
	}
}
