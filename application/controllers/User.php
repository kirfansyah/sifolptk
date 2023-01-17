<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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
		$this->load->model(array('M_user'));
	}

	public function index()
	{
		$data['users'] = $this->M_user->get();
		$this->load->view('user/user', $data);
	}

	public function add_user()
	{
		$this->load->view('user/add_user');
	}

	public function add()
	{
		// if ($this->session->userdata('email')) {
		// 	redirect('user');
		// }

		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('role', 'Role', 'required|trim');
		$this->form_validation->set_rules('status', 'Status', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'Email sudah pernah terdaftar!'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'Password dont match!',
			'min_length' => 'Password terlalu pendek!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false) {
			return $this->load->view('user/add_user');
		} else {

			$email = $this->input->post('email', true);
			$data = [

				'name'         => htmlspecialchars($this->input->post('name', true)),
				'email'        => htmlspecialchars($email),
				'image'        => 'default.jpg',
				'password'     => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id'      => htmlspecialchars($this->input->post('role', true)),
				'is_active'    => htmlspecialchars($this->input->post('status', true)),
				'date_created' => time()
			];
			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', 'add');
			redirect(base_url('user'));
		}
	}

	public function edit($id)
	{
		$data['user'] = $this->M_user->get_by_id($id);
		$data['roles'] = $this->M_user->get_role();
		$data['status'] = [1 => 'Aktif', 2 => 'Non-Aktif'];

		$this->load->view('user/edit_user', $data);
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
