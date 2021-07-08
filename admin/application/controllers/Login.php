<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index(){
		$this->load->view('v_login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5(sha1($password))
			);
		$data_user = $this->m_login->cek_login("tb_admin",$where);

		if($data_user){

			foreach ($data_user as $row) {
				$id = $row->id;
			    $nama = $row->nama;
			}

			$data_session = array(
				'id_admin' => $id,
				'nama_admin' => $nama,
				'status_admin' => "login"
				);

			$this->session->set_userdata($data_session);

			echo "<script>alert('Selamat datang ".$nama." !');document.location = '".site_url("main")."'</script>";
     
			// redirect(base_url("main"));

		}else{
			echo "<script>alert('Username atau password salah !');document.location = '".site_url("login")."'</script>";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}