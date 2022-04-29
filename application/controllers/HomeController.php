<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

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

	
	public function index()
	{
		//echo "string"; die();
		$this->load->view('include/header');
		$this->load->view('/home/index');
		$this->load->view('include/footer');

	}


	public function registration(){
		//$this->load->view('include/header');
		if (!$this->session->userdata('user_id')) {
			$this->load->view('/home/registration');
		}else{
			redirect('profile');
		}
		
	}

	public function login(){
		if (!$this->session->userdata('user_id')) {
			$this->load->view('/home/login');
		}else{
			redirect('profile');
		}
		
	}

	
	public function logout(){
		session_destroy();
		redirect('login');
	}


	public function community(){
		if($this->session->userdata('user_id')){
			$data['hostingData'] = $this->homeModel->getEventData();
			$data['eventData'] = $this->homeModel->getCommunityPostData();
			$data['userData'] = $this->homeModel->getUserCommunityData();
			$data['freeventData'] = $this->homeModel->getCommunityfreeEventData();

            //echo "<pre>";
            //print_r($data);
            //die();

			$this->load->view('include/login_header');
			$this->load->view('home/community',$data);
			$this->load->view('include/footer');
		}else{
			redirect('login');
		}
	}

	public function create_event(){
		if($this->session->userdata('user_id')){
			$this->load->view('include/login_header');
			$this->load->view('home/create_event');
			$this->load->view('include/footer');
		}else{
			redirect('login');
		}
		
	}


	public function event_submit(){

		if($this->session->userdata('user_id')){

			$this->form_validation->set_rules('event_type','Event Type','required');
			$this->form_validation->set_rules('event_title','Event Title','required');
			$this->form_validation->set_rules('event_desc','Event Description','required');
			$this->form_validation->set_rules('location','Location','required');
			$this->form_validation->set_rules('city','City','required');
			$this->form_validation->set_rules('state','State','required');
			$this->form_validation->set_rules('pin','pin','required');
			$this->form_validation->set_rules('country','Country','required');
			$this->form_validation->set_rules('event_amount','Event Amount','required');
			$this->form_validation->set_rules('event_currency','Event Currency','required');
			$this->form_validation->set_rules('event_gender','Gender','required');
			$this->form_validation->set_rules('from_age','From Age','required');
			$this->form_validation->set_rules('to_age','To Age','required');
			$this->form_validation->set_rules('from_time','From Time','required');
	        $this->form_validation->set_rules('to_time','To Time','required');
			
			if ($this->form_validation->run()==FALSE) {
				$this->create_event();
			}else{

				$config['upload_path']          = './assets/images/event_images';
		        $config['allowed_types']        = 'gif|jpg|png|JPEG';
		        $config['max_size']             = 5120;
		        $config['max_width']            = 2048;
		        $config['max_height']           = 1450;

		        $this->load->library('upload', $config);

		        if ( ! $this->upload->do_upload('event_img'))
		        {
		            $this->session->set_flashdata('error',$this->upload->display_errors());
		            redirect('create_event');
		            
		        }
		        else
		        {
		            $imageData = $this->upload->data();

		            $imagePath = base_url()."assets/images/event_images/".$imageData['file_name'];


					$data=array(
					 'user_id'    =>$this->session->userdata('user_id'),
					  'event_type' =>$this->input->post('event_type'),
			         'event_title'=>$this->input->post('event_title'),
			         'event_desc' =>$this->input->post('event_desc'),
			         'event_img_main'  =>$imagePath,
			         'location'   =>$this->input->post('location'),      
			         'city'       =>$this->input->post('city'),
			         'state'      =>$this->input->post('state'),
			         'pin'        =>$this->input->post('pin'),
			         'country'    =>$this->input->post('country'),
			         'event_amount' =>$this->input->post('event_amount'),
			         'event_currency' =>$this->input->post('event_currency'),
			         'event_gender'   =>$this->input->post('event_gender'),
			         'from_age'  =>$this->input->post('from_age'),
			         'to_age'  =>$this->input->post('to_age'),
			         //'status'  =>$c,
			         'from_time'  =>$this->input->post('from_time'),
			         'to_time'  =>$this->input->post('to_time'),
					);
			 
					$insert_id = $this->homeModel->create_userevent($data);


					$post_data = array(
					 'user_id'    => $this->session->userdata('user_id'),
					 'privacy_id' => '1',
			         'post_text'  => '',
			         'post_image' => '',
			         'event_id'   => $insert_id,
			         'post_type'  => '1',      
			         'created_at' => date('Y-m-d H:i:s'),
					);

					$create_post = $this->homeModel->create_post($post_data);

                    

					if($create_post){
						redirect('profile');
					}else{
						redirect('create_event');
					}
				}
			}
		}else{
			redirect('login');
		}
	}


	public function event_details($id){
		$data['eventData'] = $this->homeModel->getEventDataDetails($id);
        $this->load->view('include/login_header');
        $this->load->view('users/event_details',$data);    
		$this->load->view('include/footer');

	}


	public function search_event(){
		if($this->session->userdata('user_id')){
			$data['eventData'] = $this->homeModel->getCommunityEventData();
			$data['userData'] = $this->homeModel->getUserCommunityData();
		    $data['freeventData'] = $this->homeModel->getCommunityfreeEventData();
		$this->load->view('include/login_header');
		$this->load->view('home/search_event',$data);
		$this->load->view('include/footer');

		}else{
			redirect('login');
		}
		
	}


	public function submit_search(){
     
		$this->form_validation->set_rules('event_title','Event Title','required');
		$this->form_validation->set_rules('city','City','required');
		$this->form_validation->set_rules('from_age','Age','required');
		$this->form_validation->set_rules('to_age','Age','required');
		
		if ($this->form_validation->run()==FALSE) {
		   $this->search_event();
	    }else{
	    						
				
              $event_title = $this->input->post('event_title');
               $city      = $this->input->post('city');
              $from_age   = $this->input->post('from_age');
               $to_age    = $this->input->post('to_age');
                         
	    	
			
				$data['searchData'] = $this->homeModel->search_submit($event_title,$city,$from_age,$to_age);
			    $data['userData'] = $this->homeModel->getUserCommunityData();
				$this->load->view('home/submit_search',$data);
				$this->load->view('include/login_header');
		        $this->load->view('include/footer');		
		}
	}
	 


	public function profile(){

		if($this->session->userdata('user_id')){
			$data['userData'] = $this->homeModel->getUserData();
			$data['eventData'] = $this->homeModel->getEventData();


	        $this->load->view('include/login_header');
			$this->load->view('users/user_profile',$data);
			$this->load->view('include/footer');
		}else{
			redirect('login');
		}
	}


	public function edit_profile(){
		$data['userData'] = $this->homeModel->getUserData();
		$this->load->view('include/login_header');
		$this->load->view('users/user_edit_profile',$data);
		$this->load->view('include/footer');
	}


	public function update_profile(){


		  $this->form_validation->set_rules('name','Name','required');
		  $this->form_validation->set_rules('email','Email','required');
		  $this->form_validation->set_rules('phone','Phone','required');
		  $this->form_validation->set_rules('dob','Date Of Birth','required');
		  $this->form_validation->set_rules('gender','Gender','required');
		  $this->form_validation->set_rules('location','Location','required');
		  $this->form_validation->set_rules('pin','Pin Code','required');
		  $this->form_validation->set_rules('city','City','required');
		  $this->form_validation->set_rules('state','State','required');
		  $this->form_validation->set_rules('speaking','Speaking Language','required');
		  $this->form_validation->set_rules('reading','Reading Language','required');
		  $this->form_validation->set_rules('about_me','About Me','required');

		if ($this->form_validation->run()==FALSE) {
			
			$this->edit_profile();
		}else{

			$user_data = array(
				'name'     => $this->input->post('name'),
				'email'    => $this->input->post('email'),
				'phone'    => $this->input->post('phone'),
				'dob'      => $this->input->post('dob'),
				'location' => $this->input->post('address'),
				'gender'   => $this->input->post('gender'),
				'location' => $this->input->post('location'),
				'city'     => $this->input->post('city'),
				'pin'      => $this->input->post('pin'),
				'state'    => $this->input->post('state'),
				'speaking' => $this->input->post('speaking'),
				'reading'  => $this->input->post('reading'),
				'about_me' => $this->input->post('about_me'),
			);

			$update = $this->homeModel->update_user_profile($user_data);

			if ($update>0) {
				redirect('profile');
			}else{
				redirect('users/user_edit_profile');
			}
		}

		
	}



	public function edit_image(){
		$data['userData'] = $this->homeModel->getUserData();
		$this->load->view('include/login_header');
		$this->load->view('users/edit_image',$data);
		$this->load->view('include/footer');
	}
	public function settings(){
		$data['userData'] = $this->homeModel->getUserData();
		$this->load->view('include/login_header');
		$this->load->view('users/settings',$data);
		$this->load->view('include/footer');
	}

	public function update_image(){
	

		     	$config['upload_path']          = './assets/images/profile_image';
                $config['allowed_types']        = 'gif|jpg|png|JPEG';
                $config['max_size']             = 5120;
                $config['max_width']            = 2048;
                $config['max_height']           = 1450;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('image'))
                {
                	
                    $this->session->set_flashdata('error',$this->upload->display_errors());
                    redirect('edit_image');
                    
                }
                else
                {
                        $imageData = $this->upload->data();

                        $imagePath = base_url()."assets/images/profile_image/".$imageData['file_name'];

                        $user_data = array(
							'image'    => $imagePath
						);
					   

						$insert = $this->homeModel->update_user_profile($user_data);

						if ($insert>0) {
							redirect('profile');
						}else{
							redirect('edit_image');
						}
                }
          
	}



	public function edit_password(){
		
	
		$this->form_validation->set_rules('old_pass', 'Old Password', 'trim|required|max_length[150]');
		$this->form_validation->set_rules('new_pass', 'New Password', 'trim|required|max_length[150]');
		$this->form_validation->set_rules('rep_new_pass', 'Repeat Password', 'trim|required|max_length[150]|matches[new_pass]');

		if($this->form_validation->run() == false){

			
		$data['userData'] = $this->homeModel->getUserData();
		$this->load->view('include/header');
		$this->load->view('users/edit_password',$data);
  		$this->load->view('include/footer');
		}else{

			// Update Data
			$data = array(
				'password' => $this->input->post('new_pass'),
				
			);	
			// Check Old {Password}
			$update = $this->homeModel->update_user_profile($data);

			if ($update>0) {
				redirect('profile');
			}else{
				redirect('users/edit_password');
			}
		}
		
	}
	

	
	public function submit_registration(){
		   
             $this->form_validation->set_rules('name','Name','required');
		     $this->form_validation->set_rules('email','Email','required');
		     $this->form_validation->set_rules('phone','Phone','required');
		     $this->form_validation->set_rules('dob','Date Of Birth','required');
		     $this->form_validation->set_rules('location','Location','required');
		     $this->form_validation->set_rules('password','Password','required');
		     $this->form_validation->set_rules('gender','Gender','required');
		     //$this->form_validation->set_rules('image','Image','required');
		     
		    
             if ($this->form_validation->run()==FALSE) {

			   $this->registration();
		     }else{

		     	$config['upload_path']          = './assets/images/profile_image';
                $config['allowed_types']        = 'gif|jpg|png|JPEG';
                $config['max_size']             = 5120;
                $config['max_width']            = 2048;
                $config['max_height']           = 1450;


                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('image'))
                {
                	
                    $this->session->set_flashdata('error',$this->upload->display_errors());
                    redirect('registration');
                    
                }
                else
                {
                        $imageData = $this->upload->data();

                        $imagePath = base_url()."assets/images/profile_image/".$imageData['file_name'];

                        $user_data = array(
							'name'     => $this->input->post('name'),
							'email'    => $this->input->post('email'),
							'phone'    => $this->input->post('phone'),
							'dob'      => $this->input->post('dob'),
							'location' => $this->input->post('location'),
							'password' => sha1($this->input->post('password')),
							'image'    => $imagePath
						);
					   

						$insert = $this->homeModel->reg_submit($user_data);

						if ($insert>0) {
							redirect('login');
						}else{
							redirect('registration');
						}
                }

				
			}
	}


	public function submit_login(){

		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run()==FALSE) {
		   $this->login();
	    }else{
	    	$email     =  $this->input->post('email');
			$password  =  sha1($this->input->post('password')); 

			$login     = $this->homeModel->log_submit($email,$password);

			if (!empty($login)) {
				$this->session->set_userdata('user_id',$login['id']);
				redirect('profile');
			}else{
				$this->login();
			}	
		}

			
    }

    public function create_post(){

    	$event_id = $this->input->post('event_id');

    	$post_text = $this->input->post('post_text');
       	$post_image = $_FILES['post_image'];
       	


    	if ($post_text!='' && $post_image['size']==0) {
    		$post_type = 4;
    	}else if ($post_text=='' && $post_image['size']!=0) {
    		$post_type = 5;
    	}else if ($post_text!='' && $post_image['size']!=0) {
    		$post_type = 6;
    	}

    	if ($post_image['size']!=0) {
    		$config['upload_path']          = './assets/images/post_images';
	        $config['allowed_types']        = 'gif|jpg|png|JPEG';
	        //$config['max_size']             = 5120;
	        //$config['max_width']            = 2048;
	        //$config['max_height']           = 1450;

	        $this->load->library('upload', $config);

	        if (  $this->upload->do_upload('post_image'))
	        {
	        	$imageData = $this->upload->data();
                $imagePath = base_url()."assets/images/post_images/".$imageData['file_name'];
                

	        }
	        else{
	        	$imagePath = "";


	        }
    	} else{
    		$imagePath = " ";


    	}
    	

    	

        $post_data = array(
						 'user_id'    => $this->session->userdata('user_id'),
						 'privacy_id' => '1',
				         'post_text'  => $post_text,
				         'post_image' => $imagePath,
				         'event_id'   => $event_id,
				         'post_type'  => $post_type,      
				         'created_at' => date('Y-m-d H:i:s'),
					);

		$create_post = $this->homeModel->create_post($post_data);
		redirect('community');

		
	}
	}

