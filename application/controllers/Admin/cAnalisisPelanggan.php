<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAnalisisPelanggan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAnalisis');
	}

	public function index()
	{
		$data = array(
			'pelanggan' => $this->mAnalisis->pelanggan()
		);
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Layout/sidebar');
		$this->load->view('Admin/Pelanggan/vAnalisisPelanggan', $data);
		$this->load->view('Admin/Layout/footer');
	}
}

/* End of file cAnalisisPelanggan.php */
