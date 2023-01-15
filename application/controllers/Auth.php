<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Auth extends CI_Controller {

	public function index()
	{

		if($this->session->userdata('email')){
			redirect('user');
		}
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','password','trim|required');

		if($this->form_validation->run() == false){

		$data['title']	= 'Login Page';		
		$this->load->view('auth/login');

		}else{
			//validasinya sukses
			$this->_login();

		}
				
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		//jika usernya ada
		if($user){

			// jika usernya aktif 
			if($user['is_active'] == 1){

				// cek password
				if(password_verify($password, $user['password'])){
					$data = [

						'email' => $user['email'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);	
						
					if($user['role_id'] == 1){
						redirect('admin');
					}else{
						redirect('user');
					}

				}else{
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					Password salah!
					</div>');
					redirect('auth');
				}

			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				 Email belum diaktivasi!
				</div>');
				redirect('auth');
			}

		}else{

			// user tidak ada
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Email belum terdaftar!</div>');
			redirect('auth');
		}
	}


	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				 Anda telah logout!
				</div>');
			redirect('auth');
	}

	public function blocked()
	{
		$this->load->view('auth/blocked');
	}

} // end auth php
