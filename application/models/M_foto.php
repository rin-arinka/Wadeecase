<?php 

class M_foto extends CI_Model{	


  function Foto($data){
   $this->db->insert('pemesanan', $data);
		$insert_id = $this->db->insert_id();

   		return  $insert_id;
  }
	function cek_foto($files){
		$stat = 1;
		$allowed =  array('gif','png' ,'jpg','jpeg','PNG','JPG','JPEG','GIF');

		// $filesCount = count($files['name']);
		// 	for($i = 0; $i < $filesCount; $i++){
				$ext = pathinfo($files['name'], PATHINFO_EXTENSION);
				if(!in_array($ext,$allowed) ) {
				    $stat = 0;
				}
			// }
		return $stat;
	}

	function tambah_link($kat,$id,$author,$link){
		$data_upload = array(
							'id' => null,
							'nama_file' => $link,
							'tipe_file' => '',
							'ukuran' => '',
							'direktori' => $link,
							'tanggal' => date('Y-m-d'),
							'author' => $author,
							'kat' => $kat,
							'kat_id' => $id,
							'status' => '2'
						);
		$this->db->insert('tb_foto', $data_upload);
	}

	function tambah_foto($kat,$id,$author,$files){		
		// $this->db->insert('tb_gambar', $data);
			foreach ($files['name'] as $key => $value) {
				// echo $files['name'][$i];
					$direktori = rand(0,100000).'_'.$files['name'][$key];

					$_FILES['userFile']['name'] = $direktori;
	                $_FILES['userFile']['type'] = $files['type'][$key];
	                $_FILES['userFile']['tmp_name'] = $files['tmp_name'][$key];
	                $_FILES['userFile']['error'] = $files['error'][$key];
	                $_FILES['userFile']['size'] = $files['size'][$key];

					if ( ! $this->upload->do_upload('userFile')){
						// $error = array('error' => $this->upload->display_errors());
						// print_r($error);
						// $this->load->view('v_upload', $error);
						$data_upload = array(
							'id' => null,
							'nama_file' => '',
							'tipe_file' => '',
							'ukuran' => '',
							'direktori' => '',
							'tanggal' => date('Y-m-d'),
							'author' => $author,
							'kat' => $kat,
							'kat_id' => $id,
							'status' => '1'
						);
						$this->db->insert('tb_foto', $data_upload);

					}else{
						$data = array('upload_data' => $this->upload->data());
						// print_r($data);

						$direktori1 = '/uploads/'.$direktori;

						$data_upload = array(
							'id' => null,
							'nama_file' => $direktori,
							'tipe_file' => $files['type'][$key],
							'ukuran' => $files['size'][$key],
							'direktori' => $direktori1,
							'tanggal' => date('Y-m-d'),
							'author' => $author,
							'kat' => $kat,
							'kat_id' => $id,
							'status' => '1'
						);						
						// print_r($data_upload);
						$this->db->insert('tb_foto', $data_upload);
					}
				
			}
	}

	function tambah_foto_single($kat,$id,$author,$files){
		$direktori = rand(0,100000).'_'.$files['name'];

					$_FILES['userFile']['name'] = $direktori;
	                $_FILES['userFile']['type'] = $files['type'];
	                $_FILES['userFile']['tmp_name'] = $files['tmp_name'];
	                $_FILES['userFile']['error'] = $files['error'];
	                $_FILES['userFile']['size'] = $files['size'];

					if ( ! $this->upload->do_upload('userFile')){
						$error = array('error' => $this->upload->display_errors());
						print_r($error);
						// $this->load->view('v_upload', $error);
						
					}else{
						$data = array('upload_data' => $this->upload->data());
						// print_r($data);

						$direktori1 = '/uploads/'.$direktori;

						$data_upload = array(
							'id' => null,
							'nama_file' => $direktori,
							'tipe_file' => $files['type'],
							'ukuran' => $files['size'],
							'direktori' => $direktori1,
							'tanggal' => date('Y-m-d'),
							'author' => $author,
							'kat' => $kat,
							'kat_id' => $id,
							'status' => '1'
						);						
						// print_r($data_upload);
						$this->db->insert('tb_foto', $data_upload);
					}
	}

	function getAllFoto(){
		$res = array();
		$ar = $this->db->query("SELECT * FROM tb_foto;")->result_array();
		$i = 1;
		foreach ($ar as $key => $value) {
			$pau = $ar[$key]['author'];
			$au = $this->db->query("SELECT nama FROM tb_foto where nama = '$pau';")->result_array();
			$author = $au[0]['nama'];

			$res[$i]['id'] = $ar[$key]['id'];
			$res[$i]['nama_file'] = $ar[$key]['nama_file'];
			$res[$i]['tipe_file'] = $ar[$key]['tipe_file'];
			$res[$i]['ukuran'] = $ar[$key]['ukuran'];
			$res[$i]['direktori'] = $ar[$key]['direktori'];
			$res[$i]['tanggal'] = $ar[$key]['tanggal'];
			$res[$key]['kat'] = $ar[$key]['kat'];
			$res[$key]['kat_id'] = $ar[$key]['kat_id'];
			$res[$i]['status'] = $ar[$key]['status'];

			// array_push($res, $ar[$key]['id'],$ar[$key]['parent'],$ar[$key]['judul'],$ar[$key]['isi'],$ar[$key]['tanggal'],$author);
		$i++;
		}
		return $res;
	}

	function getFoto($id){
		$res = array();
		$ar = $this->db->query("SELECT * FROM tb_foto WHERE kat_id = '$id';")->result_array();
		$i = 1;
		foreach ($ar as $key => $value) {

		$pau = $ar[$key]['author'];
		$au = $this->db->query("SELECT nama FROM tb_admin where nama = '$pau';")->result_array();
		$author = $au[0]['nama'];

			$res[$key]['id'] = $ar[$key]['id'];
			$res[$key]['nama_file'] = $ar[$key]['nama_file'];
			$res[$key]['tipe_file'] = $ar[$key]['tipe_file'];
			$res[$key]['ukuran'] = $ar[$key]['ukuran'];

			if($ar[$key]['status'] == 1){
				if(file_exists('./'.$ar[$key]['direktori'])){
					$res[$key]['direktori'] = base_url($ar[$key]['direktori']);
				}else{
					$res[$key]['direktori'] = base_url('assets/images/no-image-available.jpg');
				}
			}else{
				$res[$key]['direktori'] = $ar[$key]['direktori'];
			}
			$res[$key]['tanggal'] = $ar[$key]['tanggal'];
			$res[$key]['author'] = $author;
			$res[$key]['kat'] = $ar[$key]['kat'];
			$res[$key]['kat_id'] = $ar[$key]['kat_id'];
			$res[$key]['status'] = $ar[$key]['status'];

			$i++;
		}
		return $res;
	}

	function hapusLink($id){
		$this->db->where('id', $id);
		$this->db->delete('tb_foto');
	}

	function hapusFoto($id){
		$datafoto = $this->db->query("SELECT direktori FROM tb_foto WHERE id = '$id'")->result_array();
		// echo base_url($datagambar[0]['direktori']);
		if(file_exists('./'.$datafoto[0]['direktori'])) {
			     unlink('./'.$datafoto[0]['direktori']);
		}
		$this->db->where('id', $id);
		$this->db->delete('tb_foto');
	}
}