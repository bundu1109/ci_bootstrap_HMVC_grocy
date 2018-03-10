<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Bundu
 *
 */
class Soal extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        //$this->load->model('model_peserta','peserta');
        //$this->load->model('Model_soal','judul');

    }

    public function index()
    {

        $data["title"] = "Soal";
        $this->load->view('view_soal', $data);

    }

    public function fetch_user()
    {
        $this->load->model("Model_soal");
        $fetch_data = $this->Model_soal->make_datatables();
        $data = array();
        $no = 0;
        foreach ($fetch_data as $row) {
            $no++;
            $sub_array = array();
            $sub_array[] = $no;
            $sub_array[] = $row->judul_pembelajaran;
            $sub_array[] = $row->kode_pembelajaran;
            $sub_array[] = $this->Model_soal->get_soalexist($row->kode_pembelajaran, "peserta");
            $sub_array[] = $this->Model_soal->get_soalexist($row->kode_pembelajaran, "atasan");
            $sub_array[] = '<div class="btn-group">
                                <button type="button" class="btn btn-info btn-sm">Aksi</button>
                                <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                <li><a href="soal/lihat/' . $row->kode_pembelajaran . '/"><i class="fa fa-fw fa-list-alt"></i>Lihat</a></li>
                                <li><a href="#"><i class="fa fa-fw fa-times"></i>Hapus</a></li>
                                </ul>
                            </div>';

            $data[] = $sub_array;
        }
        $output = array(
            "draw" => intval($_POST["draw"]),
            "recordsTotal" => $this->Model_soal->get_all_data(),
            "recordsFiltered" => $this->Model_soal->get_filtered_data(),
            "data" => $data,
        );
        echo json_encode($output);
    }

    public function data_soal()
    {
        if ($this->uri->segment(3)) {
            $this->load->model("Model_soal");
            $fetch_data = $this->Model_soal->get_soal($this->uri->segment(3));
            $data = array();

            $no = 0;
            foreach ($fetch_data as $row) {
                $no++;
                $sub_array = array();
                $sub_array[] = $no;
                $sub_array[] = $row->no_indexsoal;
                $sub_array[] = $row->peserta_id;
                $sub_array[] = $row->soal_peserta;
                $sub_array[] = $row->atasan_id;
                $sub_array[] = $row->soal_atasan;

                $data[] = $sub_array;
            }
            $output = array(
                "data" => $data,
            );
            echo json_encode($output);

        }

    }

    public function jumlah_soal()
    {
        $this->load->model("Model_soal");
        echo $this->Model_soal->get_soalexist("B.1.12.10.011.3.10R0.IC", "peserta");
    }

    public function lihat()
    {
        if ($this->uri->segment(3)) {

            $this->load->model("Model_soal");
            $fetch_data['query'] = $this->Model_soal->get_soal($this->uri->segment(3));
            $fetch_data['kode'] = $this->uri->segment(3);
            $fetch_data['judul'] = $this->Model_soal->get_judul($this->uri->segment(3));            

            $this->load->view('view_detailsoal', $fetch_data);

        } else {
            redirect('404_override', 'refresh');
            //echo $this->uri->segment(3);
        }

    }

    public function hapus()
    {
        $id_soal = $this->input->get_post('id_soal');  
        $this->load->model("Model_soal");
        echo $this->Model_soal->hapus_id($id_soal);
    }
    public function update()
    {
        $this->load->helper('date');

        $id_peserta = $this->input->get_post('id_peserta');      
        $data_peserta = array(            
            'soal' => $this->input->get_post('soalPeserta'),
            'no_indexsoal' => $this->input->get_post('no_indexPeserta')         
        );

        // insert if non $id_peserta 
        if ($id_peserta == ''){
            
            $datestring = '%d/%m/%Y - %h:%i %a';
            $time = now('Asia/Jakarta');
            $created = mdate($datestring, $time);

            $data = array(
                'kode_pembelajaran' => $this->input->get_post('kode_pembelajaran'),
                'judul_pembelajaran' => $this->input->get_post('judul_pembelajaran'),
                'no_soal' => '5',
                'no_indexsoal' => '0',
                'soal' => $this->input->get_post('soalPeserta'),
                'untuk' => 'peserta',
                'created'=> $created
            );
        
            $this->db->insert('serasi_soal', $data);
           
        }

        
        $id_atasan = $this->input->get_post('id_atasan'); 
        $data_atasan = array(           
            'soal' => $this->input->get_post('soalAtasan'),
            'no_indexsoal' => $this->input->get_post('no_indexAtasan')  
        );  

        // insert if non $id_atasan
        if ($id_atasan == ''){

            $datestring = '%d/%m/%Y - %h:%i %a';
            $time = now('Asia/Jakarta');
            $created = mdate($datestring, $time);

            $data = array(
                'kode_pembelajaran' => $this->input->get_post('kode_pembelajaran'),
                'judul_pembelajaran' => $this->input->get_post('judul_pembelajaran'),
                'no_soal' => '5',
                'no_indexsoal' => '0',
                'soal' => $this->input->get_post('soalAtasan'),
                'untuk' => 'atasan',
                'created'=> $created
            );
        
            $this->db->insert('serasi_soal', $data);
           
        }

        // update SOal Peserta 
        $this->db->trans_start(); // catch transaction        
        $this->db->where('id', $id_peserta);
        $this->db->update('serasi_soal', $data_peserta);
        
        $this->db->trans_complete(); // end catch

        // was there any update or error?
        if ($this->db->affected_rows() == '1') {
            
            echo "true";
             // update SOal Atasan 
            $this->db->trans_start(); // catch transaction        
            $this->db->where('id', $id_atasan);
            $this->db->update('serasi_soal', $data_atasan);
            
            $this->db->trans_complete(); // end catch
            if ($this->db->affected_rows() == '1') {
                echo "TRUE";
            } else {
                // if any trans error
                if ($this->db->trans_status() === false) {
                    echo "FALSE";
                } else {
                    echo "TRUE";    
                }
            }

        } else {
            // if any trans error
            if ($this->db->trans_status() === false) {
                echo "false";
            } else {
                echo "true";
                 // update SOal Atasan 
                $this->db->trans_start(); // catch transaction        
                $this->db->where('id', $id_atasan);
                $this->db->update('serasi_soal', $data_atasan);
                
                $this->db->trans_complete(); // end catch
                if ($this->db->affected_rows() == '1') {
                    echo "TRUE";
                } else {
                    // if any trans error
                    if ($this->db->trans_status() === false) {
                        echo "FALSE";
                    } else {
                        echo "TRUE";    
                    }
                }
            }
        }
        

    }

    public function getjson()
    {
        $sql = $this->db->query("SELECT id,kode_pembelajaran,judul_pembelajaran,soal,untuk  FROM serasi_soal WHERE kode_pembelajaran LIKE 'B.1.12.10.011.3.10R0.IC' AND untuk LIKE 'peserta'");

        //echo $sql->num_fields();
        // $data = array();
        foreach ($sql->result() as $tmp) {

            $row = array();
            $row[] = $tmp->id;
            $row[] = $tmp->kode_pembelajaran;
            $row[] = $tmp->judul_pembelajaran;
            $row[] = $tmp->soal;
            $row[] = $tmp->untuk;

            $data[] = $row;
        }
        /*
        $output = array(
        "data" => $data,
        );
         */
        echo json_encode($data);

    }

}
