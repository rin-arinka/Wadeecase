<?php

class History extends CI_Controller {

  private $data = null;

  function __construct(){
    parent::__construct();

    $this->uri->segment('segment_number');

    $this->load->model('m_menu');
  }

  function index(){
  $ids=$_SESSION['id']; 
    $this->data['datak'] = $this->m_menu->get_data_pemesanan($ids);
    $this->load->view('history.php',$this->data);
  }

}