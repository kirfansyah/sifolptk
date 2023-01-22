<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
		$this->load->model(array('M_user', 'M_pegawai', 'M_layanan', 'M_harian'));
	}

	public function index()
	{
		$data['layanan'] = $this->M_layanan->get();
		$data['pegawai'] = $this->M_pegawai->get();
		$this->load->view('dashboard', $data);
	}

	public function tracking()
	{
		$no_reg = $this->input->post('no_regis');
		$timeline = $this->M_harian->get_timeline($no_reg);
		$cek_rating = $this->db->get_where('tb_rating', ['no_reg' => $no_reg]);
		if ($cek_rating->num_rows() > 0) {
			$ket = 'sudah';
		} else {
			$ket = 'belum';
		}
		if ($timeline) {
			$html = '';
			foreach ($timeline as $key => $timeline_row) {

				if ($key == key($timeline)) {
					$id_pegawai = $timeline_row->id_pegawai;
					$keterangan = $timeline_row->keterangan;
					$html .= '<li>
								<div class="timeline-icon bg-success">
									<i class="feather icon-check font-medium-2 align-middle"></i>
								</div>
								<div class="timeline-info">
									<p class="font-weight-bold  mb-0">' . $timeline_row->keterangan . '</p>
								</div>
								<small class="text-muted">' . get_time_ago($timeline_row->time) . ' </small>
							</li>';
				} else {
					$html .= '<li>
								<div class="timeline-icon bg-primary">
									<i class="feather icon-check font-medium-2 align-middle"></i>
								</div>
								<div class="timeline-info">
									<p class="font-weight-bold text-muted mb-0">' . $timeline_row->keterangan . '</p>
								</div>
								<small class="text-muted">' . get_time_ago($timeline_row->time) . ' </small>
							</li>';
				}
			}
			$response = [
				'status' => 200,
				'message' => 'Data tidak ditemukan!',
				'html' => $html,
				'id_pegawai' => $id_pegawai,
				'keterangan' => $keterangan,
				'ket' => $ket
			];
			echo json_encode($response);
		} else {
			$response = [
				'status' => 500,
				'message' => 'Data tidak ditemukan!'
			];
			echo json_encode($response);
		}
	}

	public function rating()
	{
		$id_pegawai = $this->input->post('id_pegawai');
		$rating     = $this->input->post('rating');
		$no_reg     = $this->input->post('no_reg');

		$data = [
			'id_pegawai' => $id_pegawai,
			'rating' => $rating,
			'no_reg' => $no_reg

		];

		$this->db->insert('tb_rating', $data);
		echo json_encode('halo');
	}
}
