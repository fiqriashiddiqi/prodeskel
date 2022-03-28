<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_topup extends CI_Model {

    private $table = 't_topup'; 
    private $column_order = array(null, 'id_user','ref','nominal','status','datetime'); 
    private $column_search = array('id_user','ref','nominal','status','datetime'); 
    private $order = array('id_topup' => 'asc'); 

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

    private function _get_pending_datatables_query($search_value,$order){
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

        $this->db->where(array("status"=>"PENDING"));
         
        if(isset($order)){ 
            $this->db->order_by($this->column_order[$order['0']['column']], $order['0']['dir']);
        } else if(isset($this->order)){
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    private function _get_riwayat_datatables_query($search_value,$order){
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

        $this->db->where("status = 'GAGAL' or status = 'SUKSES'");
         
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

    function get_pending_datatables($start,$length,$search_value,$order){
        $this->_get_pending_datatables_query($search_value,$order);
        if($length != -1)
        $this->db->limit($length, $start);
        $query = $this->db->get();
        return $query->result();
    }

    function get_riwayat_datatables($start,$length,$search_value,$order){
        $this->_get_riwayat_datatables_query($search_value,$order);
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


    function topup_search($where){
        $this->db->select("*");
        $this->db->from("t_topup");
        $this->db->where($where);
        $result = $this->db->get();
        return $result->result();
    }

    function topup_insert($data){
        $this->db->insert("t_topup",$data);
        return $this->db->affected_rows();
    }

    function topup_update($data,$where){
        $this->db->update("t_topup",$data,$where);
        return $this->db->affected_rows();
    }

    function topup_delete($where){
        $this->db->delete("t_topup",$where);
        return $this->db->affected_rows();
    }

    
	
}