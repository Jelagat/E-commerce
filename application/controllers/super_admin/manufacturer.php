<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start();

class Manufacturer extends CI_Controller {

    public function __construct()
	{
        parent::__construct();

        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) {
            redirect('admin', 'refresh');
        }
        $this->load->model('manufacturer_model', 'ma_model');
    }

    public function manufacturer_add()
	{
        $data = array();
        $data['maincontent'] 				= $this->load->view('backend/manufacturer/manufacturer_add', '', true);
        $this->load->view('backend/admin_master', $data);
    }

    public function manufacturer_save()
	{
        $data = array();
        $data['manufacturer_name'] 			= $this->input->post('manufacturer_name', true);
        $data['manufacturer_description'] 	= $this->input->post('manufacturer_description', true);
        $data['publication_status'] 		= $this->input->post('publication_status', true);

        $this->ma_model->save_manufacturer_info($data);
        $sdata = array();
        $sdata['message'] = 'Save manufacturer information successfully!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manufacturer/manufacturer_add');
    }

    public function manufacturer_manage() 
	{
        $data = array();
        $data['all_manufacturer'] 			= $this->ma_model->select_all_manufacturer();
        $data['maincontent'] 				= $this->load->view('backend/manufacturer/manufacturer_manage', $data, true);
        $this->load->view('backend/admin_master', $data);
    }

    public function manufacturer_published($manufacturer_id) {
        $this->ma_model->update_publication_status_by_id($manufacturer_id);
        redirect('super_admin/manufacturer/manufacturer_manage');
    }

    public function manufacturer_unpublished($manufacturer_id) 
	{
        $this->ma_model->update_unpublication_status_by_id($manufacturer_id);
        redirect('super_admin/manufacturer/manufacturer_manage');
    }

    public function manufacturer_edit($manufacturer_id) 
	{
        $data = array();
        $data['manufacturer_info'] 			= $this->ma_model->select_manufacturer_info_by_id($manufacturer_id);
        $data['maincontent'] 				= $this->load->view('backend/manufacturer/manufacturer_edit', $data, true);
        $this->load->view('backend/admin_master', $data);
    }

    public function manufacturer_update() 
	{
        $data = array();
        $manufacturer_id 					= $this->input->post('manufacturer_id');
        $data['manufacturer_name'] 			= $this->input->post('manufacturer_name');
        $data['manufacturer_description'] 	= $this->input->post('manufacturer_description');
        $data['publication_status'] 		= $this->input->post('publication_status');
        $this->ma_model->update_manufacturer_info($data, $manufacturer_id);
        redirect('super_admin/manufacturer/manufacturer_manage');
    }

    public function manufacturer_delete($manufacturer_id)
	{
        $this->ma_model->delete_manufacturer_by_id($manufacturer_id);
        redirect('super_admin/manufacturer/manufacturer_manage');
    }

}

/* End of file manufacturer.php */
/* Location: ./application/controllers/super_admin/manufacturer.php */