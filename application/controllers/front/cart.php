<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cart extends CI_Controller
{  
    public function add_to_cart()
    {
        $product_id=$this->input->post('product_id',true);
        $qty=$this->input->post('quantity',true);
        $product_info=$this->frontend_model->select_product_by_id($product_id);
//        echo '<pre>';
//        print_r($product_info);
//        exit();
        $data = array
		(
		   'id'      => $product_info->product_id,
		   'qty'     => $qty,
		   'price'   => $product_info->product_price,
		   'name'    => $product_info->product_name,
		   'image'   => $product_info->product_image
		);
		$this->cart->insert($data); 
		redirect('front/cart/show_cart');
    }
	
    public function update_cart()
    {
        $quantity=$this->input->post('qty',true);
        $rowid=$this->input->post('rowid',true);
        $data = array
		(
		   'rowid' => $rowid,
		   'qty'   => $quantity
		);
		$this->cart->update($data); 
		redirect('front/cart/show_cart');
    }

    public function show_cart()
    {
        $data = array();
        $data['all_category']=$this->frontend_model->select_all_published_category();
        $data['all_manufacturer']=$this->frontend_model->select_all_published_manufacturer();       
        $data['maincontent'] = $this->load->view('frontend/cart_view', $data, true);
        $this->load->view('frontend/master', $data);
    }
    public function delete_to_cart($rowid)
    {  
        $data = array
		(
		   'rowid' => $rowid,
		   'qty'   => 0
		);
		$this->cart->update($data); 
		redirect('front/cart/show_cart');
    }
    
}

/* End of file cart.php */
/* Location: ./application/controllers/front/cart.php */