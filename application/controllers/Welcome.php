<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model(array('Kelompok_model', 'Nilaicf_model', 'Gejala_model', 'History_model', 'Riwayat_model'));
		// if($this->session->userdata('is_login') == FALSE){redirect('login_user');}
	}

	public function admin()
	{
		// $data['content'] = 'admin/dashboard'; //nama file yang akan jadi kontent di template

		$this->load->view('templates/login/index'); 
	}

	public function index()
	{
		$data['contentuser'] = 'user/home'; //nama file yang akan jadi kontent di template
		$this->load->view('templates/user/home/index', $data);
	}

	public function afterlogin()
	{
		$data['contentuser'] = 'user/home'; //nama file yang akan jadi kontent di template
		$this->load->view('templates/user/diagnosa/index', $data);
	}

	public function diagnosa()
	{
		$user_login = $this->session->userdata('user_id');
		// if($this->session->userdata('is_login') == FALSE){redirect('login_user');}
		if($this->session->userdata('is_login') == FALSE){redirect('login_user');}

		if (!$this->input->post('gejala')) {
			$data['contentuser'] = 'user/diagnosa'; //nama file yang akan jadi kontent di template
			$data['listKelompok'] = $this->Kelompok_model->get_list_data();
			$this->load->view('templates/user/diagnosa/index', $data);

		}else{
			$data["contentuser"]="user/hasil_diagnosa";
			$gejala = implode(",", $this->input->post("gejala"));
			$data["listGejala"] = $this->Gejala_model->get_list_by_id($gejala);

			//hitung mencari nilai cf dengan CF Pakar dan CF User
			$listPenyakit = $this->Nilaicf_model->get_by_gejala($gejala);
			$penyakit = array();
			$i=0;
			///Mencari nilai CF Pakar dan User sesuai yang dipilih
			foreach($listPenyakit->result() as $value){
				$listGejala = $this->Nilaicf_model->get_gejala_by_penyakit($value->penyakit_id,$gejala);
				$combineCFmb=0;
				$combineCFmd=0;
				$j=0;
				///Looping untuk perhitungan nilai
				foreach($listGejala->result() as $value2){
					$j++; ///Iterasi untuk berapa banyak data yang di input
					///Mulai dari satu
					if($j==1){
						$CFBefore = $value2->cf_pakar * $value2->cf_user;
						$combineCFmb = $combineCFmb + ($CFBefore * (1 - $combineCFmb));
						$combinehasil = round($combineCFmb, 4);
						// var_dump($combinehasil);
					}
					///Jika sudah lebih dari satu, yg membedakan disini adalah variabel combineCFmb mengambil hasil CFmb yang ada pada if
					else{
						$CFBefore = $value2->cf_pakar * $value2->cf_user;
						$combineCFmb = $combineCFmb + ($CFBefore * (1 - $combineCFmb));	
						$combinehasil = round($combineCFmb, 4);
						// var_dump($combinehasil);
					}	
				}
				///Menghitung tingkat kepercayaan dengan dikalikan 100%
				if($combinehasil)
				{
					$penyakit[$i]=array('kode'=>$value->kode,
										'nama'=>$value->nama,
										'kepercayaan'=>$combinehasil * 100, ///Menghitung kepercayaan
										'keterangan'=>$value->keterangan,
										'user_id' =>$user_login);
					// $this->db->insert('hasil_diagnosa', $penyakit[$i]);
					$i++;
				}
			}

			//insert ke tabel history
			$insert_data = array();
			foreach ($this->input->post("gejala") as $g) {
				$insert_data[] = array(
								'user_id' => $user_login,
								'gejala_id' => $g
							);
			}
			$this->db->insert_batch('history', $insert_data);

			function cmp($a, $b)
			{
				return ($a["kepercayaan"] > $b["kepercayaan"]) ? -1 : 1;
			}
			///Menampilkan dari hasil yang paling tinggi ke rendah
			usort($penyakit, "cmp");
			$data["listPenyakit"] = $penyakit;
			$data_hasil = array(
				'kode' =>$penyakit[0]['kode'],
				'nama' =>$penyakit[0]['nama'],
				'kepercayaan' =>$penyakit[0]['kepercayaan'],
				'keterangan' =>$penyakit[0]['keterangan'],
				'user_id' =>$penyakit[0]['user_id'],
			);
			$this->db->insert('hasil_diagnosa', $data_hasil);

			$this->load->view('templates/user/diagnosa/index', $data);
		}
	}

	public function dashboard()
	{
		
		// if($this->session->userdata('is_login') == FALSE || $this->session->userdata('level') != 'admin'){
		// 	redirect('login_user/index');
		// }

		$data = array(
					'jumlah_users' => $this->db->get('user')->result(),
					'jumlah_kelompok_gejala' => $this->db->get('kelompok_gejala')->result(),
					'jumlah_gejala' => $this->db->get('gejala')->result(),
					'jumlah_penyakit' => $this->db->get('penyakit')->result(),

					'content' => 'admin/dashboard',  //nama file yang akan jadi kontent di template
		);
		// $data['jumlah_users'] = $this->db->get('admin')->result();
		// $data['jumlah_kelompok_gejala'] = $this->db->get('kelompok_gejala')->result();
		// $data['jumlah_gejala'] = $this->db->get('gejala')result();
		// $data['jumlah_penyakit'] = $this->db->get('penyakit')->result();
		// // $data['jumlah_nilai_cf'] = $this->db->get('gejala_penyakit')->result();
		// // $data['jumlah_hasil'] = $this->Riwayat_model->jumlah();

		// $data['content'] = 'admin/dashboard';  //nama file yang akan jadi kontent di template
		$this->load->view('templates/admin/index', $data);
	}

	public function riwayat(){
		$id = $this->session->userdata('user_id');
		
		$data['listHistory'] = $this->History_model->listHistory($id);
		$data['listHasil'] = $this->History_model->listHasil($id);
		// $this->load->view('user/riwayat');
		$data['contentuser'] = 'user/riwayat'; 
		$this->load->view('templates/user/diagnosa/index', $data);

	}

}
