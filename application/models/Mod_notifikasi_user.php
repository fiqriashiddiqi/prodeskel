<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_notifikasi_user extends CI_Model {

    function notifikasi_user(){
        $this->db->select("*");
        $this->db->from("t_notifikasi_user");
        $this->db->order_by("id_notifikasi_user","desc");
        $result = $this->db->get();
        return $result->result();
    }

    function notifikasi_user_search($where){
        $this->db->select("*");
        $this->db->from("t_notifikasi_user");
        $this->db->where($where);
        $this->db->order_by("id_notifikasi_user","desc");
        $result = $this->db->get();
        return $result->result();
    }

    function notifikasi_user_insert($data){
        $this->db->insert("t_notifikasi_user",$data);
        return $this->db->affected_rows();
    }

    function notifikasi_user_update($data,$where){
        $this->db->update("t_notifikasi_user",$data,$where);
        return $this->db->affected_rows();
    }

    function notifikasi_user_delete($where){
        $this->db->delete("t_notifikasi_user",$where);
        return $this->db->affected_rows();
    }

    function notifikasi_user_datatable($sortname, $sortorder,$start, $rp){
        $this->db->select("*");
        $this->db->from("t_notifikasi_user");
        $this->db->order_by($sortname,$sortorder);
        $this->db->limit($rp,$start);
        $query = $this->db->get();
        return $query->result();
    } 

    function notifikasi_user_datatable_search($qtype, $query ,$sortname, $sortorder,$start, $rp){
        $this->db->select("*");
        $this->db->from("t_notifikasi_user");
        $this->db->like($qtype,$query);
        $this->db->order_by($sortname,$sortorder);
        $this->db->limit($rp,$start);
        $query = $this->db->get();
        return $query->result();
    }
	
}