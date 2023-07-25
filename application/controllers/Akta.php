<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akta extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['hasil'] = $this->M_pihak->get_data_rekrutmen();
		var_dump($data['hasil']);
		$data['title'] = "Validasi AC";
		$this->load->view('Temp/header2', $data);
		$this->load->view('Admin/v_dashboard2');
		$this->load->view('Temp/footer2');
	}

	// public function kamera()
	// {
	// 	$data['title'] = "Scan dari kamera PC/Laptop";
	// 	$this->load->view('Temp/header2', $data);
	// 	$this->load->view('Admin/v_kamera');
	// 	$this->load->view('Temp/footer2');
	// }

	// public function duplikat()
	// {
	// 	$mau_ke	= $this->uri->segment(3);
	// 	$data['title'] = "Cek Duplikat";
	// 	$data['hasil'] = $this->M_pihak->get_data_dup($mau_ke);

	// 	$this->load->view('Temp/header2', $data);
	// 	$this->load->view('Admin/v_view_dup', $data);
	// 	$this->load->view('Temp/footer2');
	// }

	// public function asli()
	// {
	// 	$mau_ke	= $this->uri->segment(3);
	// 	$data['title'] = "Cek AC";
	// 	$data['hasil'] = $this->M_pihak->get_data_qrac($mau_ke);

	// 	$this->load->view('Temp/header2', $data);
	// 	$this->load->view('Admin/v_view_qrac', $data);
	// 	$this->load->view('Temp/footer2');
	// }

	// public function validasi()
	// {
	// 	$data['title'] = "Validasi AC";
	// 	$this->load->view('Temp/header2', $data);
	// 	$this->load->view('Admin/v_add_validasi');
	// 	$this->load->view('Temp/footer2');
	// }

	// public function tambahProses()
	// {
		
	// 	if (!$this->input->is_ajax_request()) :
    //         show_404();
    //     else :

	// 		$no_perkara = $this->input->get('no_perkara');
	// 		$tahun = $this->input->get('tahun');
	// 		$no_akta = $this->input->get('no_akta');
	// 		$tahun_akta = $this->input->get('tahun_akta');
			
	// 		$nomor_perkara= "{$no_perkara}/Pdt.G/{$tahun}/PA.Bjn";
    //         $nomor_akta_cerai= "{$no_akta}/AC/{$tahun_akta}/PA.Bjn";
			

    //         $db2 = $this->load->database('database_kedua', TRUE);
	// 		$validasi      = $db2->query("SELECT * FROM perkara
	// 				JOIN perkara_akta_cerai ON perkara.`perkara_id`=perkara_akta_cerai.`perkara_id`
	// 				WHERE nomor_perkara = '{$nomor_perkara}' AND nomor_akta_cerai = '{$nomor_akta_cerai}'");
			
	// 		$db3 = $this->load->database('database_ketiga', TRUE);
	// 		$langitcerah      = $db3->query("SELECT * FROM tb_datalc
	// 				WHERE no_perkara = '{$nomor_perkara}'");

    //         if ($validasi->num_rows() > 0) :
    //             $this->result['status'] = true;
                
	// 			if($langitcerah->num_rows() > 0):
	// 				$arr_validasi = $validasi->row_array();
	// 				$arr_langitcerah = $langitcerah->row_array();
	// 				$arr = array_merge($arr_validasi, $arr_langitcerah);
	// 				$this->result['data']   = $arr;
	// 			else:
	// 				$this->result['data']   = $validasi->row_array();
	// 			endif;
	// 		else:
	// 			$this->result['status'] = false;
    //         endif;

    //         echo json_encode($this->result);
    //     endif;
	// }
	// public function downloadImg()
	// {
	// 	if ((isset($_GET['pdf']) && $_GET['pdf'] != '')){
	// 		$pdf      = $_GET['pdf'];
	// 		$cookie = 'cookies.txt';
	// 		$timeout = 30;
	// 		$url = "http://192.168.1.2/data_umum/uploads/".$pdf;

	// 		$ch = curl_init(); 
	// 		curl_setopt($ch, CURLOPT_URL, $url);
	// 		curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	// 		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	// 		curl_setopt($ch, CURLOPT_TIMEOUT, 10); 
	// 		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout );
	// 		curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
	// 		curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
	// 		//curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Encoding: none','Content-Type: application/pdf')); 

	// 		header('Content-type: application/pdf');
	// 		$result = curl_exec($ch);
	// 		curl_close($ch);
	// 		echo $result;
	// 	}
		
	// }
}
