<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['pelajar'] = $this->model_crud->tampil()->result();
		$this->load->view('crud',$data);
	}
	public function tambah()
	{
		$this->load->view('tambah');
	}
	public function aksi_tambah()
	{
		$nama = $this->input->post('nama');
		$gender = $this->input->post('gender');
		$alamat = $this->input->post('alamat');

		$data = array(
			'nama' => $nama,
			'gender' => $gender,
			'alamat' => $alamat,
			 );
		$this->db->insert('siswa', $data);

		$set = array(
			'aksi' => 'User Berhasil Ditambahkan'
		);
		
		$this->session->set_userdata( $set );
		redirect('welcome','refresh');

	}

	public function hapus($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('siswa');
			$set = array(
			'aksi' => 'User Berhasil Dihapus'
		);
		
		$this->session->set_userdata( $set );
		redirect('welcome','refresh');
	}

	public function edit($id)
	{
		$data['edit'] = $this->model_crud->edit($id);
		$this->load->view('edit', $data, FALSE);
	}
	public function aksi_edit($id)
	{
		$nama = $this->input->post('nama');
		$gender = $this->input->post('gender');
		$alamat = $this->input->post('alamat');

		$data = array(
			'nama' => $nama,
			'gender' => $gender,
			'alamat' => $alamat,
			 );
		$this->db->where('id', $id);
        $this->db->update('siswa', $data);
		$set = array(
			'aksi' => 'User Berhasil Di Edit'
		);
		
		$this->session->set_userdata( $set );
		redirect('welcome','refresh');
	}


}
