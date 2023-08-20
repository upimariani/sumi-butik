<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mChatting extends CI_Model
{
	public function send_pelanggan($data)
	{
		$this->db->insert('chatting', $data);
	}
	public function select()
	{
		$this->db->select('*');
		$this->db->from('chatting');
		$this->db->join('pelanggan', 'chatting.id_pelanggan = pelanggan.id_pelanggan', 'left');
		$this->db->where('pelanggan.id_pelanggan', $this->session->userdata('id_pelanggan'));
		return $this->db->get()->result();
	}

	//admin
	public function chatting()
	{
		$this->db->select('*');
		$this->db->from('chatting');
		$this->db->join('pelanggan', 'chatting.id_pelanggan = pelanggan.id_pelanggan', 'left');
		$this->db->group_by('chatting.id_pelanggan');
		return $this->db->get()->result();
	}
	public function view_chatting($id)
	{
		$this->db->select('*');
		$this->db->from('chatting');
		$this->db->join('pelanggan', 'chatting.id_pelanggan = pelanggan.id_pelanggan', 'left');
		$this->db->where('chatting.id_pelanggan', $id);
		return $this->db->get()->result();
	}
}

/* End of file mChatting.php */
