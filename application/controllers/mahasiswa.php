<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {
	public function index()
	{
		$data['nama_lengkap'] = "Yudita Pratama";
		$data['jenis_kelamin'] = "Laki-Laki";
		$data['nim'] = 1810330021;

		$mahasiswa[0] = array(
			'nim' => 1810330021,
			'nama' => "Yudita Pratama");
		$data['mahasiswa'] = $mahasiswa;
		$this->load->view('mahasiswa_index', $data);
	}

	public function tambah()
	{
		$this->load->view('mahasiswa_tambah');
	}

}
?>