<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mHome extends CI_Model
{
	public function produk()
	{
		$this->db->select('nama_produk, harga, stok, gambar, diskon, produk.id_produk, nama_kategori, nama_diskon');
		$this->db->from('produk');
		$this->db->join('kategori', 'produk.id_kategori = kategori.id_kategori', 'left');
		$this->db->join('diskon', 'produk.id_produk = diskon.id_produk', 'left');
		return $this->db->get()->result();
	}
}

/* End of file mHome.php */
