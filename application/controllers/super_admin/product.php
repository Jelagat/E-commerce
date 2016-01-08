<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start();

class Product extends CI_Controller {

    public function __construct() 
	{
        parent::__construct();

        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) {
            redirect('admin', 'refresh');
        }
        $this->load->model('category_model');
        $this->load->model('manufacturer_model');
        $this->load->model('product_model', 'pro_model');
    }

    public function product_add()
	{
        $data = array();
        $data['all_published_category'] 		= $this->category_model->select_all_published_category();
        $data['all_published_manufacturer'] 	= $this->manufacturer_model->select_all_published_manufacturer();
        $data['maincontent'] 					= $this->load->view('backend/product/product_add', $data, true);
        $this->load->view('backend/admin_master', $data);
    }

    public function product_save()
	{
        $data = array();
        $data['category_id'] 					= $this->input->post('category_id', true);
        $data['manufacturer_id'] 				= $this->input->post('manufacturer_id', true);
        $data['product_name'] 					= $this->input->post('product_name', true);
        $data['product_description'] 			= $this->input->post('product_description', true);
        $data['product_price'] 					= $this->input->post('product_price', true);
        $data['product_quantity'] 				= $this->input->post('product_quantity', true);
        $data['featured_product'] 				= $this->input->post('featured_product', true);
        $data['created_date_time'] 				= $this->input->post('created_date_time', true);
        $data['publication_status'] 			= $this->input->post('publication_status', true);

        //        ---------start Image Upload--------------
        foreach ($_FILES as $eachFile)
		{
            if ($eachFile['size'] > 0)
			{
                $config['upload_path'] 			= 'images/product_images/';
                $config['allowed_types'] 		= 'gif|jpg|png';
                $config['max_size'] 			= '2048';
                $config['max_width'] 			= '1500';
                $config['max_height'] 			= '1500';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('product_image'))
				{
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                }
				else
				{
                    $fdata = $this->upload->data();
                    $index = 'product_image';
                    $data[$index] = $config['upload_path'] . $fdata['file_name'];
                }

                $config['image_library'] 		= 'gd2';
                $config['new_image'] 			= 'images/product_images/image_thumb/';
                $config['source_image'] 		= $data[$index];
                $config['create_thumb'] 		= TRUE;
                $config['maintain_ratio'] 		= TRUE;
                $config['width'] 				= '1500';
                $config['height'] 				= '1500';
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                if (!$this->image_lib->resize())
				{
                    echo $this->image_lib->display_errors();
                } 
				else
				{
                    $index = 'product_image1';
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                }
            }
        }

        $this->pro_model->save_product_info($data);
        $sdata = array();
        $sdata['message'] = 'Save product information successfully!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/product/product_add');
    }

    public function product_manage() 
	{
        $data = array();
        $data['all_product'] 				= $this->pro_model->select_all_product();
//        print_r($data['all_product']);
//        exit();
        $data['maincontent'] 				= $this->load->view('backend/product/product_manage', $data, true);
        $this->load->view('backend/admin_master', $data);
    }

    public function product_published($product_id)
	{
        $this->pro_model->update_publication_status_by_id($product_id);
        redirect('super_admin/product/product_manage');
    }

    public function product_unpublished($product_id)
	{
        $this->pro_model->update_unpublication_status_by_id($product_id);
        redirect('super_admin/product/product_manage');
    }

    public function product_featured($product_id)
	{
        $this->pro_model->update_featured_product_by_id($product_id);
        redirect('super_admin/product/product_manage');
    }

    public function product_unfeatured($product_id)
	{
        $this->pro_model->update_unfeatured_product_by_id($product_id);
        redirect('super_admin/product/product_manage');
    }

    public function product_edit($product_id)
	{
        $data = array();
        $data['all_published_category'] 	= $this->category_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->manufacturer_model->select_all_published_manufacturer();
        $data['product_info'] 				= $this->pro_model->select_product_info_by_id($product_id);
        $data['maincontent'] 				= $this->load->view('backend/product/product_edit', $data, true);
        $this->load->view('backend/admin_master', $data);
    }

    public function product_update()
	{
        $data = array();
        $product_id 						= $this->input->post('product_id');
        $data['category_id'] 				= $this->input->post('category_id', true);
        $data['manufacturer_id'] 			= $this->input->post('manufacturer_id', true);
        $data['product_name'] 				= $this->input->post('product_name');
        $data['product_description'] 		= $this->input->post('product_description');
        $data['product_price'] 				= $this->input->post('product_price');
        $data['product_quantity'] 			= $this->input->post('product_quantity');
        $data['featured_product'] 			= $this->input->post('featured_product');
        $data['created_date_time'] 			= $this->input->post('created_date_time');
        $data['publication_status'] 		= $this->input->post('publication_status');

        //        ---------start Image Upload--------------
        foreach ($_FILES as $eachFile)
		{
            if ($eachFile['size'] > 0)
			{
                $config['upload_path'] 		= 'images/product_images/';
                $config['allowed_types'] 	= 'gif|jpg|png';
                $config['max_size'] 		= '2048';
                $config['max_width']	    = '1500';
                $config['max_height'] 		= '1500';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('product_image')) 
				{
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } 
				else 
				{
                    $fdata = $this->upload->data();
                    $index = 'product_image';
                    $data[$index] = $config['upload_path'] . $fdata['file_name'];
                }

                $config['image_library'] 	= 'gd2';
                $config['new_image'] 		= 'images/product_images/image_thumb/';
                $config['source_image'] 	= $data[$index];
                $config['create_thumb']		= TRUE;
                $config['maintain_ratio'] 	= TRUE;
                $config['width'] 			= '150';
                $config['height'] 			= '150';
                $this->load->library('image_lib', $config);

                $this->image_lib->resize();

                if (!$this->image_lib->resize())
				{
                    echo $this->image_lib->display_errors();
                }
				else
				{
                    $index = 'product_image1';
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                }
            }
        }
//        print_r($data);
//        exit();
        $this->pro_model->update_product_info($data, $product_id);
        redirect('super_admin/product/product_manage');
    }

    public function product_delete($product_id)
	{
        $this->pro_model->delete_product_by_id($product_id);
        redirect('super_admin/product/product_manage');
    }

    public function delete_product_image($product_id)
	{

        $data = array();
        $this->pro_model->delete_product_image_by_id($product_id);
        $data['all_published_category'] 	= $this->category_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->manufacturer_model->select_all_published_manufacturer();
        $data['product_info'] 				= $this->pro_model->select_product_info_by_id($product_id);
        $data['maincontent'] 				= $this->load->view('backend/product/product_edit', $data, true);
        $this->load->view('backend/admin_master', $data);
    }

}

/* End of file category.php */
/* Location: ./application/controllers/super_admin/category.php */