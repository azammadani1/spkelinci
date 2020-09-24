<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('History_model');
    }

    public function index(){
        
        $q = null;

        $start = intval($this->input->get('start'));
        $config['base_url'] = base_url() . 'index.php/history';
        $config['first_url'] = base_url() . 'index.php/history';
        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->History_model->total_rows($q);
        $this->pagination->initialize($config);

        $data['content'] = 'admin/history/list';
        $data['pagination'] = $this->pagination->create_links();
        $data['start'] = $start;
        $data['kelompok_data'] = $this->History_model->history($config['per_page'], $start, $q);
        $this->load->view('templates/admin/index', $data);
    }

    public function hapus(){
		$id=$this->uri->segment(3);
		$this->History_model->hapus($id);
		redirect('/history');

	}
    
}