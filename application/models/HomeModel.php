<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model {


	public function reg_submit($user_data){
		
		$this->db->insert('users',$user_data);

		$insert_id = $this->db->insert_id();
		
		return $insert_id;
	}


	public function log_submit($email,$password){
		$this->db->select('id');
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$loginQuery = $this->db->get('users');
		

		$loginDataFetch = $loginQuery->row_array();

		return $loginDataFetch;
	}
	
	public function getUserData(){
		$user_id = $this->session->userdata('user_id');

		$this->db->select('*');
		$this->db->where('id',$user_id);
		$userDataQuery = $this->db->get('users');

		$userData = $userDataQuery->row_array();

		return $userData;


	}

	public function getUserCommunityData(){
		$user_id = $this->session->userdata('user_id');

		$this->db->select('*');
		$this->db->where('id',$user_id);
		$userDataQuery = $this->db->get('users');

		$userData = $userDataQuery->row_array();

		return $userData;


	}

	public function getEventData(){

		$user_id = $this->session->userdata('user_id');
		

		$this->db->select('id,event_title,event_desc,event_img_main,created_at');
		$this->db->where('user_id',$user_id);
		$this->db->order_by('id','DESC');
		$userDataQuery = $this->db->get('event_media');

		$data = $userDataQuery->result_array();

		return $data;
	}


	public function getEventDataDetails($id){

		$this->db->select('*');
		$this->db->where('id',$id);
		$userDataQuery = $this->db->get('event_media');

		$eventData = $userDataQuery->result_array();

		return $eventData;


	}
	public function getCommunityEventData(){

		//$user_id = $this->session->userdata('user_id');
		

		$this->db->select('em.*,u.name,u.image');
		$this->db->where('event_type','1');
		$this->db->from('event_media AS em');
		$this->db->join('users AS u','em.user_id=u.id','INNER');
		$this->db->order_by('em.id','DESC');
		$userDataQuery = $this->db->get();

		$eventData = $userDataQuery->result_array();

		return $eventData;


	}


	public function getCommunityPostData(){

		$this->db->select('ep.*,u.name,u.image,em.*');
		$this->db->where('post_delete','0');
		$this->db->from('event_post AS ep');
		$this->db->join('users AS u','ep.user_id=u.id','INNER');
		$this->db->join('event_media AS em','ep.event_id=em.id','INNER');
		$this->db->order_by('ep.id','DESC');
		$userDataQuery = $this->db->get();

		$eventData = $userDataQuery->result_array();

		/*echo "<pre>";
		print_r($eventData);
		die();
*/

		return $eventData;

	}

	public function getCommunityfreeEventData(){

		//$user_id = $this->session->userdata('user_id');
		
        $this->db->where('event_type','0');   
		$this->db->select('em.*,u.name,u.image');
		$this->db->from('event_media AS em');
		$this->db->join('users AS u','em.user_id=u.id','INNER');
		$this->db->order_by('id','DESC');
		$userDataQuery = $this->db->get();

		$freeventData = $userDataQuery->result_array();

		return $freeventData;


	}


	public function update_user_profile($user_data){

		$user_id = $this->session->userdata('user_id');

		$this->db->where('id', $user_id);
		$update = $this->db->update('users', $user_data);

		return $update;
	}



	public function create_userevent($post_data){
		$this->db->insert('event_media',$post_data);
		$insert_id = $this->db->insert_id();
		
		return $insert_id;
	}


	public function create_post($data){
		$this->db->insert('event_post',$data);
		$insert_id = $this->db->insert_id();
		 	




		 	
		
		return $insert_id;
	}

	public function search_submit($event_title,$city,$from_age,$to_age){

		$this->db->like('event_title' ,$event_title);
		$this->db->like('city');
		$this->db->like('from_age');
		$this->db->like('to_age');
		$searchQuery = $this->db->get('event_media');
		$searchData = $searchQuery->row_array();

		return $searchData;
	}

	
	
}
