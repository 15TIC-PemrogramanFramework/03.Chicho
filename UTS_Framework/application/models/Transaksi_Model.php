<?php
/**
 * 
 */
 class Transaksi_Model extends CI_Model
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

 	function ambil_data_id($id)
 	{
 		$this->db->where($this->id,$id);
 		return $this->db->get($this->nama_table)->row();
 	}

 	function tambah_data($data)
 	{
 		return $this->db->insert($this->nama_table, $data);
 	}

 	function hapus_data($id)
 	{
 		$this->db->where($this->id, $id);
 		$this->db->delete($this->nama_table);
 	}

 	function edit_data($kode_pinjam,$data)
 	{
 		$this->db->where($this->id, $kode_pinjam);
 		$this->db->update($this->nama_table,$data);
 	}
 } 
 ?>