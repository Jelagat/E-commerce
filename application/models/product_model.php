<?php

class Product_model extends CI_Model {

    public function save_Product_info($data)
	{
        $this->db->insert('tbl_product', $data);
    }

    public function select_all_product()
	{
        $this->db->select('*');
        $this->db->from('tbl_product');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function select_product_info_by_id($product_id)
	{
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_id', $product_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }

    public function update_product_info($data, $product_id)
	{
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product', $data);
    }

    public function update_publication_status_by_id($product_id)
	{

        $this->db->set('publication_status', 1);
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product');
    }

    public function update_unpublication_status_by_id($product_id)
	{
        $this->db->set('publication_status', 0);
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product');
    }

    public function update_featured_product_by_id($product_id)
	{

        $this->db->set('featured_product', 1);
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product');
    }

    public function update_unfeatured_product_by_id($product_id)
	{
        $this->db->set('featured_product', 0);
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product');
    }

    public function delete_product_by_id($product_id)
	{
        $this->db->where('product_id', $product_id);
        $this->db->delete('tbl_product');
    }

    public function delete_product_image_by_id($product_id)
	{
        $sql = "SELECT * FROM tbl_product WHERE product_id='$product_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        unlink("$result->product_image");
        $this->db->set('product_image', '');
        unlink("$result->product_image1");
        $this->db->set('product_image1', '');
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product');
    }
}
/* End of file cart.php */
/* Location: ./application/models/product_model.php */