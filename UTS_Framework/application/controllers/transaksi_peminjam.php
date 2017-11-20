<?php 
/**
* 
*/
class transaksi_peminjam extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if ($this -> session->userdata('status') != "login"){
			redirect(base_url("loginuser"));
		}
		$this->load->model('Transaksi_Model_peminjam');
		$this->load->model('Pengurus_Model');
		$this->load->model('Peminjam_Model_peminjam');
		$this->load->model('Barang_Model_peminjam');
	}
	
	function index()
	{
	//		$session_data = $this->session->userdata('logged_in');
	//		$data2['username'] = $session_data['username'];
			$data['peminjaman'] = $this->Transaksi_Model_peminjam->Select_Transaksi();
			$this->load->view('peminjam_transaksi/transaksi_list',$data);
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		//$this->load->view('Mahasiswa/mahasiswa_list',$data);
	}

}
?>