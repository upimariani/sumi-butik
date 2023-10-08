<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cTransaksi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mTransaksi');
	}

	public function index()
	{
		$data = array(
			'transaksi' => $this->mTransaksi->transaksi_admin()
		);
		$this->load->view('Pemilik/Layout/head');
		$this->load->view('Pemilik/Layout/sidebar');
		$this->load->view('Pemilik/vLaporanTransaksi', $data);
		$this->load->view('Pemilik/Layout/footer');
	}
	public function cetak()
	{
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$transaksi = $this->db->query("SELECT * FROM `po` JOIN pelanggan ON pelanggan.id_pelanggan=po.id_pelanggan WHERE MONTH(tgl_po)='" . $bulan . "' AND YEAR(tgl_po)='" . $tahun . "' AND status_order='4'")->result();
		// memanggil library FPDF
		require('asset/fpdf/fpdf.php');

		// intance object dan memberikan pengaturan halaman PDF
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->AddPage();

		$pdf->SetFont('Times', 'B', 14);

		$pdf->Cell(200, 40, 'LAPORAN TRANSAKSI', 0, 0, 'C');
		$pdf->SetLineWidth(0);
		$pdf->Cell(10, 30, '', 0, 1);
		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(10, 7, 'No', 1, 0, 'C');
		$pdf->Cell(50, 7, 'Nama Pelanggan', 1, 0, 'C');
		$pdf->Cell(30, 7, 'Tanggal Transaksi', 1, 0, 'C');
		$pdf->Cell(40, 7, 'Total Transaksi', 1, 0, 'C');
		$pdf->Cell(60, 7, 'Alamat Pengiriman', 1, 0, 'C');


		$pdf->Cell(10, 7, '', 0, 1);
		$pdf->SetFont('Times', '', 10);
		$no = 1;

		foreach ($transaksi as $key => $value) {
			$pdf->Cell(10, 6, $no++, 1, 0, 'C');
			$pdf->Cell(50, 6, $value->nm_pel, 1, 0);
			$pdf->Cell(30, 6, $value->tgl_po, 1, 0);
			$pdf->Cell(40, 6, 'Rp.' . number_format($value->total_bayar, 2), 1, 0);
			$pdf->Cell(60, 6, $value->alamat_detail, 1, 1);
		}
		$pdf->Output();
	}
}

/* End of file cTransaksi.php */
