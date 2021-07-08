<?php

class Register extends CI_Controller {

	private $data = null;

	function __construct(){
		parent::__construct();

		$this->uri->segment('segment_number');

		$this->load->model('m_menu');
	}


	function index(){

	$this->load->view('reg.php');

	}

	function daftar(){
	$data = array(
		'nama' => $_POST['user'],
		'password' => $_POST['pw'],
		'nomorhp' => $_POST['hp'],
		'email' => $_POST['mail']
	);

	$this->m_menu->Register($data);

	echo "<script>alert('Register berhasil !');window.location.href='".site_url('landing')."';</script>";
}

}