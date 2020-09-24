<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit_model extends CI_Model {

	public function daftarPenyakit(){
		return $this->db->get('penyakit')->result();
	}
	
	public function insert(){
		$post = $this->input->post();
		$this->kode = $post['kode'];
		$this->nama = $post['nama'];
		$this->keterangan = $post['keterangan'];
		$this->image = $this->_uploadImage();
	
		$this->db->insert('penyakit', $this);
	
	}

	public function getById($id){
		return $query = $this->db->query("SELECT * FROM penyakit WHERE id='$id' ")->row_array();

	}

	public function edit(){
		$id = $this->input->post('id');
		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama');
		$keterangan = $this->input->post('keterangan');
		
		if (!empty($_FILES["image"]["name"])) {
			$this->image = $this->_uploadImage();
		} else {
			$this->image = $post["old_image"];
		}

		$data = array(
					'kode'=>$kode,
					'nama'=>$nama,
					'keterangan'=>$keterangan,
		);
		$this->db->where('id',$id);
		$this->db->update('penyakit', $data);
	}

	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('penyakit');
	}
	
	private function _uploadImage()
	{
		$config['upload_path']          = './upload/product/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['file_name']            = $this->kode;
		$config['overwrite']			= true;
		$config['max_size']             = 2048; // 2MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('image')) {
			return $this->upload->data("file_name");
		}
		print_r($this->upload->display_errors());
		
		//return "default.jpg";
	}

	function kodecek($kode){
		return $this->db->select("kode")
						->where("kode", $kode)
						->get("penyakit");
	}

	function apipenyakit(){
		return $this->db->get("penyakit");
	}
}
