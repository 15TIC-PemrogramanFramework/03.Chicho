<?php
/**
 * 
 */
 class Pengembalian_Model extends CI_Model
 {
 	public $nama_table = 'pengembalian';
	public $id = 'kode_kembali';
 	public $order = 'ASC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	//untuk mengambil data seluruh mahasiswa
 	function Select_Pengembalian()
 	{
 		$this->db->distinct();
 		$this->db->select('pg.kode_kembali, a.nama nama_anggota, pt.nama nama_petugas, b.judul, pg.tanggal_kembali');
 		$this->db->from('pengembalian pg');
 		$this->db->join('anggota a', 'a.kode_anggota = pg.kode_anggota');
 		$this->db->join('petugas pt', 'pt.username = pg.username');
 		$this->db->join('buku b', 'b.kode_buku = pg.kode_buku');
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