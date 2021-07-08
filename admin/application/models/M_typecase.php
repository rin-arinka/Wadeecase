<?php 

class M_typecase extends CI_Model{


	function tambah_konten($data){
		// $this->db->insert('tb_konten', $data);
		$this->db->insert('typecase', $data);
		$insert_id = $this->db->insert_id();

   		return  $insert_id;
	}

	function list_konten(){
		$res = array();
		$ar = $this->db->query("SELECT * FROM typecase order by id_typecase asc;")->result_array();
		return $ar;
	}

	function get_konten($id){
		$ar = $this->db->query("SELECT * FROM typecase WHERE id_typecase = '$id';")->result_array();
		$ar[0]['link'] = $this->format_uri($ar[0]['nama']);
		return $ar;
	}

	function edit_konten($id,$data)
	{
		$this->db->where('id_typecase', $id);
		$this->db->update('typecase',$data);
	}

	function hapus_konten($id){
		$this->db->where('id_typecase', $id);
		$this->db->delete('typecase');
	}

	function format_uri( $string, $separator = '-' )
	{
	    $accents_regex = '~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i';
	    $special_cases = array( '&' => 'and', "'" => '');
	    $string = mb_strtolower( trim( $string ), 'UTF-8' );
	    $string = str_replace( array_keys($special_cases), array_values( $special_cases), $string );
	    $string = preg_replace( $accents_regex, '$1', htmlentities( $string, ENT_QUOTES, 'UTF-8' ) );
	    $string = preg_replace("/[^a-z0-9]/u", "$separator", $string);
	    $string = preg_replace("/[$separator]+/u", "$separator", $string);
	    return $string;
	}

}