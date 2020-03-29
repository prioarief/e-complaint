<?php

class LaporanModel extends CI_Model
{
	public function GetAllLaporan()
	{
		return $this->db->get_where('pengaduan', ['nik' => $this->session->userdata('nik')])->result_array();
	}

	public function CreateLaporan()
	{
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

			$this->db->insert('pengaduan', $data);
		}
	}
}
