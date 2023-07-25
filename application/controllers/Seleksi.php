<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seleksi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$res = $this->M_pihak->get_data_rekrutmen();
		$data['data']= $res['Form Responses 1'];
		
		$data['title'] = "Laporan Data Peserta";
		$this->load->view('Temp/header2', $data);
		$this->load->view('Admin/v_peserta', $data);
		$this->load->view('Temp/footer2');
	}

	public function attribut($id)
	{
		$res = $this->M_pihak->get_data_attribut($id);
		$data['data']= $res;
		
		$data['title'] = "Laporan Data Peserta";
		$this->load->view('Temp/header2', $data);
		$this->load->view('Admin/v_view_dup', $data);
		$this->load->view('Temp/footer2');
	}
}
