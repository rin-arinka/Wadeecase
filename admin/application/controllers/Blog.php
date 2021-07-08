<?php 

class Blog extends CI_Controller{

	private $data = null;

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status_admin') != "login"){
			redirect(site_url("login"));
		}

		$this->load->model('m_main');
		// $this->data['sidebar'] = $this->m_main->get_konten_sidebar();

		$this->data['nama'] = $this->session->userdata('nama_admin');
		$this->data['id'] = $this->session->userdata('id');
		$this->load->model('m_konten');
		$this->load->model('m_gambar');
		// $this->load->model('m_tags');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->uri->segment('segment_number');

		$uploadPath = './uploads';
        $config['upload_path'] = $uploadPath;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
	}

	function index(){

		$this->data['list_konten'] = $this->m_konten->list_konten();
		$this->load->view('v_header.php',$this->data);
		$this->load->view('v_sidebar.php',$this->data);
		$this->load->view('konten/v_konten.php');
		$this->load->view('v_footer.php');
	}

	function tambah(){

		$this->load->view('v_header.php',$this->data);
		$this->load->view('v_sidebar.php',$this->data);
		$this->load->view('konten/v_tambah_konten.php');
		$this->load->view('v_footer.php');
	}

	function action_tambah(){

		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_message('required', '%s tidak boleh kosong !');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('v_header.php',$this->data);
			$this->load->view('v_sidebar.php',$this->data);
			$this->load->view('konten/v_tambah_konten.php');
			$this->load->view('v_footer.php');
		}else{
			$ket = 0;
				if($_FILES['uplot']['name'] != ''){
					$stat = $this->m_gambar->cek_gambar($_FILES["uplot"]);

					if($stat == 1){

						$files = $_FILES["uplot"];

						$direktori = rand(0,100000).'_'.$files['name'];

						$_FILES['userFile']['name'] = $direktori;
		                $_FILES['userFile']['type'] = $files['type'];
		                $_FILES['userFile']['tmp_name'] = $files['tmp_name'];
		                $_FILES['userFile']['error'] = $files['error'];
		                $_FILES['userFile']['size'] = $files['size'];

		                if ( $this->upload->do_upload('userFile')){

		                	// $data = array('upload_data' => $this->upload->data());

		                	$data = array(
								'id_merk' => null,
								'merk' => $this->input->post('judul'),
								'tentang_merk' => $this->input->post('isi'),
								'foto_merk' => $direktori,
								'author' => $this->session->userdata('nama_admin')
							);

		                	$id = $this->m_konten->tambah_konten($data);
		                }else{
		                	echo "<script>
								alert('Upload gambar gagal!');
								window.history.go(-1);
								</script>";
							$ket = 1;
		                }
					}else{
						// print_r($_FILES["uplot"]);
						echo "<script>
								alert('Type gambar salah');
								window.history.go(-1);
								</script>";
						$ket = 1;
					}
			}

			if($ket == 0){
				echo "<script>
					alert('Konten berhasil ditambah !');
					window.location.href='".site_url('blog')."';
					</script>";
			}
		}
	}

	function edit(){
		$id = $this->uri->segment(3);

		$this->	data['konten'] = $this->m_konten->get_konten($id);
		$this-> data['konten'] = $this->data['konten'] [0];
		$this->load->view('v_header.php',$this->data);
		$this->load->view('v_sidebar.php',$this->data);
		$this->load->view('konten/v_edit_konten.php');
		$this->load->view('v_footer.php');
	}

	function action_edit(){
		$id = $this->uri->segment(3);
		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_message('required', '%s tidak boleh kosong !');

		if ($this->form_validation->run() == FALSE) {
				$id = $this->uri->segment(3);

				$this->	data['konten'] = $this->m_konten->get_konten($id);
				$this-> data['konten'] = $this->data['konten'] [0];

				$this->load->view('v_header.php',$this->data);
				$this->load->view('v_sidebar.php',$this->data);
				$this->load->view('konten/v_edit_konten.php');
				$this->load->view('v_footer.php');
		}else{
				$con = 0;

				if($_FILES['uplot']['name'] != ''){
					$stat = $this->m_gambar->cek_gambar($_FILES["uplot"]);

					if($stat == 1){

						$datas = $this->m_konten->get_konten($id);
						$datas = $datas[0];

						if(file_exists('./'.'uploads/'.$datas['foto_merk'])) {
							     unlink('./'.'uploads/'.$datas['foto_merk']);
						}

						$files = $_FILES["uplot"];
						$direktori = rand(0,100000).'_'.$files['name'];

						$_FILES['userFile']['name'] = $direktori;
		                $_FILES['userFile']['type'] = $files['type'];
		                $_FILES['userFile']['tmp_name'] = $files['tmp_name'];
		                $_FILES['userFile']['error'] = $files['error'];
		                $_FILES['userFile']['size'] = $files['size'];

		                if ( $this->upload->do_upload('userFile')){

		                	// $data = array('upload_data' => $this->upload->data());

		                	$data = array(
								'merk' => $this->input->post('judul'),
								'tentang_merk' => $this->input->post('isi'),
								'foto_merk' => $direktori,
								'author' => $this->session->userdata('')
							);

		                	$this->m_konten->edit_konten($id,$data);
		                }else{
		                	echo "<script>
								alert('Upload gambar gagal!');
								window.history.go(-1);
								</script>";
							$ket = 1;
		                }
					}else{
						// print_r($_FILES["uplot"]);
						echo "<script>
								alert('Type gambar salah');
								window.history.go(-1);
								</script>";
						$ket = 1;
					}
				}else{
					$data = array(
								'merk' => $this->input->post('judul'),
								'tentang_merk' => $this->input->post('isi'),
								'author' => $this->session->userdata('nama_admin')
					);
					$this->m_konten->edit_konten($id,$data);
				}

				if($con == 0){
					
					echo "<script>
						alert('Konten berhasil diedit !');
						window.location.href='".site_url('blog')."';
						</script>";
				}
		}
	}

	function hapus(){
		$id =$this->uri->segment(3);

		$data = $this->m_konten->get_konten($id);

		if(file_exists('./'.'/uploads/'.$data[0]['foto_merk'])) {
			     unlink('./'.'/uploads/'.$data[0]['foto_merk']);
		}

		$this->m_konten->hapus_konten($id);
		echo "<script>
						alert('Konten berhasil dihapus !');
						window.location.href='".site_url('blog')."';
						</script>";
	}
}

?>