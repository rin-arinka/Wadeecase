 <?php 

 class Pemesanan extends CI_Controller{

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
 		$this->load->model('m_pemesanan');
 	}

 	function index(){

 		$this->	data['list_konten'] = $this->m_pemesanan->list();
 		$this->load->view('v_header.php',$this->data);
 		$this->load->view('v_sidebar.php',$this->data);
 		$this->load->view('pemesanan/v_pemesanan.php');
 		$this->load->view('v_footer.php');
 	}

 	function edit(){
 		$id = $this->uri->segment(3);

 		$this->	data['pemesanan'] = $this->m_pemesanan->get_konten($id);
 		$this-> data['pemesanan'] = $this->data['pemesanan'] [0];
 		$this->load->view('v_header.php',$this->data);
 		$this->load->view('v_sidebar.php',$this->data);
 		$this->load->view('pemesanan/v_edit_resi.php');
 		$this->load->view('v_footer.php');
 	}

 	function action_edit(){
 		$id = $this->uri->segment(3);
 		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
 		$this->form_validation->set_rules('resi', 'Resi', 'required');
 		$this->form_validation->set_message('required', '%s tidak boleh kosong !');

 		if ($this->form_validation->run() == FALSE) {
 			$id = $this->uri->segment(3);

 			$this->	data['pemesanan'] = $this->m_pemesanan->get_konten($id);
 			$this-> data['pemesanan'] = $this->data['pemesanan'] [0];
 			$this->load->view('v_header.php',$this->data);
 			$this->load->view('v_sidebar.php',$this->data);
 			$this->load->view('pemesanan/v_pemesanan.php');
 			$this->load->view('v_footer.php');
 		}else{
 			
 			$data = array(
 				'resi' => $this->input->post('resi'),
 			);

 			$id = $this->m_pemesanan->edit_konten($id,$data);

 			echo "<script>
 			alert('Nomor Resi berhasil diedit !');
 			window.location.href='".site_url('pemesanan')."';
 			</script>";
 		}
 	}



 	function action_lunas(){
 		$id =$this->uri->segment(3);

 		$data = array(
 			'status_pemesanan' => 'Lunas'
 		);

 		$this->m_pemesanan->edit_konten($id,$data);

 		echo "<script>alert('Perubahan Data Berhasil !');
 		window.location.href='".site_url('pemesanan')."';
 		</script>";
 	}


 	function action_cancel(){
 		$id =$this->uri->segment(3);

 		$data = array(
 			'status_pemesanan' => 'Reject'
 		);

 		$this->m_pemesanan->edit_konten($id,$data);

 		echo "<script>alert('Transaksi Di Cancel !');
 		window.location.href='".site_url('pemesanan')."';
 		</script>";
 	}

 }