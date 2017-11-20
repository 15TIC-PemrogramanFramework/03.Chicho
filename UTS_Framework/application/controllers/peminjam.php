<?php 
/**
* 
*/
class peminjam extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Peminjam_Model');
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
			//$session_data = $this->session->userdata('logged_in');
			//$data2['username'] = $session_data['username'];
			$data['peminjam'] = $this->Peminjam_Model->Select_peminjam();
			$this->load->view('peminjam/peminjam_list', $data);
	}

	function tambah_peminjam()
	{
		$data = array(
			'id_peminjam' => set_value('id_peminjam'),
			'nama_peminjam' => set_value('nama_peminjam'),
			'jenis_kelamin' => set_value('jenis_kelamin'),
			'status_peminjam' => set_value('status_peminjam'),
			'alamat_peminjam' => set_value('alamat_peminjam'),
			'username_peminjam' => set_value('username_peminjam'),
			'password_peminjam' => set_value('password_peminjam'),
			'button' => 'Tambah',
			'action' => site_url('peminjam/tambah_peminjam_aksi')
			);
		$this->load->view('peminjam/peminjam_form', $data);
	}

	function tambah_peminjam_aksi()
	{
		$data = array(
			'nama_peminjam' => set_value('nama_peminjam'),
			'jenis_kelamin' => set_value('jenis_kelamin'),
			'status_peminjam' => set_value('status_peminjam'),
			'alamat_peminjam' => set_value('alamat_peminjam'),
			'username_peminjam' => set_value('username_peminjam'),
			'password_peminjam' => set_value('password_peminjam'),
			);
		$this->Peminjam_Model->tambah_data($data);
		redirect(site_url('peminjam'));
	}

	function delete($id)
	{
		$this->Peminjam_Model->hapus_data($id);
		redirect(site_url('peminjam'));
	}

	function edit($id)
	{
		$peminjam=($this->Peminjam_Model->ambil_data_id($id));
		$data = array(
			'id_peminjam' => set_value('id_peminjam',$peminjam->id_peminjam),
			'nama_peminjam' => set_value('nama_peminjam',$peminjam->nama_peminjam),
			'jenis_kelamin' => set_value('jenis_kelamin',$peminjam->jenis_kelamin),
			'status_peminjam' => set_value('status_peminjam',$peminjam->status_peminjam),
			'alamat_peminjam' => set_value('alamat_peminjam',$peminjam->alamat_peminjam),
			'username_peminjam' => set_value('username_peminjam',$peminjam->username_peminjam),
			'password_peminjam' => set_value('password_peminjam',$peminjam->password_peminjam),
			'button' => 'Simpan',
			'action' => site_url('peminjam/edit_aksi')
			);
		$this->load->view('peminjam/peminjam_form', $data);
	}

	function edit_aksi()
	{
		$data = array(
			
			'nama_peminjam' => $this->input->post('nama_peminjam'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'status_peminjam' => $this->input->post('status_peminjam'),
			'alamat_peminjam' => $this->input->post('alamat_peminjam'),
			'username_peminjam' => $this->input->post('username_peminjam'),
			'password_peminjam' => $this->input->post('password_peminjam'),
			);
		$id_peminjam = $this->input->post('id_peminjam');
		$this->Peminjam_Model->edit_data($id_peminjam,$data);
		redirect(site_url('peminjam'));
	}
}
?>