<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAnalisis extends CI_Model
{
	public function pelanggan()
	{
		$this->db->select('*');
		$this->db->from('analisis');
		$this->db->join('pelanggan', 'analisis.id_pelanggan = pelanggan.id_pelanggan', 'left');
		$this->db->where('periode=3');
		$this->db->where('tahun=2023');
		return $this->db->get()->result();


		return $this->db->get()->result();
	}
	public function variabel($date)
	{
		$data['all'] = $this->db->query("SELECT COUNT(po.id_po) as frequency, DATEDIFF('2023-09-30', MAX(tgl_po)) as recency, SUM(total_bayar) as monetary, po.id_pelanggan, nm_pel, MAX(tgl_po) as akhir_transaksi, MIN(tgl_po) as awal_transaksi, level_member FROM `po` JOIN pelanggan ON pelanggan.id_pelanggan=po.id_pelanggan WHERE MONTH(tgl_po) <= 9 AND MONTH(tgl_po) > 6 AND YEAR(tgl_po)='2023' GROUP BY po.id_pelanggan")->result();
		$data['limit'] = $this->db->query("SELECT COUNT(id_po) as frequency, DATEDIFF('" . $date . "', MAX(tgl_po)) as recency, SUM(total_bayar) as monetary, id_pelanggan, MAX(tgl_po) as akhir_transaksi, MIN(tgl_po) as awal_transaksi FROM `po`GROUP BY id_pelanggan LIMIT 2")->result();
		return $data;
	}
}

/* End of file mAnalisis.php */
