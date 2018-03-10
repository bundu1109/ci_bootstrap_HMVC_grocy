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

    public function hapus_id($idSoal)
    {
        $this->db->where('id', $idSoal);
        $this->db->delete('serasi_soal');
        return $this->db->affected_rows();
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
        
        $jmlh_soalPeserta = $this->get_soalexist($kode_judul, "peserta");
        $jmlh_soalAtasan = $this->get_soalexist($kode_judul, "atasan");

        if ($jmlh_soalPeserta >= $jmlh_soalAtasan){
            $var_join = 'LEFT JOIN';
        } else {
            $var_join = 'RIGHT JOIN';
        }


       
        /*
        $sql = "SELECT tmp.no_indexsoal,tmp.id as peserta_id, tmp.soal as soal_peserta,tmp2.id as atasan_id,tmp2.soal as soal_atasan from (select * from serasi_soal where kode_pembelajaran = ? && untuk = ?) as tmp LEFT JOIN (select * from serasi_soal where kode_pembelajaran = ? && untuk = ?) as tmp2 on tmp.no_indexsoal = tmp2.no_indexsoal";    
        */

        $sql = "select tmpPeserta.id as id_peserta,tmpPeserta.no_indexsoal as noIndex_peserta,tmpPeserta.soal as soal_peserta,tmpAtasan.id as id_atasan,tmpAtasan.no_indexsoal as noIndex_atasan,tmpAtasan.soal as soal_atasan from (SELECT (@cnt := @cnt + 1) AS rowNumber, t1.* from (select id,no_indexsoal,soal,untuk FROM serasi_soal WHERE kode_pembelajaran = ? && untuk = ? ORDER BY no_indexsoal ASC) as t1 CROSS JOIN (SELECT @cnt := 0) AS dummy1  ORDER BY t1.no_indexsoal ASC) as tmpPeserta ".$var_join." (SELECT (@cnt2 := @cnt2 + 1) AS rowNumber, t2.* from (select id,no_indexsoal,soal,untuk FROM serasi_soal WHERE kode_pembelajaran = ? && untuk = ? ORDER BY no_indexsoal ASC) as t2 CROSS JOIN (SELECT @cnt2 := 0) AS dummy2 ORDER BY t2.no_indexsoal ASC) as tmpAtasan on tmpPeserta.rowNumber = tmpAtasan.rowNumber";


        $query = $this->db->query($sql, array($kode_judul, 'peserta', $kode_judul, 'atasan'));
        //$query = $this->db->query($sql);
        return $query->result();
    }

    public function get_judul($kode_judul){

        $this->db->select('judul_pembelajaran');
        $this->db->from('serasi_judul');
        $this->db->where('kode_pembelajaran', $kode_judul);        
        $query = $this->db->get();
        $row = $query->row();

        if (isset($row))
        {
                return $row->judul_pembelajaran;
        }

    }
}
