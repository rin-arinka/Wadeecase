 <?php 

class M_pemesanan extends CI_Model{

	function list(){
		$res = array();
		$ar = $this->db->query("SELECT * FROM pemesanan order by kode_pemesanan asc;")->result_array();
		return $ar;
	}

	function edit_konten($id,$data)
	{
		$this->db->where('kode_pemesanan', $id);
		$this->db->update('pemesanan',$data);
	}
	
	function get_konten($id){
		$ar = $this->db->query("SELECT * FROM pemesanan WHERE kode_pemesanan = '$id';")->result_array();
		$ar[0]['link'] = $this->format_uri($ar[0]['resi']);
		return $ar;
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