<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model(array('M_user', 'M_pegawai'));
	}

	public function index()
	{
		$data['pegawai'] = $this->M_pegawai->get();
		$this->load->view('pegawai/pegawai', $data);
	}

	public function add_pegawai()
	{
		$this->load->view('pegawai/add_pegawai');
	}

	public function add()
	{

		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('nik', 'NIK', 'required|trim|min_length[15]|max_length[16]|numeric|is_unique[tb_pegawai.nik]');
		$this->form_validation->set_rules('no_hp', 'No. Hp', 'required|trim|min_length[11]|max_length[13]|numeric');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
		$this->form_validation->set_rules('tgl_lahir', 'Tgl. Lahir', 'required|trim');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim');

		if ($this->form_validation->run() == false) {
			return $this->load->view('pegawai/add_pegawai');
		} else {
			$data = [

				'nama'         => htmlspecialchars($this->input->post('nama', true)),
				'nik'          => htmlspecialchars($this->input->post('nik', true)),
				'no_hp'        => htmlspecialchars($this->input->post('no_hp', true)),
				'alamat'       => htmlspecialchars($this->input->post('alamat', true)),
				'jabatan'      => htmlspecialchars($this->input->post('jabatan', true)),
				'tgl_lahir'    => $this->input->post('tgl_lahir', true),
				'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true))
			];
			$this->db->insert('tb_pegawai', $data);
			$this->session->set_flashdata('message', 'add');
			redirect(base_url('pegawai'));
		}
	}

	public function edit($id)
	{
		$data['pegawai'] = $this->M_pegawai->get_by_id($id);
		$this->load->view('pegawai/edit_pegawai', $data);
	}

	public function update()
	{
		$id = $this->input->post('id');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('nik', 'NIK', 'required|trim|min_length[15]|max_length[16]|numeric');
		$this->form_validation->set_rules('no_hp', 'No. Hp', 'required|trim|min_length[11]|max_length[13]|numeric');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
		$this->form_validation->set_rules('tgl_lahir', 'Tgl. Lahir', 'required|trim');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['pegawai'] = $this->M_pegawai->get_by_id($id);
			return $this->load->view('pegawai/edit_pegawai', $data);
		} else {

			$data = [

				'nama'         => htmlspecialchars($this->input->post('nama', true)),
				'nik'          => htmlspecialchars($this->input->post('nik', true)),
				'no_hp'        => htmlspecialchars($this->input->post('no_hp', true)),
				'alamat'       => htmlspecialchars($this->input->post('alamat', true)),
				'jabatan'      => htmlspecialchars($this->input->post('jabatan', true)),
				'tgl_lahir'    => $this->input->post('tgl_lahir', true),
				'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true))
			];
			$this->M_pegawai->update($data, $id);
			$this->session->set_flashdata('message', 'update');
			redirect(base_url('pegawai'));
		}
	}

	public function delete($id)
	{
		$this->M_pegawai->delete($id);
		$this->session->set_flashdata('message', 'delete');
		redirect(base_url('pegawai'));
	}
}
