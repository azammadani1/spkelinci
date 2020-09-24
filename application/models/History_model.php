<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History_model extends CI_Model {

	public function listHistory($id){
        return $this->db->select('*')
                        ->from('history a')
                        ->join('gejala b', 'b.id = a.gejala_id')
                        ->where('a.user_id', $id)
                        ->get()
                        ->result_array();
    }


    function listHasil($id){
        return $this->db->select('*')
                        ->from('hasil_diagnosa')
                        ->where('user_id', $id)
                        ->order_by('created_at', 'DESC')
                        ->get()
                        ->result_array();
       
    }

    function history($limit, $start = 0, $q = null){
        return $this->db->select('*, hasil_diagnosa.nama AS penyakit, hasil_diagnosa.id AS id')
                        ->from('hasil_diagnosa')
                        ->join('userx', 'userx.id = hasil_diagnosa.user_id', 'left')
                        ->limit($limit, $start)
                        ->get()
                        ->result_array();
    }

    function total_rows($q = NULL){
        $this->db->from('hasil_diagnosa');
        return $this->db->count_all_results();
    }

    public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('hasil_diagnosa');
	}

}
