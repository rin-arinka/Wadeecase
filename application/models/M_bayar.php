<?php


class M_bayar extends CI_Model {

   function __construct()
  {
    parent::__construct();
  }

    function Bayar($data){
   $this->db->insert('pembayaran', $data);
		$insert_id = $this->db->insert_id();

   		return  $insert_id;
  }

  
}
