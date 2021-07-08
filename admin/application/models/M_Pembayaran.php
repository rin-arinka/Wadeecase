<?php 

class M_Pembayaran extends CI_Model{

	function list(){
		$res = array();
		$ar = $this->db->query("SELECT * FROM pembayaran order by id_pembayaran asc;")->result_array();
		return $ar;
	}
}