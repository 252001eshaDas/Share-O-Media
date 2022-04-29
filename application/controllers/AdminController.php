<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class AdminController extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('homeModel');
		$this->load->helper(array('form', 'url'));

	}
public function admin(){
		$this->load->view('admin/admin_header');
		$this->load->view('admin/admin_index');
		$this->load->view('admin/admin_footer');
	}
	public function userList(){
	
		
		$data['userData'] = $this->homeModel->getUserData();
		$this->load->view('admin/siteUsers/userList',$data);
	}
	public function admin_login(){
		$this->load->view('admin/siteUsers/admin_login');
	}

      
	
}
?>