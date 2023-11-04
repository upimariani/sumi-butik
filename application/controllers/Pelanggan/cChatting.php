<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cChatting extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mChatting');
	}

	public function index()
	{
		$this->form_validation->set_rules('pesan', 'Pesan', 'required');


		if ($this->form_validation->run() == FALSE) {
			//update status read
			$data_notif = array(
				'stat_read' => '1'
			);
			$this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
			$this->db->where('pelanggan_send', NULL);
			$this->db->update('chatting', $data_notif);

			$data = array(
				'pesan' => $this->mChatting->select()
			);
			$this->load->view('Pelanggan/Layout/head');
			$this->load->view('Pelanggan/Layout/header');
			$this->load->view('Pelanggan/vChatting', $data);
			$this->load->view('Pelanggan/Layout/footer');
		} else {
			$data = array(
				'id_pelanggan' => $this->session->userdata('id_pelanggan'),
				'id_user' => '1',
				'pelanggan_send' => $this->input->post('pesan'),

			);
			$this->mChatting->send_pelanggan($data);
			$this->session->set_flashdata('success', 'Pesan Anda Berhasil Dikirim!');
			redirect('Pelanggan/cChatting');
		}
	}
}

/* End of file cChatting.php */
