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
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Layout/sidebar');
		$this->load->view('Admin/Komunikasi/vKritikSaran', $data);
		$this->load->view('Admin/Layout/footer');
	}
}

/* End of file cKritikSaran.php */
