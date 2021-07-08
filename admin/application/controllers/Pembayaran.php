<?php 
 
class Pembayaran extends CI_Controller{

	private $data = null;

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status_admin') != "login"){
			redirect(site_url("login"));
		}

		$this->load->model('m_main');
		// $this->data['sidebar'] = $this->m_main->get_konten_sidebar();

		$this->data['nama'] = $this->session->userdata('nama_admin');
		$this->data['id'] = $this->session->userdata('id');
		$this->load->model('m_pembayaran');
	}

	function index(){

		$this->	data['list_konten'] = $this->m_pembayaran->list();
		$this->load->view('v_header.php',$this->data);
		$this->load->view('v_sidebar.php',$this->data);
		$this->load->view('pembayaran/v_pembayaran.php');
		$this->load->view('v_footer.php');
	}
}