<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sys_Login extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('user_info_model');
		$admin_id = $this->session->userdata('admin_id');
		if($admin_id != NULL){
			redirect("super_admin/admin","refresh");
		}
	}




    public function index() {
        $this->load->view('backend/sys_login_content');
    }


    public function check_login() {

        $admin_email_address = $this->input->post('admin_email_address', true);
        $admin_password = $this->input->post('admin_password', true);
        $result = $this->user_info_model->check_admin_login($admin_email_address, $admin_password);
//        echo '<pre>';
//        print_r($result);
//        exit();

        $sdata = array();
        if ($result) {
            $sdata['admin_full_name'] = $result->admin_full_name;
            $sdata['admin_id'] = $result->admin_id;
            $this->session->set_userdata($sdata);
            redirect('super_admin/admin');
        } else {
            $sdata['message'] = 'Your Email / Password Invalide!!';
            $this->session->set_userdata($sdata);
            redirect('sys_login');
        }
    }

}

?>