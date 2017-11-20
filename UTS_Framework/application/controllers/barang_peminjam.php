<?php 
/**
* 
*/
class barang_peminjam extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if ($this -> session->userdata('status') != "login"){
			redirect(base_url("loginuser"));
		}
		$this->load->model('Barang_model_peminjam');

	}
	function index()
	{
			
			$data['barang'] = $this->Barang_model_peminjam->Select_Barang();
			$this->load->view('peminjam_barang/peminjam_list',$data);		;
		
	}

}
?>