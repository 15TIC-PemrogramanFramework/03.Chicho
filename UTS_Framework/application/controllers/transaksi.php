<?php 
/**
* 
*/
class transaksi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Transaksi_Model');
		$this->load->model('Pengurus_Model');
		$this->load->model('Peminjam_Model');
		$this->load->model('Barang_Model');
		if($this->session->userdata('logged_in'))
		{
		}
		else
		{
			redirect('login', 'refresh');
		}	
	}
	
	function index()
	{
	//		$session_data = $this->session->userdata('logged_in');
	//		$data2['username'] = $session_data['username'];
			$data['peminjaman'] = $this->Transaksi_Model->Select_Transaksi();
			$this->load->view('transaksi/transaksi_list',$data);
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		//$this->load->view('Mahasiswa/mahasiswa_list',$data);
	}

	function tambah_transaksi()
	{
		$data = array(
			'id_transaksi' => set_value('id_transaksi'),
			'id_barang' => set_value('id_barang'),
			'id_peminjam' => set_value('id_peminjam'),
			'id_pengurus' => set_value('id_pengurus'),
			'tgl_peminjaman' => set_value('tgl_peminjaman'),
			'tgl_pengembalian' => set_value('tgl_pengembalian'),
			'status_transaksi' => set_value('status_transaksi'),
			'pengurus' => $this->Pengurus_Model->Select_Pengurus(),
			'peminjam' => $this->Peminjam_Model->Select_Peminjam(),
			'barang' => $this->Barang_Model->Select_Barang(),
			'transaksi'=> $this->Transaksi_Model->Select_Transaksi(),
			'button' => 'Simpan',
			'action' => site_url('transaksi/tambah_transaksi_aksi')
			);
		$this->load->view('transaksi/transaksi_form', $data);
	}

	function tambah_transaksi_aksi()
	{
		$data = array(
			'id_transaksi' => $this->input->post('id_transaksi'),
			'id_barang' => $this->input->post('id_barang'),
			'id_peminjam' => $this->input->post('id_peminjam'),
			'id_pengurus' => $this->input->post('id_pengurus'),
			'tgl_peminjaman' => $this->input->post('tgl_peminjaman'),
			'tgl_pengembalian' => $this->input->post('tgl_pengembalian'),
			'status_transaksi' => $this->input->post('status_transaksi'),
			);
		$this->Transaksi_Model->tambah_data($data);
		redirect(site_url('transaksi'));
	}

	function delete($id)
	{
		$this->Transaksi_Model->hapus_data($id);
		redirect(site_url('transaksi'));
	}

	function edit($id)
	{
		$transaksi=($this->Transaksi_Model->ambil_data_id($id));

		//Mencari Indeks Anggota
		$peminjaman=($this->Peminjam_Model->ambil_data_id($transaksi->id_peminjam));
		$arrPeminjam = $this->Peminjam_Model->Select_Peminjam();
		$indexePeminjam=0; 
		foreach ($arrPeminjam as $key => $value) {
			if($value->id_peminjam == $transaksi->id_peminjam){
				break;
			}
			else{
				$indexePeminjam++;
			}
		}

		//Mencari Indeks Petugas
		$pengurus=($this->Pengurus_Model->ambil_data_id($transaksi->id_pengurus));
		$arrPengurus = $this->Pengurus_Model->Select_Pengurus();
		$indexPengurus=0; 
		foreach ($arrPengurus as $key => $value) {
			if($value->id_pengurus == $pengurus->id_pengurus){
				break;
			}
			else{
				$indexPengurus++;
			}
		}

		//Mencari Indeks Buku
		$barang=($this->Barang_Model->ambil_data_id($transaksi->id_barang));
		$arrBarang = $this->Barang_Model->Select_Barang();
		$indexBarang=0; 
		foreach ($arrBarang as $key => $value) {
			if($value->id_barang == $barang->id_barang){
				break;
			}
			else{
				$indexBarang++;
			}
		}

		$data = array(
			'pengurus' => $this->Pengurus_Model->Select_Pengurus(),
			'peminjam' => $this->Peminjam_Model->Select_Peminjam(),
			'barang' => $this->Barang_Model->Select_Barang(),
			'id_transaksi' => set_value('id_transaksi',$transaksi->id_transaksi),
			'id_peminjam' => set_value('id_peminjam',$indexePeminjam),
			'id_pengurus' => set_value('id_pengurus',$indexPengurus),
			'id_barang' => set_value('id_barang',$indexBarang),
			'tgl_peminjaman' => set_value('tgl_peminjaman',$transaksi->tgl_peminjaman),
			'tgl_pengembalian' => set_value('tgl_pengembalian',$transaksi->tgl_pengembalian),
			'status_transaksi' => set_value('status_transaksi',$transaksi->status_transaksi),
			'button' => 'Edit',
			'action' => site_url('transaksi/edit_aksi')
			);
		$this->load->view('transaksi/Transaksi_form', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'id_peminjam' => $this->input->post('id_peminjam'),
			'id_pengurus' => $this->input->post('id_pengurus'),
			'id_barang' => $this->input->post('id_barang'),
			'tgl_peminjaman' => $this->input->post('tgl_peminjaman'),
			'tgl_pengembalian' => $this->input->post('tgl_pengembalian'),
			'status_transaksi' => $this->input->post('status_transaksi'),
			
			);
		$id_transaksi = $this->input->post('id_transaksi');
		$this->Transaksi_Model->edit_data($id_transaksi,$data);
		redirect(site_url('transaksi'));
	}

}
?>