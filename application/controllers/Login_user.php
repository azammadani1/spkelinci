<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_user extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Login_model'); //load model login
	}
	
	public function index()
	{
		///Jika user sudah login akan otomatis diarahkan ke menu home
		if($this->session->userdata('is_login') == TRUE && $this->session->userdata('level') == 'pasien' && $this->session->userdata('is_login') == TRUE && $this->session->userdata('level') == 'admin'){redirect('welcome/diagnosa');}
		///Jika salah satu ada yang belum login
		else if($this->session->userdata('is_login') == FALSE && $this->session->userdata('level') == 'admin' || $this->session->userdata('is_login') == FALSE && $this->session->userdata('level') == 'pasien'){redirect('login_user/index');}
		
		$data['contentuser'] = 'user/login'; 
		$this->load->view('templates/user/home/index', $data);
	}

	public function login()
	{

		if (isset($_POST['submit'])){
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$check = $this->Login_model->checkLoginPeserta($username, $password);
			if (!$check) {
				$this->session->set_flashdata('error', 'Username atau Password salah');
				redirect('login_user');
			}else{
				// if ($check->status == 1) {
				// 	$this->session->set_flashdata('error', 'Akun anda belum aktif, silahkan periksa email verifikasi untuk mengaktifkan');
				// 	redirect('login_user');
				// }
				
				$data = array(
						'user_id' => $check->id,
						'username' => $username,
						'password' => $password,
						'is_login' => TRUE,
						'nama' => $check->nama,
						'level' => $check->level,
						'expire' => 30000,
				);
				if($data['level'] == 'pasien'){
					$this->session->set_userdata($data);
					redirect('welcome/diagnosa');
				}else if($data['level'] == 'admin' || $data['level'] == 'pakar'){
					$this->session->set_userdata($data);
					redirect('welcome/dashboard');
				}
		
			}

		}
	}

	public function logout()
	{
		$data = array('username','password','is_login', 'nama', 'level');
		$this->session->unset_userdata($data);
		redirect('welcome');	
	}

}
