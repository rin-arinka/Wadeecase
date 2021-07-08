<?php

class Menu extends CI_Controller {

	private $data = null;

	function __construct(){
		parent::__construct();

		$this->uri->segment('segment_number');

		$this->load->model('m_menu');
		$this->load->model('m_foto');
		$uploadPath = './admin/uploads';
		$config['upload_path'] = $uploadPath;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
	}

	function index(){

		$this->data['data'] = $this->m_menu->get_data_merk();

		$this->load->view('menu.php',$this->data);
	}
 
	function merk(){
		$id = $this->uri->segment(3);

		$this->data['data'] = $this->m_menu->get_detail_merk($id);
		$this->data['data'] = $this->data['data'][0];

		$this->data['dataf'] = $this->m_menu->get_data_typecase();
		// $this->data['dataf'] = $this->data['dataf'][0];
		// print_r($this->data['dataf']);

		$this->load->view('merk.php',$this->data);
	}


	function transaksi(){
		$this->data['nama'] = str_replace('%20',' ',$this->uri->segment(3));
		$this->data['merk'] = str_replace('%20',' ',$this->uri->segment(3));

		$this->load->view('transaksi.php',$this->data);
	}

	function pesan(){
		$data = array(
			'id_user' =>$_POST['is'],
			'kode_pembayaran' =>$_POST['kp'],
			'nama_pemesan' => $_POST['n'],
			'alamat' => $_POST['alamat'],
			'nama' => $_POST['f'],
			'foto' => $_POST['uplot'],
			'merk' => $_POST['lf'],
			'tanggal_pemesanan' => $_POST['tgl'],
			'jasa' => $_POST['jasa'],
			'typehp' => $_POST['typehp'],
			'status_pemesanan' => "Belum Terbayar",

		);

		$this->m_menu->pesan($data);
		echo "<script>alert('pesan berhasil !');window.location.href='".site_url('history')."';</script>";

	}

	function daftar(){
		$ket = 0;
		if($_FILES['uplot']['name'] != ''){
			$stat = $this->m_foto->cek_foto($_FILES["uplot"]);

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
						'id_pemesanan' => null,
						'kode_pemesanan' => $this->input->post('kodepesan'),
						'nama' => $this->input->post('nama'),
						'alamat' => $this->input->post('alamat'),
						'typecase' => $this->input->post('typecase'),
						'tanggal_pemesanan' => $this->input->post('tanggalpemesanan'),
						'jasa' => $this->input->post('jasa'),
						'merk' => $this->input->post('merk'),
						'typehp' => $this->input->post('typehp'),
						'harga' => $this->input->post('harga'),
						'foto' => $direktori
					);

					$id = $this->m_menu->Pesan($data);
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

}