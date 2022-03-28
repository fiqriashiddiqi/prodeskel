<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_admin extends CI_Model {

    function admin(){
        $this->db->select("*");
        $this->db->from("t_admin");
        $this->db->order_by("id_admin","desc");
        $result = $this->db->get();
        return $result->result();
    }

    function admin_search($where){
        $this->db->select("*");
        $this->db->from("t_admin");
        $this->db->where($where);
        $result = $this->db->get();
        return $result->result();
    }

    function admin_insert($data){
        $this->db->insert("t_admin",$data);
        return $this->db->affected_rows();
    }

    function admin_update($data,$where){
        $this->db->update("t_admin",$data,$where);
        return $this->db->affected_rows();
    }

    function admin_delete($where){
        $this->db->delete("t_admin",$where);
        return $this->db->affected_rows();
    }

    function admin_datatable($sortname, $sortorder,$start, $rp){
        $this->db->select("*");
        $this->db->from("t_admin");
        $this->db->order_by($sortname,$sortorder);
        $this->db->limit($rp,$start);
        $query = $this->db->get();
        return $query->result();
    } 

    function admin_datatable_search($qtype, $query ,$sortname, $sortorder,$start, $rp){
        $this->db->select("*");
        $this->db->from("t_admin");
        $this->db->like($qtype,$query);
        $this->db->order_by($sortname,$sortorder);
        $this->db->limit($rp,$start);
        $query = $this->db->get();
        return $query->result();
    }
	
}