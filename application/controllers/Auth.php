<?php

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('User/login');
		$this->load->view('templates/footer');
	}

	public function register()
	{
		$this->load->view('templates/header');
		$this->load->view('User/register');
		$this->load->view('templates/footer');
	}
}
