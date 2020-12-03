<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mahasiswa extends CI_Model {

	// CRUD
	public function getAll()
	{
		return $this->db->get('mahasiswa')->result();
	}

}

/* End of file m_mahasiswa.php */
/* Location: ./application/models/m_mahasiswa.php */