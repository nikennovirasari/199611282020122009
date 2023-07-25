<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pihak extends CI_Model
{    
    public function get_data_rekrutmen()
    {
        $data  = json_decode(file_get_contents("http://103.226.55.159/json/data_rekrutmen.json"), true);
        return $data;
    }

    public function get_data_attribut($id)
    {
        
        
        $items  = json_decode(file_get_contents("http://103.226.55.159/json/data_attribut.json"), true);
        function filterByDow($items, $dow = 1){
            return array_filter($items, function($item) use ($dow) {
                if($item['id_pendaftar'] == $id){
                    return true;
                }
            });
        
        }
        
        $resultArr = filterByDow($items);
        var_dump($resultArr);
        return $resultArr;
    }

    
}
