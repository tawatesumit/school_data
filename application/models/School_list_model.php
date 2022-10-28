<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School_list_model extends CI_Model {

	public function __construct() {
		parent::__construct();

		$this->table          = 'school_list';
		$fields               = $this->db->list_fields($this->table);
		$this->column_order   = $this->getColumnOrder($fields);
		$this->column_search  = $this->getColumnSearch($fields);
	}

	public function getColumnOrder($fields) {
		$list 		= [];
		$list[0] 	= null;
		foreach($fields as $field) {
			$list[] = $field;
		}
		return $list;
	}

	public function getColumnSearch($fields) {
		$list 		= [];
		foreach($fields as $field) {
			$list[] = $field;
		}
		return $list;
	}

	public function getRows($postData){
        $this->get_datatables_query($postData);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function countAll(){
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
    
    public function countFiltered($postData){
        $this->get_datatables_query($postData);
        $query = $this->db->get();
        return $query->num_rows();
    }

    private function get_datatables_query($postData){
         
        $this->db->from($this->table);
        $this->db->order_by('created_at', 'DESC');
 
        $i = 0;
        // loop searchable columns 
        foreach($this->column_search as $item){
            // if datatable send POST for search
            if($postData['search']['value']){
                // first loop
                if($i===0){
                    // open bracket
                    $this->db->group_start();
                    $this->db->like($item, $postData['search']['value']);
                }else{
                    $this->db->or_like($item, $postData['search']['value']);
                }
                // last loop
                if(count($this->column_search) - 1 == $i){
                    // close bracket
                    $this->db->group_end();
                }
            }
            $i++;
        }
         
        if(isset($postData['order'])){
            $this->db->order_by($this->column_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }else if(isset($this->order)){
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function mail_exists($key)
    {
        $this->db->where('email',$key);
        $query = $this->db->get('users');
        if ($query->num_rows() > 0){
            return true;
        }
        else{
            return false;
        }
    }

}