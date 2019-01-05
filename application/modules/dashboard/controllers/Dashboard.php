<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {
	public function __construct()
	{ 
	    parent::__construct();
	    $this->load->model('M_dashboard');
	}
	public function index()
	{
		$this->load->view("dashboard/home", TRUE);

	}
	public function post_insert(){
		$dataInsert = array(
			'nama' 	=> $this->input->post("nama"),
			'no_identitas' => $this->input->post("identitas"),
			'pekerjaan' => $this->input->post("status"),
			'jurusan' 	=> $this->input->post("jurusan"),
			'instansi' 	=> $this->input->post("instansi"),
			'email' 	=> $this->input->post("email"),
			'no_telp' 	=> $this->input->post("no_telp"),
		);

		if ($this->M_dashboard->insert($dataInsert)){ 
			$this->session->set_flashdata('report', "<div class='alert alert-success'>Anda Berhasil Terdaftar!</div>");
			redirect('pendaftar');
		}else{
			$data["pesan"] = "<div class='alert alert-danger'>Gagal Menambahkan Data!</div>";
		}
	}

}