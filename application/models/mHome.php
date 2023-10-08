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
	public function kritik_saran()
	{
		$this->db->select('*');
		$this->db->from('kritik_saran');
		$this->db->join('po', 'kritik_saran.id_po = po.id_po', 'left');
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = po.id_pelanggan', 'left');

		return $this->db->get()->result();
	}
}

/* End of file mHome.php */
