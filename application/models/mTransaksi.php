<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mTransaksi extends CI_Model
{
	public function po_pelanggan()
	{
		$data['po'] = $this->db->query("SELECT * FROM `po` JOIN pelanggan ON pelanggan.id_pelanggan = po.id_pelanggan WHERE pelanggan.id_pelanggan='" . $this->session->userdata('id_pelanggan') . "';")->result();
		return $data;
	}
	public function detail_po_pelanggan($id_po)
	{
		$data['detail_po'] = $this->db->query("SELECT * FROM `po` JOIN detail_po ON po.id_po=detail_po.id_po JOIN produk ON produk.id_produk=detail_po.id_produk LEFT JOIN diskon ON produk.id_produk = diskon.id_produk WHERE po.id_po='" . $id_po . "'")->result();
		$data['po'] = $this->db->query("SELECT * FROM `po` JOIN pelanggan ON po.id_pelanggan=pelanggan.id_pelanggan WHERE id_po='" . $id_po . "'")->row();
		return $data;
	}
	public function bayar($id, $data)
	{
		$this->db->where('id_po', $id);
		$this->db->update('po', $data);
	}
	public function pesanan_diterima($id, $data)
	{
		$this->db->where('id_po', $id);
		$this->db->update('po', $data);
	}
}

/* End of file mpo.php */
