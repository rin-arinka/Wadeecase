<?php

class Bayar extends CI_Controller {

	private $data = null;

	function __construct(){
		parent::__construct();

		$this->uri->segment('segment_number');

		$this->load->model('m_bayar');
		$this->load->model('m_gambar');
		$uploadPath = './admin/uploads';
		$config['upload_path'] = $uploadPath;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
	}


	function index(){

		$this->load->view('bayar.php');

	}

	function daftar(){
		$ket = 0;
		if($_FILES['uplot']['name'] != ''){
			$stat = $this->m_gambar->cek_gambar($_FILES["uplot"]);

			if($stat == 1){

				$files = $_FILES["uplot"];
				$direktori = preg_replace('/\s+/', '_', rand(0,100000).'_'.$files['name']);

				$_FILES['userFile']['name'] = $direktori;
				$_FILES['userFile']['type'] = $files['type'];
				$_FILES['userFile']['tmp_name'] = $files['tmp_name'];
				$_FILES['userFile']['error'] = $files['error'];
				$_FILES['userFile']['size'] = $files['size'];

				if ( $this->upload->do_upload('userFile')){

		                	// $data = array('upload_data' => $this->upload->data());

					$data = array(
						'id_pembayaran' => null,
						'kode_pembayaran' => $this->input->post('kodebayar'),
						'tanggal_bayar' => $this->input->post('tanggalbayar'),
						'bank_user' => $this->input->post('bankanda'),
						'norek_user' => $this->input->post('nomorrek'),
						'an_user' => $this->input->post('atasnama'),
						'bank_penerima' => $this->input->post('banklensaku'),
						'nomial' => $this->input->post('nominal'),
						'bukti' => $direktori
					);

					$id = $this->m_bayar->Bayar($data);
				}else{
					echo "<script>
					alert('Upload gambar gagal!');
					window.history.go(-1);
					</script>";
					$ket = 1;
				}
			}else{
				echo "<script>
				alert('Type gambar salah');
				window.history.go(-1);
				</script>";
				$ket = 1;
			}
		}

		if($ket == 0){
			echo "<script>
			alert('Pembayaran Berhasil terikirim, Silakan Menunggu Konfirmasi !');
			window.location.href='".site_url('history')."';
			</script>";
		}
	}



	// $data = array(
	//   'kode_pemesanan' => $_POST[$datak[$key]['kode_pemesanan']],
 //      'id_user' => $_SESSION['id'],
 //      'tanggal_bayar' => $_POST['tanggalbayar'],
 //      'bank_user' => $_POST['bankanda'],
 //      'norek_user' => $_POST['nomorrek'],
 //      'an_user' => $_POST['atasnama'],
 //      'bank_penerima' => $_POST['banklensaku'],
 //      'nomial' => $_POST['nominal']
	// );

	// $this->m_bayar->Bayar($data);

	// echo "<script>alert('Register berhasil !');window.location.href='".site_url('landing')."';</script>";
// }

}