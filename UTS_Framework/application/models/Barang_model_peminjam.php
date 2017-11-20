<?php
/**
 * 
 */
 class Barang_model_peminjam extends CI_Model
 {
 	public $nama_table = 'barang';
	public $id = 'id_barang';
 	public $order = 'ASC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	//untuk mengambil data seluruh mahasiswa
 	function Select_Barang()
 	{
 		$this->db->order_by($this->id,$this->order);
 		return $this->db->get($this->nama_table)->result();
 	}

 	
 } 
 ?>