<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAnalisisRetensi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAnalisis');
	}

	public function index()
	{
		$data = array(
			'pelanggan' => $this->mAnalisis->pelanggan()
		);
		$this->load->view('Pemilik/Layout/head');
		$this->load->view('Pemilik/Layout/sidebar');
		$this->load->view('Pemilik/vLaporanRetensi', $data);
		$this->load->view('Pemilik/Layout/footer');
	}
	public function cetak()
	{
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$pelanggan = $this->db->query("SELECT * FROM `analisis` JOIN pelanggan ON pelanggan.id_pelanggan=analisis.id_pelanggan WHERE periode='" . $bulan . "' AND tahun='" . $tahun . "'")->result();
		// memanggil library FPDF
		require('asset/fpdf/fpdf.php');

		// intance object dan memberikan pengaturan halaman PDF
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->AddPage();

		$pdf->SetFont('Times', 'B', 14);

		$pdf->Cell(200, 40, 'LAPORAN RETENSI PELANGGAN', 0, 0, 'C');
		$pdf->SetLineWidth(0);
		$pdf->Cell(10, 30, '', 0, 1);
		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(10, 7, 'No', 1, 0, 'C');
		$pdf->Cell(45, 7, 'Nama Pelanggan', 1, 0, 'C');
		$pdf->Cell(30, 7, 'No Telepon', 1, 0, 'C');
		$pdf->Cell(60, 7, 'Alamat', 1, 0, 'C');
		$pdf->Cell(40, 7, 'Status Member', 1, 0, 'C');


		$pdf->Cell(10, 7, '', 0, 1);
		$pdf->SetFont('Times', '', 10);
		$no = 1;

		foreach ($pelanggan as $key => $value) {
			if ($value->level_member == '0') {
				$status = 'Pelanggan';
			} else {
				$status = 'Pelanggan Istimewa';
			}
			$pdf->Cell(10, 6, $no++, 1, 0, 'C');
			$pdf->Cell(45, 6, $value->nm_pel, 1, 0);
			$pdf->Cell(30, 6, $value->no_tlpon, 1, 0);
			$pdf->Cell(60, 6, $value->alamat, 1, 0);
			$pdf->Cell(40, 6, $status, 1, 1);
		}
		$pdf->Output();
	}
}

/* End of file cAnalissiRetensi.php */
