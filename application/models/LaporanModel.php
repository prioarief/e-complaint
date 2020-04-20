<?php

class LaporanModel extends CI_Model
{
	public function GetAll($where, $limit, $start)
	{
		return $this->db->get_where('laporan', ['status' => 'menunggu verifikasi'], $limit, $start)->result_array();
	}

	public function GetMyLaporan($limit, $start)
	{
		return $this->db->get_where('pengaduan', ['nik' => $this->session->userdata('nik')], $limit, $start)->result_array();
	}

	public function GetSpesificLaporan($limit, $start)
	{
		return $this->db->get_where('laporan', ['status !=' => 'menunggu verifikasi'], $limit, $start)->result_array();
	}

	public function CountMyLaporan()
	{
		return $this->db->get_where('pengaduan', ['nik' => $this->session->userdata('nik')])->num_rows();
	}

	public function CountLaporanProses()
	{
		return $this->db->get_where('laporan', ['status !=' => 'menunggu verifikasi'])->num_rows();
	}

	public function DetailLaporan($id)
	{
		$request = $this->db->get_where('laporan', ['id_pengaduan' => $id])->row_array();
		if (is_null($request)) {
			redirect('Home');
		} else {
			return $request;
		}
	}

	public function CreateLaporan($data)
	{
		$this->db->insert('pengaduan', $data);
	}


	public function EditLaporan($id, $data)
	{
		$this->db->where('id_pengaduan', $id);
		$this->db->update('pengaduan', $data);
	}

	public function DeleteLaporan($id)
	{
		$this->db->where('id_pengaduan', $id);
		$this->db->delete('pengaduan');
	}

	public function Verifikasi($id, $data)
	{
		$this->db->where('id_pengaduan', $id);
		$this->db->update('pengaduan', $data);
	}
}
