<?php 
/**
* 
*/
class pengurus extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Pengurus_Model');
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
			$data['pengurus'] = $this->Pengurus_Model->Select_Pengurus();
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		//$this->load->view('Mahasiswa/mahasiswa_list',$data);
			$this->load->view('pengurus/pengurus_list', $data);	
	}

	function tambah_Pengurus()
	{
		$data = array(
			'id_pengurus' => set_value('id_pengurus'),
			'nama_pengurus' => set_value('nama_pengurus'),
			'alamat_pengurus' => set_value('nama_pengurus'),
			'username' => set_value('username'),
			'password' => set_value('password'),
			'button' => 'Tambah',
			'input' => true,
			'action' => site_url('pengurus/tambah_Pengurus_aksi')
			);
		$this->load->view('pengurus/pengurus_form', $data);
	}

	function tambah_Pengurus_aksi()
	{
		$data = array(
			'id_pengurus' => $this->input->post('id_pengurus'),
			'nama_pengurus' => $this->input->post('nama_pengurus'),
			'alamat_pengurus' => $this->input->post('alamat_pengurus'),
			'username' => $this->input->post('username'),
			'password' => ($this->input->post('password')),
			);
		$this->Pengurus_Model->tambah_data($data);
		redirect(site_url('pengurus'));
	}

	function delete($id)
	{
		$this->Pengurus_Model->hapus_data($id);
		redirect(site_url('pengurus'));
	}

	function edit($id)
	{
			$mhs=$this->Pengurus_Model->ambil_data_id($id);
			$data=array(
			'id_pengurus'		=> set_value('id_pengurus',$mhs->id_pengurus),
			'nama_pengurus'		=> set_value('nama_pengurus',$mhs->nama_pengurus),
			'alamat_pengurus'		=> set_value('alamat_pengurus',$mhs->alamat_pengurus),
			'username'		=> set_value('username',$mhs->username),
			'action' 	=> site_url('pengurus/edit_aksi'),
			'button'	=>'Edit'
			);
			$this->load->view('pengurus/pengurus_form',$data);
	}

	function edit_aksi()
	{
	$data=array(
			'nama_pengurus'		=> $this->input->post('nama_pengurus'),
			'alamat_pengurus'		=> $this->input->post('alamat_pengurus'),
			'username'	=> $this->input->post('username')
			);
			$username=$this->input->post('id_pengurus');
			$this->Pengurus_Model->edit_data($username,$data);
			redirect(site_url('pengurus'));
	}

	function ubah_password($username)
	{
		$mhs=$this->Pengurus_Model->ambil_data_username($username);
		$data = array(
			'username'		=> set_value('username',$mhs->username),
			'button' => 'Simpan',
			'input' => false,
			'action' => site_url('pengurus/ubah_password_aksi')
			);
		$this->load->view('ubah_password', $data);
	}

	function ubah_password_aksi()
	{
		$username = $this->input->post('username');
		$passworddulu = $this->input->post('passworddulu');
		$passwordakan = $this->input->post('passwordakan');
		$pengurus=($this->Pengurus_Model->ambil_data_username($username));
		$passvalid = $pengurus->password;
		if($passworddulu == $passvalid){
			$this->Pengurus_Model->ubah_pass($username,$passwordakan);
		}
		redirect(site_url('pengurus'));
	}	
}
?>