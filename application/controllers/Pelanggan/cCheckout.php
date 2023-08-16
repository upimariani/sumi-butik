<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cCheckout extends CI_Controller
{

	public function index()
	{
		$this->load->view('Pelanggan/Layout/head');
		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/vCheckout');
	}
	public function order()
	{
		$data = array(
			'id_pelanggan' => '1',
			'tgl_po' => date('Y-m-d'),
			'total_bayar' => $this->input->post('total_bayar'),
			'status_order' => '0',
			'bukti_pembayaran' => '0',
			'alamat_detail' => $this->input->post('alamat'),
			'prov' => $this->input->post('provinsi'),
			'kota' => $this->input->post('kota'),
			'ongkir' => $this->input->post('ongkir'),
			'estimasi' => $this->input->post('estimasi'),
			'expedisi' => $this->input->post('expedisi')
		);
		$this->db->insert('po', $data);

		$id_po = $this->db->query("SELECT MAX(id_po) as id FROM `po`")->row();
		foreach ($this->cart->contents() as $key => $value) {
			$detail = array(
				'id_po' => $id_po->id,
				'id_produk' => $value['id'],
				'qty' => $value['qty']
			);
			$this->db->insert('detail_po', $detail);
		}
		redirect('Pelanggan/cHome');
	}
}

/* End of file cCheckout.php */
