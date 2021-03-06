<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class F_login extends CI_Controller {

	public function login()
	{
		check_already_login();
    	$data['titlebar'] = 'Login Trusur';
		$this->load->view('frontend/login/login_form', $data);
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($post['login'])) {
			$query = $this->b_users_m->login($post);
			if($query->num_rows() > 0) {
				$row = $query->row();
				
				if (password_verify($post['usr_password'], $row->usr_password)) {
				$params = array(
					'userid' 	=> $row->usr_id
				);
				$this->session->set_userdata($params);

				echo "<script>
					alert('Selamat, Anda berhasil login');
					window.location='".site_url()."';
					</script>";

				}else{
					echo "<script>
					alert('Password Salah !!');
					window.location='".site_url('login')."';
					</script>";
				}
			}else{
				echo "<script>
					alert('Username Tidak Ada !!');
					window.location='".site_url('login')."';
					</script>";
			}
		}
	}

	public function logout()
	{
		$params = array('userid', 'level');
		$this->session->unset_userdata($params);
		redirect('login');
	}
}
