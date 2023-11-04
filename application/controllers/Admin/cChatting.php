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



		$data = array(
			'chatting' => $this->mChatting->chatting()
		);
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Layout/sidebar');
		$this->load->view('Admin/Komunikasi/vChatting', $data);
		$this->load->view('Admin/Layout/footer');
	}
	public function view_chatting($id_pelanggan)
	{
		//update status read
		$data_notif = array(
			'stat_read' => '1'
		);
		$this->db->where('id_pelanggan', $id_pelanggan);
		$this->db->where('admin_send', NULL);
		$this->db->update('chatting', $data_notif);
		$data = array(
			'id' => $id_pelanggan,
			'chatting' => $this->mChatting->view_chatting($id_pelanggan)
		);
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Layout/sidebar');
		$this->load->view('Admin/Komunikasi/vDetailChatting', $data);
		$this->load->view('Admin/Layout/footer');
	}
	public function balas($id)
	{
		$data = array(
			'id_pelanggan' => $id,
			'id_user' => '1',
			'admin_send' => $this->input->post('pesan'),

		);
		$this->db->insert('chatting', $data);
		redirect('Admin/cChatting/view_chatting/' . $id);
	}
}

/* End of file cChatting.php */
