<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start();

class Category extends CI_Controller {

    public function __construct()
	{
        parent::__construct();

        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) {
            redirect('admin', 'refresh');
        }
        $this->load->model('category_model', 'ca_model');
    }

    public function category_add()
	{
        $data = array();
        $data['maincontent'] 				= $this->load->view('backend/category/category_add', '', true);
        $this->load->view('backend/admin_master', $data);
    }

    public function category_save()
	{
        $data = array();
        $data['category_name'] 				= $this->input->post('category_name', true);
        $data['category_description'] 		= $this->input->post('category_description', true);
        $data['publication_status'] 		= $this->input->post('publication_status', true);

        $this->ca_model->save_category_info($data);
        $sdata = array();
        $sdata['message'] = 'Save category information successfully!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/category/category_add');
    }

    public function category_manage()
	{
        $data = array();
        $data['all_category'] 			= $this->ca_model->select_all_category();
        $data['maincontent'] 			= $this->load->view('backend/category/category_manage', $data, true);
        $this->load->view('backend/admin_master', $data);
    }

    public function category_published($category_id)
	{
        $this->ca_model->update_publication_status_by_id($category_id);
        redirect('super_admin/category/category_manage');
    }

    public function category_unpublished($category_id)
	{
        $this->ca_model->update_unpublication_status_by_id($category_id);
        redirect('super_admin/category/category_manage');
    }

    public function category_edit($category_id)
	{
        $data = array();
        $data['category_info'] 			= $this->ca_model->select_category_info_by_id($category_id);
        $data['maincontent'] 			= $this->load->view('backend/category/category_edit', $data, true);
        $this->load->view('backend/admin_master', $data);
    }

    public function category_update()
	{
        $data = array();
        $category_id 					= $this->input->post('category_id');
        $data['category_name'] 			= $this->input->post('category_name');
        $data['category_description'] 	= $this->input->post('category_description');
        $data['publication_status'] 	= $this->input->post('publication_status');

        $this->ca_model->update_category_info($data, $category_id);
        redirect('super_admin/category/category_manage');
    }

    public function category_delete($category_id)
	{
        $this->ca_model->delete_category_by_id($category_id);
        redirect('super_admin/category/category_manage');
    }

}

/* End of file category.php */
/* Location: ./application/controllers/super_admin/category.php */