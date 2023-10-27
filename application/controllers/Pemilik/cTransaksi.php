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
		$transaksi = $this->db->query("SELECT * FROM `po` JOIN pelanggan ON pelanggan.id_pelanggan=po.id_pelanggan JOIN detail_po ON detail_po.id_po=po.id_po JOIN produk ON produk.id_produk=detail_po.id_produk WHERE MONTH(tgl_po)='" . $bulan . "' AND YEAR(tgl_po)='" . $tahun . "' AND status_order='4'")->result();
		// memanggil library FPDF
		require('asset/fpdf/fpdf.php');

		// intance object dan memberikan pengaturan halaman PDF
		$pdf = new FPDF('L', 'mm', 'A4');
		$pdf->AddPage();

		$pdf->SetFont('Times', 'B', 14);

		$pdf->Cell(280, 40, 'LAPORAN TRANSAKSI', 0, 0, 'C');
		$pdf->SetLineWidth(0);
		$pdf->Cell(10, 30, '', 0, 1);
		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(10, 7, 'No', 1, 0, 'C');
		$pdf->Cell(30, 7, 'Nama Pelanggan', 1, 0, 'C');
		$pdf->Cell(40, 7, 'Produk', 1, 0, 'C');
		$pdf->Cell(20, 7, 'Quantity', 1, 0, 'C');
		$pdf->Cell(30, 7, 'Harga', 1, 0, 'C');
		$pdf->Cell(30, 7, 'Subtotal', 1, 0, 'C');
		$pdf->Cell(30, 7, 'Tanggal Transaksi', 1, 0, 'C');
		$pdf->Cell(40, 7, 'Total Transaksi', 1, 0, 'C');
		$pdf->Cell(50, 7, 'Alamat Pengiriman', 1, 0, 'C');


		$pdf->Cell(10, 7, '', 0, 1);
		$pdf->SetFont('Times', '', 10);
		$no = 1;
		$total = 0;

		foreach ($transaksi as $key => $value) {
			$total += $value->total_bayar;
			$pdf->SetFillColor(255, 255, 255);
			$pdf->Cell(10, 6, $no++, 1, 0, 'C');
			$pdf->Cell(30, 6, $value->nm_pel, 1, 0, 'L', true);
			$pdf->Cell(40, 6, $value->nama_produk, 1, 0, 'L', true);
			$pdf->Cell(20, 6, $value->qty, 1, 0, 'C', true);
			$pdf->Cell(30, 6, 'Rp.' . number_format($value->harga, 2), 1, 0, 'L', true);
			$pdf->Cell(30, 6, 'Rp.' . number_format($value->harga * $value->qty, 2), 1, 0, 'L', true);
			$pdf->Cell(30, 6, $value->tgl_po, 1, 0, 'L', true);
			$pdf->Cell(40, 6, 'Rp.' . number_format($value->total_bayar, 2), 1, 0, 'L', true);
			$pdf->Cell(50, 6, $value->alamat_detail, 1, 1, 'L', true);
		}
		$pdf->Ln();
		$pdf->SetFont('Times', 'B', 14);
		$pdf->Cell(180, 6, '', 0, 0, 'C');
		$pdf->Cell(40, 6, 'Total Pendapatan: ', 0, 0, 'L', true);
		$pdf->Cell(50, 6, 'Rp.' . number_format($total, 2), 0, 0, 'L', true);
		$pdf->Output();
	}
}

/* End of file cTransaksi.php */
