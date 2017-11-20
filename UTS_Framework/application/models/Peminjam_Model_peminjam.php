<?php
/**
 * 
 */
 class Peminjam_Model_peminjam extends CI_Model
 {
 	public $nama_table = 'peminjam';
	public $id = 'id_peminjam';
 	public $order = 'ASC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	//untuk mengambil data seluruh mahasiswa
 	function Select_peminjam()
 	{
 		$data['peminjam'] = $this->db->order_by($this->id, $this->order);
 		return $this->db->get($this->nama_table)->result();
 	}

 } 
 ?>