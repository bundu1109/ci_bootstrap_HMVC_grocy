<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Bundu
 * 
 */
class Peserta extends MX_Controller {

    public function __construct()
	{
        parent::__construct();
        $this->load->model('model_peserta','peserta');
    }
    
    public function index(){


        $this->load->view('view_peserta');
    }

    public function ajax_list()
	{
		$list = $this->peserta->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $peserta) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $peserta->nama_lengkap;
			$row[] = $peserta->nip;
			$row[] = $peserta->judul_pembelajaran;
			$row[] = $peserta->periode_mulai;
			$row[] = $peserta->periode_selesai;
			$row[] = $peserta->unit_induk;

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->peserta->count_all(),
						"recordsFiltered" => $this->peserta->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}



}