<?php

function login()
{
	$ini = get_instance();
	if (!$ini->session->userdata('nik')) {
		redirect('Auth');
	}
}

function login_admin()
{
	$ini = get_instance();
	if (!$ini->session->userdata('id_petugas')) {
		redirect('Home');
	}
}

function hakAkses()
{
	$ini = get_instance();
	if ($ini->session->userdata('id_petugas')) {
		redirect('Admin');
	}
}
