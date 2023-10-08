<?php

defined('BASEPATH') or exit('No direct script access allowed');

class cLogin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mLogin');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Pelanggan/Layout/head');
			$this->load->view('Pelanggan/Layout/header');
			$this->load->view('Pelanggan/vLogin');
			$this->load->view('Pelanggan/Layout/footer');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$data = $this->mLogin->login_pelangan($username, $password);
			if ($data) {
				$id_pelanggan = $data->id_pelanggan;
				$nama = $data->nm_pel;
				$level = $data->level_member;


				$array = array(
					'id_pelanggan' => $id_pelanggan,
					'nama' => $nama,
					'level' => $level
				);
				$this->session->set_userdata($array);

				redirect('Pelanggan/cHome');
			} else {
				$this->session->set_flashdata('error', 'Username dan Password Anda Salah!');

				redirect('Pelanggan/cLogin');
			}
		}
	}
	public function register()
	{
		$this->form_validation->set_rules('nama', 'Nama Pelanggan', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_hp', 'No Telepon', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Pelanggan/Layout/head');
			$this->load->view('Pelanggan/Layout/header');
			$this->load->view('Pelanggan/vRegister');
			$this->load->view('Pelanggan/Layout/footer');
		} else {
			$data = array(
				'nm_pel' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'no_tlpon' => $this->input->post('no_hp'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);
			$this->mLogin->registrasi($data);
			$this->session->set_flashdata('success', 'Anda Berhasil Registrasi! Silahkan Melakukan Login');
			redirect('Pelanggan/cLogin');
		}
	}
	public function logout()
	{

		$this->session->unset_userdata('id_pelanggan');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('level');
		$this->session->set_flashdata('success', 'Anda Berahasil Logout!');
		redirect('Pelanggan/cLogin');
	}
}

/* End of file cLogin.php */
