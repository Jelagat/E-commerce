<?php
class Manufacturer_model extends CI_Model{
	public function save_manufacturer_info($data)
	{
		$this->db->insert('tbl_manufacturer',$data);
	}
	public function select_all_manufacturer()
    {
        $this->db->select('*');
        $this->db->from('tbl_manufacturer');
        $query_result=$this->db->get();
        $result=$query_result->result();
       
        return $result;
    }
	 public function select_manufacturer_info_by_id($manufacturer_id)
     {
        $this->db->select('*');
        $this->db->from('tbl_manufacturer');
        $this->db->where('manufacturer_id',$manufacturer_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
       
        return $result;
     }
	 public function update_manufacturer_info($data,$manufacturer_id)
     {
         $this->db->where('manufacturer_id',$manufacturer_id);
         $this->db->update('tbl_manufacturer',$data);
         
     }
	 public function update_publication_status_by_id($manufacturer_id)
     {
        
        $this->db->set('publication_status',1);
        $this->db->where('manufacturer_id',$manufacturer_id);
        $this->db->update('tbl_manufacturer');  
     }
     public function update_unpublication_status_by_id($manufacturer_id)
     {    
        $this->db->set('publication_status',0);
        $this->db->where('manufacturer_id',$manufacturer_id);
        $this->db->update('tbl_manufacturer');
     }
	 public function delete_manufacturer_by_id($manufacturer_id)
     {
         $this->db->where('manufacturer_id',$manufacturer_id);
         $this->db->delete('tbl_manufacturer');
     }
	 public function select_all_published_manufacturer()
    {
        $this->db->select('*');
        $this->db->from('tbl_manufacturer');
        $this->db->where('publication_status',1);
        $query_result=$this->db->get();
        $result=$query_result->result();
       
        return $result;
    }
	 
	 
}