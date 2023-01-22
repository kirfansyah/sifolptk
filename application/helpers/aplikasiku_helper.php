<?php

function is_logged_in()
{
	$ci = get_instance();
	if (!$ci->session->userdata('email')) {
		redirect('auth');
	} else {

		$role_id = $ci->session->userdata('role_id');
		$menu = $ci->uri->segment(1);

		switch ($menu) {
			case 'pegawai':
				$menu = 'Master';
				break;
			case 'approval':
				$menu = 'Approval';
				break;
			case 'harian':
				$menu = 'Data Harian';
				break;
			case 'layanan':
				$menu = 'Master';
				break;
			case 'user':
				$menu = 'Master';
				break;

			default:
				$menu = '';
		}


		$queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
		$menu_id = $queryMenu['id'];
		// print_r($menu_id);
		// die;
		$userAccess = $ci->db->get_where('user_access_menu', [
			'role_id' => $role_id,
			'menu_id' => $menu_id
		]);

		if ($userAccess->num_rows() < 1) {
			redirect('auth/blocked');
		}
	}
}

function check_access($role_id, $menu_id)
{
	$ci = get_instance();

	$ci->db->where('role_id', $role_id);
	$ci->db->where('menu_id', $menu_id);
	$result = $ci->db->get('user_access_menu');
	if ($result->num_rows() > 0) {
		return "checked='checked'";
	}
}

function get_time_ago($time)
{
	$time_difference = time() - $time;

	if ($time_difference < 1) {
		return 'less than 1 second ago';
	}
	$condition = array(
		12 * 30 * 24 * 60 * 60 =>  'tahun',
		30 * 24 * 60 * 60       =>  'bulan',
		24 * 60 * 60            =>  'hari',
		60 * 60                 =>  'jam',
		60                      =>  'menit',
		1                       =>  'detik'
	);

	foreach ($condition as $secs => $str) {
		$d = $time_difference / $secs;

		if ($d >= 1) {
			$t = round($d);
			return  $t . ' ' . $str . ($t > 1 ? '' : '') . ' lalu';
		}
	}
}
