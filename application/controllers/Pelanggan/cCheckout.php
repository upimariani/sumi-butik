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
		$data_pelanggan = $this->db->query("SELECT * FROM `pelanggan` WHERE id_pelanggan='" . $this->session->userdata('id_pelanggan') . "'")->row();
		if ($this->session->userdata('level') == '1' && $data_pelanggan->stat_reward == '1') {
			$total = $this->input->post('istimewa');
		} else {
			$total = $this->input->post('total_bayar');
		}


		$data = array(
			'id_pelanggan' => $this->session->userdata('id_pelanggan'),
			'tgl_po' => date('Y-m-d'),
			'total_bayar' => $total,
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

		//update reward

		$reward = array(
			'stat_reward' => '0'
		);
		$this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
		$this->db->update('pelanggan', $reward);


		//update stok produk
		foreach ($this->cart->contents() as $key => $item) {
			$update_stok = $item['stok'] - $item['qty'];
			$stok = array(
				'stok' => $update_stok
			);
			$this->db->where('id_produk', $item['id']);
			$this->db->update('produk', $stok);
		}

		$id_po = $this->db->query("SELECT MAX(id_po) as id FROM `po`")->row();
		foreach ($this->cart->contents() as $key => $value) {
			$detail = array(
				'id_po' => $id_po->id,
				'id_produk' => $value['id'],
				'qty' => $value['qty']
			);
			$this->db->insert('detail_po', $detail);
		}
		$this->cart->destroy();
		redirect('Pelanggan/cPesananSaya');
	}
}

/* End of file cCheckout.php */
