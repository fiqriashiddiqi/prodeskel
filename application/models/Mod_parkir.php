<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_parkir extends CI_Model {

    function parkir(){
        $this->db->select("*");
        $this->db->from("t_parkir");
        $this->db->order_by("id_parkir","desc");
        $result = $this->db->get();
        return $result->result();
    }

    function parkir_search($where){
        $this->db->select("*");
        $this->db->from("t_parkir");
        $this->db->where($where);
        $result = $this->db->get();
        return $result->result();
    }

    function parkir_insert($data){
        $this->db->insert("t_parkir",$data);
        return $this->db->affected_rows();
    }

    function parkir_update($data,$where){
        $this->db->update("t_parkir",$data,$where);
        return $this->db->affected_rows();
    }

    function parkir_delete($where){
        $this->db->delete("t_parkir",$where);
        return $this->db->affected_rows();
    }

    function parkir_datatable($sortname, $sortorder,$start, $rp){
        $this->db->select("*");
        $this->db->from("t_parkir");
        $this->db->order_by($sortname,$sortorder);
        $this->db->limit($rp,$start);
        $query = $this->db->get();
        return $query->result();
    } 

    function parkir_datatable_search($qtype, $query ,$sortname, $sortorder,$start, $rp){
        $this->db->select("*");
        $this->db->from("t_parkir");
        $this->db->like($qtype,$query);
        $this->db->order_by($sortname,$sortorder);
        $this->db->limit($rp,$start);
        $query = $this->db->get();
        return $query->result();
    }
	
}