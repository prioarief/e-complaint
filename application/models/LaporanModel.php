<?php

class LaporanModel extends CI_Model
{
	public function GetAllLaporan()
	{
		return $this->db->get_where('pengaduan', ['nik' => $this->session->userdata('nik')])->result_array();
	}

	public function DetailLaporan($id)
	{
		return $this->db->get_where('pengaduan', ['id_pengaduan' => $id])->row_array();
	}

	public function CreateLaporan()
	{
		$lampiran = array('upload_data' => $this->upload->data());


		for ($i = 1; $i < 10; $i++) {
			$data = [
				'judul' => htmlspecialchars($this->input->post('judul', true) . $i),
				'tgl_pengaduan' => date('Y-m-d', time()),
				'nik' => $this->session->userdata('nik'),
				'isi_laporan' => htmlspecialchars($this->input->post('isi', true)),
				'foto' => $lampiran['upload_data']['file_name'],
				'status' => 'menunggu verifikasi'
			];
			$this->db->insert('pengaduan', $data);
			// var_dump($data);
		}
	}


	public function EditLaporan($id)
	{
		if (empty($_FILES['foto']['name'])) {
			$data = [
				'judul' => $this->input->post('judul', true),
				'tgl_pengaduan' => date('Y-m-d', time()),
				'nik' => $this->session->userdata('nik'),
				'isi_laporan' => $this->input->post('isi'),
				'status' => 'menunggu verifikasi'
			];

			$this->db->where('id_pengaduan', $id);
			$this->db->update('pengaduan', $data);
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

				$dataLaporan = $this->DetailLaporan($id);
				$foto = $dataLaporan['foto'];
				$path = './assets/img/lampiran/';

				@unlink($path . $foto);

				$this->db->where('id_pengaduan', $id);
				$this->db->update('pengaduan', $data);
			}
		}
	}

	public function DeleteLaporan($id)
	{
		$this->db->where('id_pengaduan', $id);
		$this->db->delete('pengaduan');
	}
}
