<?php
/**
 * 
 */
 class Transaksi_Model_peminjam extends CI_Model
 {
 	public $nama_table = 'transaksi';
	public $id = 'id_transaksi';
 	public $order = 'ASC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	//untuk mengambil data seluruh mahasiswa
 	function Select_Transaksi()
 	{
 		$this->db->distinct();
 		$this->db->select('pm.id_transaksi, a.nama_peminjam, pt.nama_pengurus, b.nama_barang ,pm.tgl_peminjaman , pm.tgl_pengembalian , pm.status_transaksi');
 		$this->db->from('transaksi pm');
 		$this->db->join('peminjam a', 'a.id_peminjam = pm.id_peminjam');
 		$this->db->join('pengurus pt', 'pt.id_pengurus = pm.id_pengurus');
 		$this->db->join('barang b', 'b.id_barang = pm.id_barang');
 		return $this->db->get($this->nama_table)->result();


 		//$data['peminjaman'] = $this->db->order_by($this->id, $this->order);
 		//return $this->db->get($this->nama_table)->result();
 	}

 	
 } 
 ?>