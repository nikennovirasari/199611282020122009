<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pihak extends CI_Model
{    
    // public function get_data_dup($kode)
    // {
    //     $query  = $this->db->query("SELECT * FROM tbl_duplikat WHERE kode='$kode'")->row_array();
    //     return $query;
    // }

    // public function get_data_qrac($kode)
    // {
    //     $query1  = $this->db->query("SELECT nomor_perkara FROM tbl_qrac WHERE kode='$kode'")->row();

    //     $db2 = $this->load->database('database_kedua', TRUE);
    //     $query  = $db2->query("SELECT * FROM perkara
    //             JOIN perkara_akta_cerai ON perkara.`perkara_id`=perkara_akta_cerai.`perkara_id`
    //             JOIN perkara_putusan on perkara.perkara_id = perkara_putusan.perkara_id
    //             WHERE nomor_perkara = '{$query1->nomor_perkara}'")->row_array();

    //     return $query;
    // }

    public function get_data_rekrutmen()
    {
        $data  = file_get_contents("http://103.226.55.159/json/data_rekrutmen.json");
        return $data;
    }

    public function get_data_attribut()
    {
        $data  = file_get_contents("http://103.226.55.159/json/data_attribut.json");
        return $data;
    }
    
}
