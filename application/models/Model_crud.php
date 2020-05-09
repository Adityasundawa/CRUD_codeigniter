<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_crud extends CI_Model {


public function tampil()
{
	return $this->db->get('siswa');
}
public function edit($id)
{
	$result = $this->db->where('id', $id)->get('siswa');
	if ($result->num_rows() > 0) {
		return $result->result();
	}else{
		return false;
	}
}
	

}

/* End of file Model_crud.php */
/* Location: ./application/models/Model_crud.php */