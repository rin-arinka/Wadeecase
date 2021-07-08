<?php

class Landing extends CI_Controller {

	private $data = null;

	function __construct(){
		parent::__construct();

		$this->uri->segment('segment_number');

		$this->load->model('m_landing');
	}

	function index(){
		$this->load->view('landing.php');
	}

	function login()
	{
		$data = array(
			'nama' => $_POST['u'],
			'password' => $_POST['p'],
		);

		$ck = $this->m_landing->cek_login($_POST['u'],$_POST['p']);
		if(!empty($ck)){
			$data_session = array(
				'id' => $ck[0]['id_user'],
				'nama' => $_POST['u']
				);
			$this->session->set_userdata($data_session);
			$_SESSION['auth'] = $ck[0];
			echo "<script>alert('Selamat datang, ".$ck[0]['nama']." !');window.location.href='".site_url('menu')."';</script>";
		}else{
			echo "<script>alert('username atau password salah !');window.location.href='".site_url('landing')."';</script>";
		}

	}

		function logout(){
	$this->session->sess_destroy();
	redirect(site_url('landing'));
}
}


