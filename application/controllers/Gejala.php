<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gejala extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Gejala_model'); //load model gejala
	}
	
	public function index()
	{
		$q = null;

        $start = intval($this->input->get('start'));
		$config['base_url'] = base_url() . 'index.php/gejala';
		$config['first_url'] = base_url() . 'index.php/gejala';
        $config['per_page'] = 10;
		$config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Gejala_model->total_rows($q);
        $this->pagination->initialize($config);

		$data['content'] = 'admin/gejala/list';
		$data['pagination'] = $this->pagination->create_links();
		$data['start'] = $start;
		$data['kelompok_data'] = $this->Gejala_model->gejala($config['per_page'], $start, $q);
		$this->load->view('templates/admin/index', $data);
		// $data['content'] = 'admin/gejala/list'; 
		// $data['kelompok_data'] = $this->Gejala_model->gejala();
		// $this->load->view('templates/admin/index', $data);
	}

	public function create()
	{
		if (isset($_POST['submit'])){
			$this->Gejala_model->insert();
			redirect('gejala/index');
		}
		
		$data['content'] = 'admin/gejala/create'; 
		$this->load->view('templates/admin/index', $data);


	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Gejala_model->edit();
			redirect('gejala');
		}

		$id=$this->uri->segment(3);
		$data['gejala'] = $this->Gejala_model->getById($id);
		$data['content'] = 'admin/gejala/edit'; 
		$this->load->view('templates/admin/index', $data);
	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$this->Gejala_model->hapus($id);
		redirect('/gejala');

	}

	public function get_gejala($id){
		$response = $this->Gejala_model->get_gejala($id)->row();

		$this->output
			 ->set_status_header(200)
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response, JSON_PRETTY_PRINT))
			 ->_display();
		exit();
	}

	public function insertNilai(){
		parse_str(file_get_contents('php://input'), $data);
		$this->Gejala_model->simpanNilai($data);

		$response = array(
            'Success' => true,
            'Info' => 'Nilai berhasil ditambahkan.'
		);
		
		$this->output
			 ->set_status_header(201)
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response, JSON_PRETTY_PRINT))
			 ->_display();
   		exit;

	}

	public function emailcek($kode){
		$response = $this->Gejala_model->emailcek($kode)->num_rows();

		$this->output
			 ->set_status_header(200)
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response, JSON_PRETTY_PRINT))
			 ->_display();
		exit();
	}

	public function simpangejala(){
		parse_str(file_get_contents('php://input'), $data);
		$this->Gejala_model->simpangejala($data);

		$response = array(
            'Success' => true,
            'Info' => 'Nilai berhasil ditambahkan.'
		);

		$this->output
			 ->set_status_header(201)
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response, JSON_PRETTY_PRINT))
			 ->_display();
	  	exit;	
	}

	public function apigejala(){
		$response = $this->Gejala_model->apigejala()->result();

		$this->output
			 ->set_status_header(201)
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response, JSON_PRETTY_PRINT))
			 ->_display();
	 exit;

	}

}
