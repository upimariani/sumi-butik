<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cCart extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mCart');
	}


	public function index()
	{
		$this->load->view('Pelanggan/Layout/head');
		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/vCart');
		$this->load->view('Pelanggan/Layout/footer');
	}
	public function add_to_cart($id)
	{
		$produk = $this->mCart->get_produk($id);
		$data = array(
			'id' => $produk->id_produk,
			'name' => $produk->nama_produk,
			'stok' => $produk->stok,
			'price' => $produk->harga - ($produk->diskon / 100 * $produk->harga),
			'qty' => '1',
			'gambar' => $produk->gambar
		);
		$this->cart->insert($data);
		$this->session->set_flashdata('success', 'Produk Berhasil Masuk Keranjang!');
		redirect('Pelanggan/cHome');
	}
}

/* End of file cCart.php */
