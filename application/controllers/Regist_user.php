<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regist_user extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Regist_model'); //load model gejala
	}
	
	public function index()
	{
		$data['contentuser'] = 'user/regist'; 
		$this->load->view('templates/user/login/index', $data);
	}

	public function create()
	{
		if (isset($_POST['submit'])){
			$kode =  uniqid(). uniqid();

			$id = $this->Regist_model->insert($kode);
			$check = $this->Regist_model->getEmail($id);

			$pesan = 'terima kasih telah mendaftar di sistem kami';
			$pesan .= '<br>';
			$pesan .= 'silahkan klik link dibawah ini utk melakukan konfirmasi ';
			$pesan .= '<br>';
			$pesan .= base_url().'regist_user/konfirmasi/'.$kode;
			$result = $this->email
						    ->from('DoNotReply@spkelinci.com', 'Admin')
						    ->to($check->email)
						    ->subject('Email Konfirmasi')
						    ->message($pesan)
						    ->send();
			redirect('login_user/index');
		}
		
		$data['contentuser'] = 'user/login'; 
		$this->load->view('templates/user/index', $data);
	}
	

	public function konfirmasi($kode){
		$check = $this->db->query("SELECT * FROM user WHERE kode_verifikasi ='$kode' ")->row();
		if ($check) {
			$this->db->query("UPDATE user set status = 1 WHERE id='$check->id' ");
			echo "Terima kasih telah melakukan konfirmasi. klik link dibawah ini untuk login dengan akun anda";
			echo "<br>";
			echo base_url().'login_user';
		}else{
			echo "kode verifikasi salah";
		}
	}

	public function emailtest(){
		require_once(APPPATH.'third_party/phpmailer/PHPMailerAutoload.php');
		$kode =  base_url().'regist_user/konfirmasi/'.uniqid(). uniqid();
		$pesan = 'terima kasih telah mendaftar di sistem kami';
		$pesan .= '<br>';
		$pesan .= 'silahkan klik link dibawah ini utk melakukan konfirmasi ';
		$pesan .= '<br>';
		$pesan .= $kode;
		// $result = $this->email
		// 			    ->from('DoNotReply@spkelinci.com', 'Admin')
		// 			    ->to('akbar@isysedge.com')
		// 			    ->subject('Email Konfirmasi')
		// 			    ->message($pesan)
		// 			    ->send();
		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->SMTPAuth	= true;
		$mail->SMTPSecure = "ssl";
		$mail->Host 	  = "smtp.gmail.com";
		$mail->Port		  = "465";
		$mail->Username	  = "mail@gmail.com";
		$mail->Password   = "password";
		$mail->setFrom('DoNotReply@spkelinci.com', 'AdminSPKelinci');
		$mail->isHTML(true);
		$mail->Subject    = "Email Konfirmasi";
		$mail->Body 	  = $pesan;
		$send_to 		  = "adisiswoyo202@gmail.com";
		$mail->addAddress($send_to, "Terkirim");
		$terkirim		  = $mail->send();
		if($terkirim){
			$response = array("status" => "Sukses");
		}else{
			$response = array("status" => "Gagal");
		}
		return $response;


		// var_dump($result);
		// echo '<br />';
		// echo $this->email->print_debugger();
	}



}