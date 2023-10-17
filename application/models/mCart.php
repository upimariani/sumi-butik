<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mCart extends CI_Model
{
	public function get_produk($id)
	{
		$this->db->select('nama_produk, harga, stok, gambar, diskon, produk.id_produk, deskripsi');
		$this->db->from('produk');
		$this->db->join('diskon', 'produk.id_produk = diskon.id_produk', 'left');
		$this->db->where('produk.id_produk', $id);
		return $this->db->get()->row();
	}
}

/* End of file mCart.php */
