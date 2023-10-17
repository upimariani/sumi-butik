<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cKritikSaran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mKritikSaran');
	}
	public function index()
	{
		$data = array(
			'kritiksaran' => $this->mKritikSaran->select()
		);
		$this->load->view('Pemilik/Layout/head');
		$this->load->view('Pemilik/Layout/sidebar');
		$this->load->view('Pemilik/vKritikSaran', $data);
		$this->load->view('Pemilik/Layout/footer');
	}
}

/* End of file cKritikSaran.php */
