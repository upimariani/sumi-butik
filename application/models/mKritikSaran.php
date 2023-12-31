<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mKritikSaran extends CI_Model
{
	public function select()
	{
		$this->db->select('*');
		$this->db->from('kritik_saran');
		$this->db->join('po', 'kritik_saran.id_po = po.id_po', 'left');
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = po.id_pelanggan', 'left');
		$this->db->join('detail_po', 'po.id_po = detail_po.id_po', 'left');
		$this->db->join('produk', 'produk.id_produk = detail_po.id_produk', 'left');
		return $this->db->get()->result();
	}
}

/* End of file mKritikSaran.php */
