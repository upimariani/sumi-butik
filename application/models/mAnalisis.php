<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAnalisis extends CI_Model
{
	public function pelanggan()
	{
		$this->db->select('*');
		$this->db->from('pelanggan');
		return $this->db->get()->result();
	}
	public function variabel($date)
	{
		$data['all'] = $this->db->query("SELECT COUNT(po.id_po) as frequency, DATEDIFF('" . $date . "', MAX(tgl_po)) as recency, SUM(total_bayar) as monetary, po.id_pelanggan, nm_pel FROM `po` JOIN pelanggan ON pelanggan.id_pelanggan=po.id_pelanggan GROUP BY po.id_pelanggan")->result();
		$data['limit'] = $this->db->query("SELECT COUNT(id_po) as frequency, DATEDIFF('" . $date . "', MAX(tgl_po)) as recency, SUM(total_bayar) as monetary, id_pelanggan FROM `po`GROUP BY id_pelanggan LIMIT 2")->result();
		return $data;
	}
}

/* End of file mAnalisis.php */
