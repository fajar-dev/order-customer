<?php
class Page extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Model_page');
		
		if($this->session->userdata('status')!= "login"){
			redirect(base_url('login'));
		}
	}
	
	public function index(){
		$data['layanan'] =  $this->Model_page->tampil('layanan')->num_rows();
		$data['pelanggan'] =  $this->Model_page->tampil('pelanggan')->num_rows();
		$data['order'] =  $this->Model_page->tampil('order')->num_rows();
		$data['title'] = 'Dashboard';
		$this->load->view('header', $data);
    $this->load->view('dashboard');
    $this->load->view('footer');
	} 

	public function pelanggan(){
		$data['hasil']= $this->Model_page->tampil('pelanggan')->result();
		$data['title'] = 'Pelanggan';
		$this->load->view('header', $data);
    $this->load->view('pelanggan');
    $this->load->view('footer');
	}

	public function tambah_pelanggan()
	{
		$kode = $_POST['kode'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$hp = $_POST['hp'];
		$data = array(
			'kd_pelanggan'=>$kode,
			'nm_pelanggan'=>$nama,
			'alamat'=>$alamat,
			'no_telp'=>$hp
		);
		$this->Model_page->tambah('pelanggan',$data);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success solid alert-right-icon alert-dismissible fade show">
		<span><i class="mdi mdi-check"></i></span>
		<button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
		</button> Berhasil menambahkan data pelanggan
		</div>'
	);
	redirect(base_url('page/pelanggan'));
	}

	function hapus_pelanggan($id)
	{
		$where = array('id'=>$id);
		$this->Model_page->hapus('pelanggan',$where);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success solid alert-right-icon alert-dismissible fade show">
		<span><i class="mdi mdi-check"></i></span>
		<button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
		</button> Berhasil menghapus data Pelanggan
		</div>'
		);
		redirect(base_url('page/pelanggan'));
	}

	

	public function layanan(){
		$data['hasil']= $this->Model_page->tampil('layanan')->result();
		$data['title'] = 'Layanan';
		$this->load->view('header', $data);
    $this->load->view('layanan');
    $this->load->view('footer');
	}

	public function tambah_layanan()
	{
		$kode = $_POST['kode'];
		$nama = $_POST['nama'];
		$jumlah = $_POST['jumlah'];
		$biaya = $_POST['biaya'];
		$data = array(
			'kd_layanan'=>$kode,
			'nm_layanan'=>$nama,
			'jumlah'=>$jumlah,
			'biaya'=>$biaya
		);
		$this->Model_page->tambah('layanan',$data);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success solid alert-right-icon alert-dismissible fade show">
		<span><i class="mdi mdi-check"></i></span>
		<button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
		</button> Berhasil menambahkan data Layanan
		</div>'
	);
	redirect(base_url('page/layanan'));
	}

	function hapus_layanan($id)
	{
		$where = array('id'=>$id);
		$this->Model_page->hapus('layanan',$where);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success solid alert-right-icon alert-dismissible fade show">
		<span><i class="mdi mdi-check"></i></span>
		<button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
		</button> Berhasil menghapus data Layanan
		</div>'
		);
		redirect(base_url('page/layanan'));
	}


	public function order(){
		$data['layanan']= $this->Model_page->tampil('layanan')->result();
		$data['pelanggan']= $this->Model_page->tampil('pelanggan')->result();
		$data['hasil']= $this->Model_page->tampil('order')->result();
		$data['title'] = 'Order';
		$this->load->view('header', $data);
    $this->load->view('order');
    $this->load->view('footer');
	}

	public function tambah_order()
	{
		$tgl= date("Y-m-d");
		$pelanggan = $_POST['pelanggan'];
		$layanan = $_POST['layanan'];
		$tempat = $_POST['tempat'];
		$tanggal = $_POST['tanggal'];
		$dp = $_POST['dp'];
		$total = $_POST['total'];
		$ket = $_POST['ket'];
		$data = array(
			'tgl_pesan'=>$tgl,
			'nm_pelanggan'=>$pelanggan,
			'nm_layanan'=>$layanan,
			'tanggal_acara'=>$tanggal,
			'tempat'=>$tempat,
			'dp'=>$dp,
			'total'=>$total,
			'keterangan'=>$ket
		);
		$this->Model_page->tambah('order',$data);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success solid alert-right-icon alert-dismissible fade show">
		<span><i class="mdi mdi-check"></i></span>
		<button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
		</button> Berhasil menambahkan data Order
		</div>'
	);
	redirect(base_url('page/order'));
	}

	function hapus_order($id)
	{
		$where = array('id'=>$id);
		$this->Model_page->hapus('order',$where);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success solid alert-right-icon alert-dismissible fade show">
		<span><i class="mdi mdi-check"></i></span>
		<button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
		</button> Berhasil menghapus data order
		</div>'
		);
		redirect(base_url('page/order'));
	}



	public function cetak(){
		$data['hasil']= $this->Model_page->tampil('order')->result();
		$this->load->view('cetak', $data);
	}

	
	


}