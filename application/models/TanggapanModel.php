<?php

class TanggapanModel extends CI_Model
{
	public function CreateTanggapan($data)
	{
		$this->db->insert('tanggapan', $data);
		return true;
	}
}
