<?php

function login()
{
	$ini = get_instance();
	if (!$ini->session->userdata('nik')) {
		redirect('Auth');
	}
}
