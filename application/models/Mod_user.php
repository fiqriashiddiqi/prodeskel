<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_user extends CI_Model {

    private $table = 't_user'; 
    private $column_order = array(null, 'nomor_kartu','username','nama','alamat','email','telepon','status_kartu'); 
    private $column_search = array('nomor_kartu','username','nama','alamat','email','telepon','status_kartu'); 
    private $order = array('id_user' => 'asc'); 

    // --datatable
    private function _get_datatables_query($search_value,$order){
        $this->db->from($this->table);
        $i = 0;
        foreach ($this->column_search as $item){ // loop column 
            if($search_value != NULL){ // if datatable send POST for search
                if($i===0){ // first loop
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $search_value);
                }else{
                    $this->db->or_like($item, $search_value);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($order)){ // here order processing
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


    function user_search($where){
        $this->db->select("*");
        $this->db->from("t_user");
        $this->db->where($where);
        $result = $this->db->get();
        return $result->result();
    }

    function user_insert($data){
        $this->db->insert("t_user",$data);
        return $this->db->affected_rows();
    }

    function user_update($data,$where){
        $this->db->update("t_user",$data,$where);
        return $this->db->affected_rows();
    }

    function user_delete($where){
        $this->db->delete("t_user",$where);
        return $this->db->affected_rows();
    }

    
	
}