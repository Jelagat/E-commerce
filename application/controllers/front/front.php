<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Front extends CI_Controller {

    public function index($category_id = NULL)
	{
        $data['all_category'] 			= $this->frontend_model->select_all_published_category();
        $data['all_manufacturer'] 		= $this->frontend_model->select_all_published_manufacturer();
        $data['all_product'] 			= $this->frontend_model->select_all_published_product();
        $data['featured_product'] 		= $this->frontend_model->select_all_featured_product();
        $data['maincontent'] 			= $this->load->view('frontend/home_content', $data, true);
        $this->load->view('frontend/master', $data);
    }

    public function about_us()
	{
        $data['all_category'] 			= $this->frontend_model->select_all_published_category();
        $data['all_manufacturer'] 		= $this->frontend_model->select_all_published_manufacturer();
        $data['maincontent'] 			= $this->load->view('frontend/about_us_content', $data, true);
        $this->load->view('frontend/master', $data);
    }

    public function contact_us()
	{
        $data['all_category'] 			= $this->frontend_model->select_all_published_category();
        $data['all_manufacturer'] 		= $this->frontend_model->select_all_published_manufacturer();
        $data['maincontent']	 		= $this->load->view('frontend/contact_us_content', $data, true);
        $this->load->view('frontend/master', $data);
    }
	
	public function send_email()
	{
			$sdata = array();
			$sdata['message'] = 'The email has successfully been sent!';
			$this->session->set_userdata($sdata);
			
			$data = array();
			$data['name'] 				= $this->input->post('name', true);
			$data['mail'] 				= $this->input->post('mail', true);
			$data['msg'] 				= $this->input->post('msg', true);
			$this->load->library('email');
			
			$this->email->from($data['mail'],$data['name'] );
			$this->email->to('ananyadey067@gmail.com');
			$this->email->subject('Message from contact form');
			$this->email->message($data['msg']);
			
			$this->email->send();
			
			//echo $this->email->print_debugger();
			
			
			$data['all_category'] 			= $this->frontend_model->select_all_published_category();
			$data['all_manufacturer'] 		= $this->frontend_model->select_all_published_manufacturer();
			$data['maincontent']	 		= $this->load->view('frontend/contact_us_content', $data,true);
			$this->load->view('frontend/master', $data);       
    }

    public function product_details($product_id = NULL, $category_id = NULL)
	{
        $data['all_category'] 			= $this->frontend_model->select_all_published_category();
        $data['all_manufacturer'] 		= $this->frontend_model->select_all_published_manufacturer();
        $data['product_by_id'] 			= $this->frontend_model->select_product_by_id($product_id);
        $data['related_product'] 		= $this->frontend_model->select_related_product_by_category_id($category_id);
//        print_r( $data['product_by_id']);
//        exit();	
        $data['maincontent'] 			= $this->load->view('frontend/product_details_content', $data, true);
        $this->load->view('frontend/master', $data);
    }

    public function cart()
	{
        $data['all_category'] 			= $this->frontend_model->select_all_published_category();
        $data['all_manufacturer'] 		= $this->frontend_model->select_all_published_manufacturer();
        $data['maincontent'] 			= $this->load->view('frontend/cart_content', $data, true);
        $this->load->view('frontend/master', $data);
    }

    public function category($category_id = NULL)
	{
        $data['all_manufacturer'] 		= $this->frontend_model->select_all_published_manufacturer();
        $data['all_category'] 			= $this->frontend_model->select_all_published_category();
        $data['product_by_category'] 	= $this->frontend_model->select_all_product_by_category_id($category_id);
        //print_r($data['product_by_category']);
        //exit();
        $data['maincontent'] = $this->load->view('frontend/category_content', $data, true);
        $this->load->view('frontend/master', $data);
    }

    public function checkout()
	{
        $data['all_category'] 			= $this->frontend_model->select_all_published_category();
        $data['all_manufacturer'] 		= $this->frontend_model->select_all_published_manufacturer();
        $data['maincontent'] 			= $this->load->view('frontend/checkout_content', $data, true);
        $this->load->view('frontend/master', $data);
    }

    public function wishlist()
	{
        $data['all_category'] 			= $this->frontend_model->select_all_published_category();
        $data['all_manufacturer'] 		= $this->frontend_model->select_all_published_manufacturer();
        $data['maincontent'] 			= $this->load->view('frontend/wishlist_content', $data, true);
        $this->load->view('frontend/master', $data);
    }

}

/* End of file front.php */
/* Location: ./application/front/front.php */