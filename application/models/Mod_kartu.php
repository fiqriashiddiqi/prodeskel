<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_kartu extends CI_Model {

    function kartu(){
        $this->db->select("*");
        $this->db->from("t_kartu");
        $this->db->order_by("id_kartu","desc");
        $result = $this->db->get();
        return $result->result();
    }

    function kartu_search($where){
        $this->db->select("*");
        $this->db->from("t_kartu");
        $this->db->where($where);
        $result = $this->db->get();
        return $result->result();
    }

    function kartu_insert($data){
        $this->db->insert("t_kartu",$data);
        return $this->db->affected_rows();
    }

    function kartu_update($data,$where){
        $this->db->update("t_kartu",$data,$where);
        return $this->db->affected_rows();
    }

    function kartu_delete($where){
        $this->db->delete("t_kartu",$where);
        return $this->db->affected_rows();
    }

    function kartu_datatable($sortname, $sortorder,$start, $rp){
        $this->db->select("*");
        $this->db->from("t_kartu");
        $this->db->order_by($sortname,$sortorder);
        $this->db->limit($rp,$start);
        $query = $this->db->get();
        return $query->result();
    } 

    function kartu_datatable_search($qtype, $query ,$sortname, $sortorder,$start, $rp){
        $this->db->select("*");
        $this->db->from("t_kartu");
        $this->db->like($qtype,$query);
        $this->db->order_by($sortname,$sortorder);
        $this->db->limit($rp,$start);
        $query = $this->db->get();
        return $query->result();
    }
	
}