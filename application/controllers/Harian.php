<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Harian extends CI_Controller
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
		$this->load->model(array('M_user', 'M_approval', 'M_registrasi', 'M_harian'));
	}

	public function index()
	{
		$data['harian'] = $this->M_harian->get();

		$this->load->view('harian/harian', $data);
	}


	public function cek($id)
	{
		$data['harian'] = $this->M_harian->get_by_id($id);
		$no_reg = $data['harian']->no_reg;
		$data['timeline'] = $this->M_harian->get_timeline($no_reg);
		$this->load->view('harian/cek_data', $data);
	}

	public function update()
	{
		$id = $this->input->post('id');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('no_hp', 'No Hp', 'required|trim');
		$this->form_validation->set_rules('no_reg', 'No Reg', 'required|trim');


		if ($this->form_validation->run() == false) {
			$response = [
				'status' => 500,
				'message' => validation_errors()
			];
			echo json_encode($response);
		} else {

			$data = [

				'nama'               => htmlspecialchars($this->input->post('nama', true)),
				'no_hp'              => htmlspecialchars($this->input->post('no_hp', true)),
				'id_pegawai'         => htmlspecialchars($this->input->post('id_pegawai', true)),
				'id_layanan'         => htmlspecialchars($this->input->post('id_layanan', true)),
				'no_reg'             => htmlspecialchars($this->input->post('no_reg', true)),
				'tanggal_registrasi' => htmlspecialchars($this->input->post('tanggal_registrasi', true)),
				'sts_app'            => '1',
				'keterangan'         => htmlspecialchars($this->input->post('keterangan', true)),
			];
			$datab = [

				'id_pegawai' => htmlspecialchars($this->input->post('id_pegawai', true)),
				'id_layanan' => htmlspecialchars($this->input->post('id_layanan', true)),
				'no_reg'     => htmlspecialchars($this->input->post('no_reg', true)),
				'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
				'time' => time(),
			];
			$this->M_approval->update($data, $id);
			$this->db->insert('tb_riwayat', $datab);

			if ($this->db->affected_rows() > 0) {
				$response = [
					'status'  => 200,
					'message' => 'Berhasil update data'
				];
				echo json_encode($response);
			} else {
				$response = [
					'status' => 500,
					'message' => 'Gagal update data'
				];
				echo json_encode($response);
			}
		}
	}

	public function selesai()
	{
		$id = $this->input->post('id');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('no_hp', 'No Hp', 'required|trim');
		$this->form_validation->set_rules('no_reg', 'No Reg', 'required|trim');


		if ($this->form_validation->run() == false) {
			$response = [
				'status' => 500,
				'message' => validation_errors()
			];
			echo json_encode($response);
		} else {

			$data = [

				'nama'               => htmlspecialchars($this->input->post('nama', true)),
				'no_hp'              => htmlspecialchars($this->input->post('no_hp', true)),
				'id_pegawai'         => htmlspecialchars($this->input->post('id_pegawai', true)),
				'id_layanan'         => htmlspecialchars($this->input->post('id_layanan', true)),
				'no_reg'             => htmlspecialchars($this->input->post('no_reg', true)),
				'tanggal_registrasi' => htmlspecialchars($this->input->post('tanggal_registrasi', true)),
				'sts_app'            => '2',
				'keterangan'         => 'Selesai',
			];
			$datab = [

				'id_pegawai' => htmlspecialchars($this->input->post('id_pegawai', true)),
				'id_layanan' => htmlspecialchars($this->input->post('id_layanan', true)),
				'no_reg'     => htmlspecialchars($this->input->post('no_reg', true)),
				'keterangan' => 'Selesai',
				'time' => time(),
			];
			$this->M_approval->update($data, $id);
			$this->db->insert('tb_riwayat', $datab);

			if ($this->db->affected_rows() > 0) {
				$response = [
					'status'  => 200,
					'message' => 'Berhasil simpan data'
				];
				echo json_encode($response);
			} else {
				$response = [
					'status' => 500,
					'message' => 'Gagal simpan data'
				];
				echo json_encode($response);
			}
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
