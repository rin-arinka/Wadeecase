<?php 

class M_menu extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}




	function get_data_merk(){
		$ar = $this->db->query("select * from merk")->result_array();;
		return $ar;
	}

	function get_detail_merk($id){
		$ar = $this->db->query("select * from merk where id_merk = '$id'")->result_array();
		return $ar;
	}

	function Pesan($data){
		
		$this->db->insert('pemesanan', $data);
		$insert_id = $this->db->insert_id();

	}

	function Register($data){
		$this->db->insert('reg', $data);
		// $insert_id3 = $this->db->insert_id();
	}

	function Bayar($data){
		$this->db->insert('pembayaran', $data);
		// $insert_id3 = $this->db->insert_id();
	}

	function get_data_typecase(){
		$as = $this->db->query("select * from typecase")->result_array();
		return $as;
	}

	function get_data_pemesanan($ids){
				// $ids = $_POST['ids'];
		$ab = $this->db->query("select kode_pembayaran, nama_pemesan, nama,alamat, tanggal_pemesanan, jasa, merk, typehp, total_harga, foto , status_pemesanan from pemesanan where id_user = '$ids'")->result_array($ids);
		return $ab;
	}
// select nama_pemesan, nama_fotografer, tanggal_pemesanan, paket_foto, jam_foto, lokasi_pertemuan, total_harga from pemesanan
// 	function get_detail_pemesanan($idp){
// 		$ar = $this->db->query("select nama_pemesan, nama_fotografer, tanggal_pemesanan, paket_foto, jam_foto, lokasi_pertemuan, total_harga from pemesanan where id_user = '$idp'")->result_array();
// 		return $ar;
// 	}


}