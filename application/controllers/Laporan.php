<?php

class Laporan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('User/laporan/laporan');
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$this->load->view('templates/header');
		$this->load->view('User/laporan/create_laporan');
		$this->load->view('templates/footer');
	}
}
