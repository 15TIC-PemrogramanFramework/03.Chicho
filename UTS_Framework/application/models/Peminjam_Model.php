<?php
/**
 * 
 */
 class Peminjam_Model extends CI_Model
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
 		$this->db->where($this->id,$id);
 		$this->db->delete($this->nama_table);
 	}

 	function edit_data($id_peminjam,$data)
 	{
 		$this->db->where($this->id, $id_peminjam);
 		$this->db->update($this->nama_table,$data);
 	}
 } 
 ?>