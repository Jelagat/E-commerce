<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Checkout extends CI_Controller {

    public function customer_signup()
	{
        $data = array();
        $data['all_category'] 			= $this->frontend_model->select_all_published_category();
        $data['all_manufacturer'] 		= $this->frontend_model->select_all_published_manufacturer();
        $data['maincontent'] 			= $this->load->view('frontend/customer_sign_up', $data, true);
        $this->load->view('frontend/master', $data);
    }

    public function check_customer_email($email_address)
	{
        $result = $this->checkout_model->check_email_address($email_address);
        if ($result)
		{
            echo 'Email Address Alredy Exists !';
        }
		else 
		{
            echo 'OK';
        }
    }
       
    public function check_login_email($email_address)
	{
        $result = $this->checkout_model->check_email_address($email_address);
        if ($result)
		{
            echo 'User Found';
        }
		else
		{            
            echo 'User Not Found !';
        }
    }

    public function new_customer_signup()
	{
        $data = array();
        $data['all_category'] 			= $this->frontend_model->select_all_published_category();
        $data['all_manufacturer'] 		= $this->frontend_model->select_all_published_manufacturer();
        $data['maincontent'] 			= $this->load->view('frontend/new_customer_signup', $data, true);
        $this->load->view('frontend/master', $data);
    }

    public function new_customer()
	{
        $data = array();
        $data['first_name'] 			= $this->input->post('first_name', true);
        $data['last_name'] 				= $this->input->post('last_name', true);
        $data['email_address'] 			= $this->input->post('email_address', true);
        $data['password'] 				= md5($this->input->post('password', true));
        $data['company_name'] 			= $this->input->post('company_name', true);
        $data['address'] 				= $this->input->post('address', true);
        $data['gender'] 				= $this->input->post('gender', true);
        $data['city'] 					= $this->input->post('city', true);
        $data['country'] 				= $this->input->post('country', true);
        $data['zip_code'] 				= $this->input->post('zip_code', true);
//        print_r($data);
//        exit();
        $this->checkout_model->save_new_customer_info($data);        
        $sdata = array();
        $sdata['message'] 				= 'Successfuly registered';
        $this->session->set_userdata($sdata);
        redirect('front/front');
    }

    public function shipping_address()
	{
        $data = array();
        $data['all_category'] 			= $this->frontend_model->select_all_published_category();
        $data['all_manufacturer'] 		= $this->frontend_model->select_all_published_manufacturer();
        $data['maincontent'] 			= $this->load->view('frontend/shipping_form', $data, true);
        $this->load->view('frontend/master', $data);
    }
    
    public function customer_login()
	{
         $data = array();
         $data['all_category'] 			= $this->frontend_model->select_all_published_category();
         $data['all_manufacturer'] 		= $this->frontend_model->select_all_published_manufacturer();
         $data['maincontent'] 			= $this->load->view('frontend/customer_login', $data, true);
         $this->load->view('frontend/master', $data);        
    }
    
    public function check_user_login()
	{
		$email_address 					= $this->input->post('email_address');
		$password 						= $this->input->post('password');		
		$result 						= $this->checkout_model->check_user_login_info($email_address,$password);
	    $sdata=array();
	    if($result)
	    {
		   $sdata['customer_name'] 		= $result->first_name . ' ' . $result->last_name;		   
		   $sdata['email_address']		= $result->email_address;
		   $sdata['customer_id']		= $result->customer_id;
		   $this->session->set_userdata($sdata);
		   redirect('front/front');
	    }
	    else
		{
		   $sdata['message'] 			= 'Invalide Password ';
		   $this->session->set_userdata($sdata);
		   redirect('frontend/checkout/customer_login');		   
	    }
	}

    public function logout()
	{
        $this->session->unset_userdata('customer_name');
        $this->session->unset_userdata('customer_id');
        $this->session->unset_userdata('message');
//        $sdata = array();
//        $sdata['message'] = 'You are Successfully Logout !';
//        $this->session->set_userdata($sdata);
        redirect('front/front');
    }
	
    public function save_shipping_address()
    {
        $data['full_name'] 				= $this->input->post('full_name', true);
        $data['mobile_no']				= $this->input->post('mobile_no', true);
        $data['email_address'] 			= $this->input->post('email_address', true);
        $data['company_name'] 			= $this->input->post('company_name', true);
        $data['address'] 				= $this->input->post('address', true);
        $data['city'] 					= $this->input->post('city', true);
        $data['country'] 				= $this->input->post('country', true);
        $data['zip_code'] 				= $this->input->post('zip_code', true);
        $this->checkout_model->save_shipping_info($data);
        redirect('front/checkout/payment_method');
     }
	 
     public function payment_method()
	 {
        $data = array();
        $data['all_category'] 			= $this->frontend_model->select_all_published_category();
        $data['all_manufacturer'] 		= $this->frontend_model->select_all_published_manufacturer();
        $data['maincontent'] 			= $this->load->view('frontend/payment_method', $data, true);
        $this->load->view('frontend/master', $data);
    }
	
    public function confirm_order()
    {
        $data=array();
        $payment_type 					= $this->input->post('payment_type',true);
//        $order_comments=$this->input->post('order_comments',true);
        if($payment_type == 'cash_on_delivery')
        {
            $data['payment_type'] = $payment_type;
            $this->checkout_model->save_payment_info($data);
            $this->checkout_model->save_order_info();
            /*
             * Email From Here....
             */
            $this->cart->destroy();
            redirect('front/checkout/order_successfull');           
        }
        if($payment_type == 'paypal')
        {
            $data['payment_type'] = $payment_type;
            $this->checkout_model->save_payment_info($data);
            $this->checkout_model->save_order_info();
            /*
             * Email From Here....
             */
//            $this->cart->destroy();
            $this->load->view('frontend/htmlWebsiteStandardPayment');
        }       
    }
    
    public function order_successfull()
    {
        $data = array();
        $data['all_category'] 			= $this->frontend_model->select_all_published_category();
        $data['all_manufacturer'] 		= $this->frontend_model->select_all_published_manufacturer();
        $data['maincontent'] 			= $this->load->view('frontend/order_successfull', $data, true);
        $this->load->view('frontend/master', $data);
    }
}

/* End of file checkout.php */
/* Location: ./application/controllers/front/checkout.php */