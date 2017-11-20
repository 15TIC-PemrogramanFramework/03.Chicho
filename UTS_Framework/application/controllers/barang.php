<?php 
/**
* 
*/
class barang extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Barang_model');
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
			
			$data['barang'] = $this->Barang_model->Select_Barang();
			$this->load->view('barang/barang_list',$data);		
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		//$this->load->view('Mahasiswa/mahasiswa_list',$data);
		
	}

	function tambah_barang()
	{
		$data = array(
			'id_barang' => set_value('id_barang'),
			'jenis_barang' => set_value('jenis_barang'),
			'nama_barang' => set_value('nama_barang'),
			'button' => 'Tambah',
			'action' => site_url('barang/tambah_barang_aksi')
			);
		$this->load->view('barang/barang_form', $data);
	}

	function tambah_barang_aksi()
	{
		$data = array(
			'id_barang' => $this->input->post('id_barang'),
			'jenis_barang' => $this->input->post('jenis_barang'),
			'nama_barang' => $this->input->post('nama_barang')
			);
		$this->Barang_model->tambah_data($data);
		redirect(site_url('barang'));
	}

	function delete($id)
	{
		$this->Barang_model->hapus_data($id);
		redirect(site_url('barang'));
	}

	function edit($id)
	{
		$barang= ($this->Barang_model->ambil_data_id($id));
		$data = array(
			'id_barang' => set_value('id_barang',$barang->id_barang),
			'jenis_barang' => set_value('jenis_barang',$barang->jenis_barang),
			'nama_barang' => set_value('nama_barang',$barang->nama_barang),
			'button' => 'Simpan',
			'action' => site_url('barang/edit_aksi')
			);
		$this->load->view('barang/barang_form', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'jenis_barang' => $this->input->post('jenis_barang'),
			'nama_barang' => $this->input->post('nama_barang')
			);
		$id_barang = $this->input->post('id_barang');
		$this->Barang_model->edit_data($id_barang,$data);
		redirect(site_url('barang'));
	}
}
?>