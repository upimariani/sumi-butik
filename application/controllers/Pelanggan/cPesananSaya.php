<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPesananSaya extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mTransaksi');
	}
	public function index()
	{
		$data = array(
			'transaksi' => $this->mTransaksi->po_pelanggan()
		);
		$this->load->view('Pelanggan/Layout/head');
		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/vPesananSaya', $data);
		$this->load->view('Pelanggan/Layout/footer');
	}
	public function detail_pesanan($id)
	{
		$data = array(
			'transaksi' => $this->mTransaksi->detail_po_pelanggan($id)
		);
		$this->load->view('Pelanggan/Layout/head');
		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/vDetailTransaksi', $data);
		$this->load->view('Pelanggan/Layout/footer');
	}
	public function bayar($id)
	{
		$config['upload_path']          = './asset/pembayaran';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 500000;

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('gambar')) {

			$data = array(
				'transaksi' => $this->mTransaksi->detail_po_pelanggan($id),
				'error' => $this->upload->display_errors()
			);
			$this->load->view('Pelanggan/Layout/head');
			$this->load->view('Pelanggan/Layout/header');
			$this->load->view('Pelanggan/vDetailTransaksi', $data);
			$this->load->view('Pelanggan/Layout/footer');
		} else {
			$upload_data = $this->upload->data();
			$data = array(
				'status_order' => '1',
				'bukti_pembayaran' => $upload_data['file_name']
			);
			$this->mTransaksi->bayar($id, $data);
			$this->session->set_flashdata('success', 'Anda berhasil melakukan pembayaran!!!');
			redirect('Pelanggan/cPesananSaya/detail_pesanan/' . $id, 'refresh');
		}
	}
}

/* End of file cPesananSaya.php */
