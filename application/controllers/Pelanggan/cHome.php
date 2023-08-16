<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cHome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mHome');
		$this->load->model('mKategori');
	}

	public function index()
	{
		$data = array(
			'produk' => $this->mHome->produk(),
			'kategori' => $this->mKategori->select()
		);
		$this->load->view('Pelanggan/Layout/head');
		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/vHome', $data);
		$this->load->view('Pelanggan/Layout/footer');
	}
}

/* End of file cHome.php */
