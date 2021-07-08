<?php 

class Main extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status_admin') != "login"){
			redirect(site_url("login"));
		}

		$this->load->model('m_main');

	}

	function index(){

		$this->data['nama'] = $this->session->userdata('nama_admin');
		$this->load->view('v_header.php',$this->data);
		$this->load->view('v_sidebar.php',$this->data);
		$this->load->view('v_main.php',$this->data);
		$this->load->view('v_footer.php',$this->data);
	}

	function logout(){
	$this->session->sess_destroy();
	redirect(site_url('login'));
}
}