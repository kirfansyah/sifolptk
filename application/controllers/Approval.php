<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Approval extends CI_Controller
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
		// is_logged_in();
		$this->load->model(array('M_user', 'M_approval'));
	}

	public function index()
	{
		$data['approval'] = $this->M_approval->get();
		$this->load->view('approval/approval', $data);
	}

	

	public function cek($id)
	{
		$data['approval'] = $this->M_approval->get_by_id($id);	
		$this->load->view('approval/cek_data', $data);
	}

	public function update()
	{
		$id = $this->input->post('id');
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('role', 'Role', 'required|trim');
		$this->form_validation->set_rules('status', 'Status', 'required|trim');


		if ($this->form_validation->run() == false) {
			$data['user'] = $this->M_user->get_by_id($id);
			$data['roles'] = $this->M_user->get_role();
			$data['status'] = [1 => 'Aktif', 2 => 'Non-Aktif'];
			return $this->load->view('user/edit_user', $data);
		} else {

			$email = $this->input->post('email', true);
			$data = [

				'name'         => htmlspecialchars($this->input->post('name', true)),
				'password'     => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id'      => htmlspecialchars($this->input->post('role', true)),
				'is_active'    => htmlspecialchars($this->input->post('status', true))

			];
			$this->M_user->update($data, $id);
			$this->session->set_flashdata('message', 'update');
			redirect(base_url('user'));
		}
	} 

	public function delete($id)
	{
		// $id = $this->input->post('id');
		$this->M_user->delete($id);
		$this->session->set_flashdata('message', 'delete');
		redirect(base_url('user'));
	}
}
