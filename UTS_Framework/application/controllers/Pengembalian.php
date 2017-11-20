<?php 
/**
* 
*/
class Pengembalian extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Pengembalian_Model');
		$this->load->model('Petugas_Model');
		$this->load->model('Anggota_Model');
		$this->load->model('Buku_Model');
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
			$session_data = $this->session->userdata('logged_in');
			$data2['username'] = $session_data['username'];
			$data['pengembalian'] = $this->Pengembalian_Model->Select_Pengembalian();
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		//$this->load->view('Mahasiswa/mahasiswa_list',$data);
			$this->load->view('Pengembalian/Pengembalian_list', $data);
	}

	function tambah_pengembalian()
	{
		$data = array(
			'kode_kembali' => set_value('kode_kembali'),
			'tanggal_kembali' => set_value('tanggal_kembali'),
			'petugas' => $this->Petugas_Model->Select_Petugas(),
			'anggota' => $this->Anggota_Model->Select_Anggota(),
			'buku' => $this->Buku_Model->Select_Buku(),
			'button' => 'Tambah',
			'action' => site_url('Pengembalian/tambah_Pengembalian_aksi')
			);
		$this->load->view('Pengembalian/Pengembalian_form', $data);
	}

	function tambah_Pengembalian_aksi()
	{
		$data = array(
			'kode_kembali' => $this->input->post('kode_kembali'),
			'tanggal_kembali' => $this->input->post('tanggal_kembali'),
			'username' => $this->input->post('username'),
			'kode_anggota' => $this->input->post('kode_anggota'),
			'kode_buku' => $this->input->post('kode_buku'),
			);
		$this->Pengembalian_Model->tambah_data($data);
		redirect(site_url('Pengembalian'));
	}

	function delete($id)
	{
		$this->Pengembalian_Model->hapus_data($id);
		redirect(site_url('Pengembalian'));
	}

	function edit($id)
	{
		$pengembalian=($this->Pengembalian_Model->ambil_data_id($id));
		
		//Mencari Indeks Anggota
		$anggota=($this->Anggota_Model->ambil_data_id($pengembalian->kode_anggota));
		$arrAnggota = $this->Anggota_Model->Select_Anggota();
		$indexAnggota=0; 
		foreach ($arrAnggota as $key => $value) {
			if($value->nama == $anggota->nama){
				break;
			}
			else{
				$indexAnggota++;
			}
		}

		//Mencari Indeks Petugas
		$petugas=($this->Petugas_Model->ambil_data_id($pengembalian->username));
		$arrPetugas = $this->Petugas_Model->Select_Petugas();
		$indexPetugas=0; 
		foreach ($arrPetugas as $key => $value) {
			if($value->nama == $petugas->nama){
				break;
			}
			else{
				$indexPetugas++;
			}
		}

		//Mencari Indeks Buku
		$buku=($this->Buku_Model->ambil_data_id($pengembalian->kode_buku));
		$arrBuku = $this->Buku_Model->Select_Buku();
		$indexBuku=0; 
		foreach ($arrBuku as $key => $value) {
			if($value->judul == $buku->judul){
				break;
			}
			else{
				$indexBuku++;
			}
		}

		$data = array(
			'tanggal_kembali' => set_value('tanggal_kembali',$pengembalian->tanggal_kembali),
			'petugas' => $this->Petugas_Model->Select_Petugas(),
			'anggota' => $this->Anggota_Model->Select_Anggota(),
			'buku' => $this->Buku_Model->Select_Buku(),
			'kode_kembali' => set_value('kode_kembali',$pengembalian->kode_kembali),
			'nomor_anggota' => set_value('nomor_anggota',$indexAnggota),
			'nomor_petugas' => set_value('nomor_petugas',$indexPetugas),
			'nomor_buku' => set_value('nomor_buku',$indexBuku),
			'button' => 'Simpan',
			'action' => site_url('pengembalian/edit_aksi')
			);
		$this->load->view('pengembalian/Pengembalian_form', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'tanggal_kembali' => $this->input->post('tanggal_kembali'),
			'username' => $this->input->post('username'),
			'kode_anggota' => $this->input->post('kode_anggota'),
			'kode_buku' => $this->input->post('kode_buku'),
			'tanggal_kembali' => $this->input->post('tanggal_kembali'),
			);
		$kode_kembali = $this->input->post('kode_kembali');
		$this->Pengembalian_Model->edit_data($kode_kembali,$data);
		redirect(site_url('pengembalian'));
	}

}
?>