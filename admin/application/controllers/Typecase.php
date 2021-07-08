<?php 

class Typecase extends CI_Controller{

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
		$this->load->model('m_typecase');
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

		$this->	data['list_konten'] = $this->m_typecase->list_konten();
		$this->load->view('v_header.php',$this->data);
		$this->load->view('v_sidebar.php',$this->data);
		$this->load->view('typecase/v_typecase.php');
		$this->load->view('v_footer.php');
	}

	function tambah(){

		$this->load->view('v_header.php',$this->data);
		$this->load->view('v_sidebar.php',$this->data);
		$this->load->view('typecase/v_tambah_typecase.php');
		$this->load->view('v_footer.php');
	}

	function action_tambah(){

		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_message('required', '%s tidak boleh kosong !');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('v_header.php',$this->data);
			$this->load->view('v_sidebar.php',$this->data);
			$this->load->view('typecase/v_typecase.php');
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
							'id_typecase' => null,
							'nama' => $this->input->post('nama'),
							'foto' => $direktori
						);

						$id = $this->m_typecase->tambah_konten($data);
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
				alert('Typecase berhasil ditambah !');
				window.location.href='".site_url('typecase')."';
				</script>";
			}
		}
	}

	function edit(){
		$id = $this->uri->segment(3);

		$this->	data['konten'] = $this->m_typecase->get_konten($id);
		$this-> data['konten'] = $this->data['konten'] [0];
		// $this->	data['gambar'] =  $this->m_gambar->getGambar($id);

		$this->load->view('v_header.php',$this->data);
		$this->load->view('v_sidebar.php',$this->data);
		$this->load->view('typecase/v_edit_typecase.php');
		$this->load->view('v_footer.php');
	}

	function action_edit(){
		$id = $this->uri->segment(3);
		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_message('required', '%s tidak boleh kosong !');

		if ($this->form_validation->run() == FALSE) {
			$id = $this->uri->segment(3);

			$this->	data['konten'] = $this->m_typecase->get_konten($id);
			$this-> data['konten'] = $this->data['konten'] [0];
			// $this->	data['gambar'] =  $this->m_gambar->getGambar($id);

			$this->load->view('v_header.php',$this->data);
			$this->load->view('v_sidebar.php',$this->data);
			$this->load->view('typecase/v_typecase.php');
			$this->load->view('v_footer.php');
		}else{
			$con = 0;

			if($_FILES['uplot']['name'] != ''){
				$stat = $this->m_gambar->cek_gambar($_FILES["uplot"]);

				if($stat == 1){

					$datas = $this->m_typecase->get_konten($id);
					$datas = $datas[0];

					if(file_exists('./'.'uploads/'.$datas['foto'])) {
						unlink('./'.'uploads/'.$datas['foto']);
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
							'nama' => $this->input->post('nama'),
							'foto' => $direktori
						);

						$id = $this->m_typecase->edit_konten($id,$data);
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
					'nama' => $this->input->post('nama'),
				);

				$id = $this->m_typecase->edit_konten($id,$data);
			}

			if($con == 0){

				echo "<script>
				alert('Typecase berhasil diedit !');
				window.location.href='".site_url('typecase')."';
				</script>";
			}
		}
	}

	function hapus(){
		$id =$this->uri->segment(3);

		$data = $this->m_typecase->get_konten($id);

		if(file_exists('./'.'/uploads/'.$data[0]['foto'])) {
			unlink('./'.'/uploads/'.$data[0]['foto']);
		}

		$this->m_typecase->hapus_konten($id);
		echo "<script>
		alert('Typecase berhasil dihapus !');
		window.location.href='".site_url('typecase')."';
		</script>";
	}
}