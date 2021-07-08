<?php

class dashboard extends CI_Controller {

	private $data = null;

	function __construct(){
		parent::__construct();

		$this->uri->segment('segment_number');

		$this->load->model('m_dashboard');
	}

	function index(){

		$this->data['data'] = $this->m_dashboard->get_data_merk();

		$this->load->view('dashboard.php',$this->data);
	}


}