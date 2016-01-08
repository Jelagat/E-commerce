<?php

class Checkout_Model extends CI_Model {
    //put your code here
    
    public function save_customer_info($data)
    {
		$this->db->insert('tbl_customer',$data);
		$customer_id=$this->db->insert_id();
		$sdata=array();
		$sdata['customer_id']=$customer_id;
		$this->session->set_userdata($sdata);
    }
	
    public function check_email_address($email_address)
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('email_address',$email_address);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
	
    public function save_new_customer_info($data)
    {
        $this->db->insert('tbl_customer',$data);
//        $customer_id=$this->db->insert_id();
//        $sdata=array();
//        $sdata['customer_id']=$customer_id;
//        $this->session->set_userdata($sdata);
    }
	
    public function update_customer_activation_status($customer_id)
    {
        $this->db->set('activation_status',1);
        $this->db->where('customer_id',$customer_id);
        $this->db->update('tbl_customer');
    }
	
    public function check_user_login_info($email_address,$password)
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('email_address',$email_address);
        $this->db->where('password',md5($password));
        $query_result=$this->db->get();
        $result=$query_result->row();
       
        return $result;
    }
	
    public function save_shipping_info($data)
    {
		$this->db->insert('tbl_shipping',$data);
		$shipping_id=$this->db->insert_id();
		$sdata=array();
		$sdata['shipping_id']=$shipping_id;
		$this->session->set_userdata($sdata);
    }
	 
    public function save_payment_info($data)
    {
	   $this->db->insert('tbl_payment',$data);
	   $payment_id=$this->db->insert_id();
	   $sdata=array();
	   $sdata['payment_id']=$payment_id;
	   $this->session->set_userdata($sdata);
    }
	 
    public function save_order_info()
    {
	   $odata=array();
	   $odata['customer_id']=$this->session->userdata('customer_id');
	   $odata['shipping_id']=$this->session->userdata('shipping_id');
	   $odata['payment_id']=$this->session->userdata('payment_id');
	   $odata['order_total']=$this->session->userdata('grand_total');
	   $odata['order_comments']=$this->input->post('order_comments');
	   $this->db->insert('tbl_order',$odata);
	   $order_id=$this->db->insert_id();
	   
	   $contents=$this->cart->contents();
	   
	   foreach($contents as $v_contents)
	   {
		   $oddata=array();
		   $oddata['order_id']=$order_id;
		   $oddata['product_id']=$v_contents['id'];
		   $oddata['product_name']=$v_contents['name'];
		   $oddata['product_price']=$v_contents['price'];
		   $oddata['product_sales_quantity']=$v_contents['qty'];
		   $this->db->insert('tbl_order_details',$oddata);
	   }
	   $sql="update tbl_product as p,  tbl_order_details as od
		  set p.product_quantity = p.product_quantity - od.product_sales_quantity
		  where p.product_id=od.product_id and od.order_id='$order_id' ";
	   $this->db->query($sql);
    }
}

/* End of file cart.php */
/* Location: ./application/models/checkout_model.php */