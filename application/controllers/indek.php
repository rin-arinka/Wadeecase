<?php

class indek extends CI_Controller {

	private $data = null;

	function __construct(){
		parent::__construct();

		$this->uri->segment('segment_number');

		
	}

	function index(){

		$this->load->view('index.html',$this->data);
	}


}