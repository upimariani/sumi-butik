<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cHome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mHome');
		$this->load->model('mKategori');
		$this->load->model('mCart');
	}

	public function index()
	{
		$data = array(
			'produk' => $this->mHome->produk(),
			'kategori' => $this->mKategori->select(),
			'kritik_saran' => $this->mHome->kritik_saran()
		);
		$this->load->view('Pelanggan/Layout/head');
		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/vHome', $data);
		$this->load->view('Pelanggan/Layout/footer');
	}
	public function detail_produk($id)
	{
		$data = array(
			'produk' => $this->mCart->get_produk($id),
			'penilaian' => $this->mHome->penilaian($id)
		);
		$this->load->view('Pelanggan/Layout/head');
		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/vDetailProduk', $data);
		$this->load->view('Pelanggan/Layout/footer');
	}
}

/* End of file cHome.php */
