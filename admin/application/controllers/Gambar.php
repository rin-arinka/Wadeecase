<?php 

class Gambar extends CI_Controller{

	private $data = null;

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status_admin') != "login"){
			redirect(site_url("login"));
		}

		$this->data['nama'] = $this->session->userdata('nama_admin');
		$this->data['id'] = $this->session->userdata('id');
		$this->load->model('m_gambar');

		$uploadPath = './uploads';
        $config['upload_path'] = $uploadPath;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		$this->load->helper("file");

	}

	function hapus(){
		$id = $this->uri->segment(4);
		$type = $this->uri->segment(3);

		if($type == 'link'){
			$this->m_gambar->hapusLink($id);
		}else if($type == 'upload'){
			$this->m_gambar->hapusGambar($id);
		}
		echo "<script>alert('Gambar berhasil dihapus !');window.history.go(-1);</script>";

	}

	function edit_gambar(){
		$author = $this->session->userdata('id');
		

		$id_gambar = $this->input->post('id_gambar');
		$id_kategori = $this->input->post('id_kategori');
		$kat = $this->input->post('kat');
		$type = $this->input->post('type');
		$url = $this->input->post('data_url');

		if($type == 'upload'){
			$this->m_gambar->hapusGambar($id_gambar);
			$g_id = $this->m_gambar->tambah_gambar_single($kat,$id_kategori,$author,$_FILES["file"]);
		}else if($type == 'link'){
			$this->m_gambar->hapusLink($id_gambar);
			$g_id = $this->m_gambar->tambah_link($kat,$id_kategori,$author,$_POST['edit_link']);
		}

		echo "<script>alert('Gambar berhasil diedit !');document.location='".site_url($url)."';</script>";
	}
}
?>