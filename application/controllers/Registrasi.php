<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
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
		$this->load->model(array('M_user', 'M_pegawai', 'M_registrasi'));
	}


	public function add()
	{

		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('no_hp', 'No. Hp', 'required|trim|min_length[11]|max_length[13]|numeric');
		$this->form_validation->set_rules('layanan', 'Layanan', 'required|trim');
		$this->form_validation->set_rules('pegawai', 'Pegawai', 'required|trim');
		$get_noreg = $this->M_registrasi->get_max_id();
		foreach ($get_noreg as $gn) {
			$noreg = $gn->id;
		}

		$insert_id = $this->db->insert_id();

		$noreg = 'PTK' . $noreg . date('dmY');

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
				'id_pegawai'         => htmlspecialchars($this->input->post('pegawai', true)),
				'id_layanan'         => htmlspecialchars($this->input->post('layanan', true)),
				'no_reg'             => $noreg,
				'tanggal_registrasi' => date('Y-m-d'),
				'sts_app'            => '0',
				'keterangan'         => 'Menunggu approval pimpinan',
			];

			$datab = [

				'id_pegawai' => htmlspecialchars($this->input->post('pegawai', true)),
				'id_layanan' => htmlspecialchars($this->input->post('layanan', true)),
				'no_reg'     => $noreg,
				'keterangan' => 'Menunggu approval pimpinan',
				'time' => time(),
			];
			$this->db->insert('tb_riwayat', $datab);
			$this->db->insert('tb_registrasi', $data);
			if ($this->db->affected_rows() > 0) {
				$response = [
					'status'  => 200,
					'message' => 'Berhasil menyimpan data',
					'noreg'   => $noreg
				];
				echo json_encode($response);
			} else {
				$response = [
					'status' => 500,
					'message' => 'Gagal menyimpan data'
				];
				echo json_encode($response);
			}
		}
	}
}
