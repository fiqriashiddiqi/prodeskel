<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_area_parkir extends CI_Model {

    function area_parkir_update($data,$where){
        $this->db->update("t_area_parkir",$data,$where);
        return $this->db->affected_rows();
    }

    function area_parkir_search($where){
        $this->db->select("*");
        $this->db->from("t_area_parkir");
        $this->db->where($where);
        $result = $this->db->get();
        return $result->result();
    }
}