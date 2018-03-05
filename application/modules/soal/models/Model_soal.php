<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_soal extends CI_Model
{

    public $table = "serasi_soal";
    public $select_column = array("serasi_soal.judul_pembelajaran", "serasi_judul.kode_pembelajaran");

    public $order_column = array(null, "serasi_soal.judul_pembelajaran", "serasi_judul.kode_pembelajaran", null,null);

    public function __construct()
    {
        parent::__construct();
        $this->load->database();

    }

    public function make_query()
    {

        /*
        $this->db->distinct();
        $this->db->select($this->select_column);
        $this->db->from($this->table);
         */

        $this->db->distinct();
        $this->db->select($this->select_column);
        $this->db->from($this->table);
        $this->db->join('serasi_judul', 'serasi_soal.judul_pembelajaran = serasi_judul.judul_pembelajaran', 'left');

        if (isset($_POST["search"]["value"])) {
            $this->db->like("serasi_soal.judul_pembelajaran", $_POST["search"]["value"]);
            $this->db->or_like("serasi_judul.kode_pembelajaran", $_POST["search"]["value"]);

        }
        if (isset($_POST["order"])) {
            $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('serasi_soal.judul_pembelajaran', 'ASC');
        }
    }
    public function make_datatables()
    {
        $this->make_query();
        if ($_POST["length"] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }

        $query = $this->db->get();
        return $query->result();
    }
    public function get_filtered_data()
    {
        $this->make_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function get_all_data()
    {
        /*
        $this->db->distinct();
        $this->db->select("*");
        $this->db->from($this->table);
         */
        $this->db->distinct();
        $this->db->select($this->select_column);
        $this->db->from($this->table);
        $this->db->join('serasi_judul', 'serasi_soal.judul_pembelajaran = serasi_judul.judul_pembelajaran', 'left');

        return $this->db->count_all_results();
    }

    public function get_soalexist($kode, $untuk)
    {

        $this->db->select("*");
        $this->db->from("serasi_soal");
        $this->db->where('kode_pembelajaran', $kode);
        $this->db->where('untuk', $untuk);
        $query = $this->db->get();
        return $query->num_rows();

    }

    public function get_soal($kode_judul){
        
        $sql = "SELECT tmp.no_indexsoal,tmp.id as peserta_id, tmp.soal as soal_peserta,tmp2.id as atasan_id,tmp2.soal as soal_atasan from (select * from serasi_soal where kode_pembelajaran = ? && untuk = ?) as tmp LEFT JOIN (select * from serasi_soal where kode_pembelajaran = ? && untuk = ?) as tmp2 on tmp.no_indexsoal = tmp2.no_indexsoal";    

        $query = $this->db->query($sql, array($kode_judul, 'peserta',$kode_judul, 'atasan'));
        return $query->result();
    }

    public function get_judul($kode_judul){

    }
}
