<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
	{
        parent::__construct();
        $this->load->model("user_info_model");
        $admin_id = $this->session->userdata("admin_id");
        if ($admin_id == NULL) {
            redirect("sys_login", "refresh");
        }	
    }

    public function index()
	{
        $data['maincontent'] 	= $this->load->view('backend/dashboard_content', '', true);
        $this->load->view('backend/admin_master', $data);
    }
	
	public function logout()
    {
        $this->session->unset_userdata('admin_full_name');
        $this->session->unset_userdata('admin_id');
        $sdata=array();
        $sdata['message'] = 'You are Successfully Logout !';
        $this->session->set_userdata($sdata);
        redirect('sys_login');      
    }
	
	
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/super_admin/admin.php */