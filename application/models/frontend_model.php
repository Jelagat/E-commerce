<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend_Model extends CI_Model {

    public function select_all_published_category()
	{
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function select_all_published_product()
	{
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status', 1);
        $this->db->order_by('product_id', 'desc');
        $this->db->limit(8);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function select_all_featured_product()
	{
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status', 1);
        $this->db->where('featured_product', 1);
        $this->db->order_by('product_id', 'desc');
        $this->db->limit(10);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function select_all_published_manufacturer()
	{
        $this->db->select('*');
        $this->db->from('tbl_manufacturer');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
	
	public function select_all_about_info()
	{
        $this->db->select('*');
        $this->db->from('tbl_about');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function select_all_product_by_category_id($category_id)
	{
        if ($category_id)
		{
            $this->db->select('*');
            $this->db->from('tbl_category');
            $this->db->join('tbl_product', 'tbl_product.category_id=tbl_category.category_id');
            $this->db->where('tbl_category.publication_status', 1);
            $this->db->where('tbl_product.publication_status', 1);
            $this->db->where('tbl_category.category_id', $category_id);
            $query_result = $this->db->get();
            $result = $query_result->result();
            return $result;
        } 
		else
		{
            $this->db->select('*');
            $this->db->from('tbl_product');
            $this->db->where('publication_status', 1);
            $query_result = $this->db->get();
            $result = $query_result->result();
            return $result;
        }
    }

    public function select_product_by_id($product_id)
	{
        $sql = "SELECT p.*,c.category_name,m.manufacturer_name FROM tbl_product as p,tbl_category as c, tbl_manufacturer as m WHERE  (p.manufacturer_id=m.manufacturer_id AND p.category_id=c.category_id) AND p.product_id='$product_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();

        return $result;
    }

    public function select_related_product_by_category_id($category_id)
	{
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status', 1);
        $this->db->where('category_id', $category_id);
        $this->db->order_by('product_id', 'desc');
        $this->db->limit(4);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

}

?>

