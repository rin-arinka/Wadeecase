<?php 

class M_landing extends CI_Model{

	function cek_login($u,$p){
		$ar = $this->db->query("SELECT * FROM reg WHERE nama='$u' AND password='$p'")->result_array();
		return $ar;
	}

}