<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start();

class About extends CI_Controller {

    public function __construct()
	{
        parent::__construct();

        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) {
            redirect('admin', 'refresh');
        }       
    }
	function about_us($param1="",$param2="")
	{
	   if($param1 == "view")
	   {
			$page_data['about']   = $this->db->get('tbl_about')->result_array();
			$page_data['maincontent']   = $this->load->view('backend/about', '', true);
			$this->load->view('backend/admin_master',$page_data);
		}
		else if($param1 == "do_update")
		{
			$val = $this->db->get_where('tbl_about')->result_array();
			foreach($val as $row)
			{
				$data['about_description'] = $this->input->post('about_description');
				$data['address']		   = $this->input->post('address');
				$data['telephone'] 		   = $this->input->post('telephone');
				$data['fax'] 			   = $this->input->post('fax');
				$data['welcome_msg'] 	   = $this->input->post('welcome_msg');
								
				$this->db->where('about_id',$row['about_id']);
				$this->db->update('tbl_about',$data);
			}
				redirect('super_admin/about/about_us/view');				
		} 
	}
}
/* End of file about.php */
/* Location: ./application/controllers/super_admin/about.php */