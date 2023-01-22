<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
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
		$this->load->model(array('M_user', 'M_pegawai', 'M_layanan'));
	}

	public function index()
	{
		$data['layanan'] = $this->M_layanan->get();
		$this->load->view('layanan/layanan', $data);
	}

	public function add_layanan()
	{
		$this->load->view('layanan/add_layanan');
	}

	public function add()
	{

		$this->form_validation->set_rules('layanan', 'Layanan', 'required|trim');

		if ($this->form_validation->run() == false) {
			return $this->load->view('layanan/add_layanan');
		} else {
			$data = [

				'layanan'         => htmlspecialchars($this->input->post('layanan', true))
			];
			$this->db->insert('tb_layanan', $data);
			$this->session->set_flashdata('message', 'add');
			redirect(base_url('layanan'));
		}
	}

	public function edit($id)
	{
		$data['layanan'] = $this->M_layanan->get_by_id($id);
		$this->load->view('layanan/edit_layanan', $data);
	}

	public function update()
	{
		$id = $this->input->post('id');
		$this->form_validation->set_rules('layanan', 'Layanan', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['layanan'] = $this->M_layanan->get_by_id($id);
			return $this->load->view('layanan/edit_layanan', $data);
		} else {

			$data = [

				'layanan'         => htmlspecialchars($this->input->post('layanan', true))
			];
			$this->M_layanan->update($data, $id);
			$this->session->set_flashdata('message', 'update');
			redirect(base_url('layanan'));
		}
	}

	public function delete($id)
	{
		$this->M_layanan->delete($id);
		$this->session->set_flashdata('message', 'delete');
		redirect(base_url('layanan'));
	}
}
