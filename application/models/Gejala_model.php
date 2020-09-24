<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gejala_model extends CI_Model {

	public function gejala($limit, $start = 0, $q = null){
		// return $this->db->get('gejala')->result();

		//ini menggunakan query standar
		//jadi silahkan ppilih mau yg mana sama saja
		//bye
		// return $this->db->query("SELECT *, gejala.id AS gid FROM gejala JOIN kelompok_gejala on kelompok_gejala.id = gejala.kelompok_gejala_id")->result();

		//jadi ini query bawaan CI
		return $this->db->select('*, gejala.id AS gid')
				 ->from('gejala')
				 ->join('kelompok_gejala','kelompok_gejala.id = gejala.kelompok_gejala_id')
                 ->limit($limit, $start)
				 ->get()
				 ->result_array();
	}

	function total_rows($q = NULL) {
        $this->db->from('gejala');
        return $this->db->count_all_results();
    }

	public function insert(){
		$kelompok_gejala_id = $this->input->post('kelompok_gejala_id');
		$kode = $this->input->post('kode');
		$nama_gejala = $this->input->post('nama_gejala');

	$data = array(
					'kelompok_gejala_id'=>$kelompok_gejala_id,
					'kode'=>$kode,
					'nama_gejala'=>$nama_gejala,
			);
	$this->db->insert('gejala', $data);

	}

	public function getById($id){
		return $query = $this->db->query("SELECT * FROM gejala WHERE id='$id' ")->row_array();

	}

	public function edit(){
		$id = $this->input->post('id');
		$kelompok_gejala_id = $this->input->post('kelompok_gejala_id');
		$kode = $this->input->post('kode');
		$nama_gejala = $this->input->post('nama_gejala');

		$data = array(
					'kelompok_gejala_id'=>$kelompok_gejala_id,
					'kode'=>$kode,
					'nama_gejala'=>$nama_gejala,
		);
		$this->db->where('id',$id);
		$this->db->update('gejala', $data);
	}

	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('gejala');
	}

	public function getlistkelompokgejala()
	{
		return $this->db->get('kelompok_gejala');
	}

	function get_list_by_id($id){
         $sql = "select id,kode,nama_gejala from gejala where id in (".$id.")";
         return $this->db->query($sql);
     }

     function get_by_kelompok($kelompok){
        $this->db->select('*');
        $this->db->from('gejala');
        $this->db->where('kelompok_gejala_id',$kelompok);
        return $this->db->get();
	}
	
	function get_gejala($id){
		return $this->db->select("*")
						->join("gejala_penyakit", "gejala_penyakit.gejala_id = gejala.id")
						->where("gejala_penyakit.gejala_id", $id)
						->get("gejala");
	}

	function simpanNilai($data){
		$val = array(
			'id' => $data['id'],
			'gejala_id' => $data['gejala_id'],
			'penyakit_id' => $data['penyakit_id'],
			// 'mb' => $data['mb'],
			// 'md' => $data['md'],
			'cf_user' => $data['cf_user'],
		);
		$this->db->where('id', $data['id'])
				 ->update('gejala_penyakit', $data);
	}

	function simpangejala($data){
		$val = array(
			'id' => $data['id'],
			'kelompok_gejala_id' => $data['kelompok_gejala_id'],
			'kode' => $data['kode'],
			'nama_gejala' => $data['nama_gejala'],
		);
		$this->db->insert("gejala", $val);
	}

	function emailcek($kode){
		return $this->db->select("*")
						->join("gejala_penyakit", "gejala_penyakit.gejala_id = gejala.id")
						->where("gejala.kode", $kode)
						->get("gejala");
	}

	function apigejala(){
		return $this->db->select("*")
						->join("gejala_penyakit", "gejala_penyakit.gejala_id = gejala.id")
						->get("gejala");
	}
}
