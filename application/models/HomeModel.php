<?php

class HomeModel extends CI_Model
{
	public function getAllLaporan()
	{
		return $this->db->get('laporan')->result_array();
	}

	public function CountLaporan()
	{
		return $this->db->get('laporan')->num_rows();
	}

	public function Laporan($limit, $start)
	{
		return $this->db->get('laporan', $limit, $start)->result_array();
	}
}
