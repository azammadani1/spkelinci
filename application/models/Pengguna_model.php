<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_model extends CI_Model {

	function daftarPengguna(){
		// return $this->db->get('userx')->result();
		$this->db->select('*');
		$this->db->from('userx');
		$this->db->where('level', 'admin');
		$this->db->or_where('level', 'pakar');
		return $this->db->get()->result();
	}

	function daftarPasien(){
		return $this->db->select('*')
						->where('level', 'pasien')
						->get('userx')->result();
	}
	
	public function insert(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$level = $this->input->post('level');
	
	$data = array(
					'username'=>$username,
					'password'=>$password,
					'nama'=>$nama,
					'email'=>$email,
					'level'=>$level,
			);
	$this->db->insert('userx', $data);
	
	}

	public function getById($id){
		return $query = $this->db->query("SELECT * FROM userx WHERE id='$id' ")->row_array();
	}

	public function getByIdPasien($id){
		return $query = $this->db->query("SELECT * FROM userx WHERE id='$id' ")->row_array();
	}

	public function edit(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$level = $this->input->post('level');

		$data = array(
					'username'=>$username,
					'password'=>$password,
					'nama'=>$nama,
					'email'=>$email,
					'level'=>$level,
		);
		$this->db->where('id',$id);
		$this->db->update('userx', $data);
	}

	public function edit_pasien(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');

		$data = array(
					'username'=>$username,
					'password'=>$password,
					'nama'=>$nama,
					'email'=>$email,
					// 'level'=>$level,
		);
		$this->db->where('id',$id);
		$this->db->update('userx', $data);
	}

	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('userx');
	}

	public function hapus_pasien($id){
		$this->db->where('id', $id);
		$this->db->delete('userx');
	}
}
