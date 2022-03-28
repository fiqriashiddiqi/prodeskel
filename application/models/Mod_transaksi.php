<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_transaksi extends CI_Model {

    private $table = 't_transaksi'; 
    private $column_order = array(null, 'id_transaksi','id_user','nominal','keterangan','datetime'); 
    private $column_search = array('id_transaksi','id_user','nominal','keterangan','datetime'); 
    private $order = array('id_transaksi' => 'desc'); 

    // --datatable
    private function _get_datatables_query($search_value,$order){
        $this->db->from($this->table);
        $i = 0;
        foreach ($this->column_search as $item){ 
            if($search_value != NULL){ 
                if($i===0){ 
                    $this->db->group_start(); 
                    $this->db->like($item, $search_value);
                }else{
                    $this->db->or_like($item, $search_value);
                }
 
                if(count($this->column_search) - 1 == $i) 
                    $this->db->group_end(); 
            }
            $i++;
        }
         
        if(isset($order)){ 
            $this->db->order_by($this->column_order[$order['0']['column']], $order['0']['dir']);
        } else if(isset($this->order)){
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables($start,$length,$search_value,$order){
        $this->_get_datatables_query($search_value,$order);
        if($length != -1)
        $this->db->limit($length, $start);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered($search_value,$order){
        $this->_get_datatables_query($search_value,$order);
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all(){
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
    // --end of datatable

    function transaksi(){
        $this->db->select("*");
        $this->db->from("t_transaksi");
        $this->db->order_by("id_transaksi","desc");
        $result = $this->db->get();
        return $result->result();
    }

    function transaksi_search($where){
        $this->db->select("*");
        $this->db->from("t_transaksi");
        $this->db->where($where);
        $this->db->order_by("id_transaksi","desc");
        $result = $this->db->get();
        return $result->result();
    }

    function transaksi_insert($data){
        $this->db->insert("t_transaksi",$data);
        return $this->db->affected_rows();
    }

    function transaksi_update($data,$where){
        $this->db->update("t_transaksi",$data,$where);
        return $this->db->affected_rows();
    }

    function transaksi_delete($where){
        $this->db->delete("t_transaksi",$where);
        return $this->db->affected_rows();
    }

    function transaksi_datatable($sortname, $sortorder,$start, $rp){
        $this->db->select("*");
        $this->db->from("t_transaksi");
        $this->db->order_by($sortname,$sortorder);
        $this->db->limit($rp,$start);
        $query = $this->db->get();
        return $query->result();
    } 

    function transaksi_datatable_search($qtype, $query ,$sortname, $sortorder,$start, $rp){
        $this->db->select("*");
        $this->db->from("t_transaksi");
        $this->db->like($qtype,$query);
        $this->db->order_by($sortname,$sortorder);
        $this->db->limit($rp,$start);
        $query = $this->db->get();
        return $query->result();
    }
	
}