<?php 
/**
* 
*/
class peminjam_peminjam extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if ($this -> session->userdata('status') != "login"){
			redirect(base_url("loginuser"));
		}
		$this->load->model('Peminjam_Model_peminjam');
	}
	function index()
	{
			$data['peminjam'] = $this->Peminjam_Model_peminjam->Select_peminjam();
			$this->load->view('daftar_peminjam/peminjam_list', $data);
	}

}
?>