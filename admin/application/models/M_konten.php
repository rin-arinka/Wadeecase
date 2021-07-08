<?php 

class M_konten extends CI_Model{

	function tambah_konten($data){
		// $this->db->insert('tb_konten', $data);
		$this->db->insert('merk', $data);
		$insert_id = $this->db->insert_id();

   		return  $insert_id;
	}

	function list_konten(){
		$res = array();
		$ar = $this->db->query("SELECT *,'link' FROM merk order by id_merk asc;")->result_array();
		$i = 1;
		foreach ($ar as $key => $value) {

			$res[$i]['id_merk'] = $ar[$key]['id_merk'];
			$res[$i]['merk'] = $ar[$key]['merk'];
			$res[$i]['tentang_merk'] = $ar[$key]['tentang_merk'];
			$res[$i]['foto_merk'] = $ar[$key]['foto_merk'];
			$res[$i]['link'] = $this->format_uri($ar[$key]['merk']);
		$i++;
		}
		return $res;
	}

	function get_konten($id){
		$ar = $this->db->query("SELECT * FROM merk WHERE id_merk = '$id';")->result_array();
		$ar[0]['link'] = $this->format_uri($ar[0]['merk']);
		return $ar;
	}

	function edit_konten($id,$data)
	{
		$this->db->where('id_merk', $id);
		$this->db->update('merk',$data);
	}

	function hapus_konten($id){
		$this->db->where('id_merk', $id);
		$this->db->delete('merk');
	}


	function tambah_kategori($data){
		$this->db->insert('tb_kategori', $data);
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
?>