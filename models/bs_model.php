<?php
class Bs_model extends CI_MODEL{
 
     public function __construct()
     {
       parent::__construct();
       $this->load->database();
    }
    
    public function has_submitted($handle)
    {
	$query = $this->db->get_where('brothers_twitter',array('screen_name'=>$handle));
	$result = $query->result();
	if(count($result) != 0){
	    return true;
	}else{
	    return false;
	}
    }

    public function add_user($screen_name,$picture,$message)
    {
	if(!($this->has_submitted($screen_name))){
	  $userdata = array(
		"screen_name" => $screen_name,
		"picture" => $picture,
		"message" => $message
	  );
	  $this->db->insert('brothers_twitter',$userdata);
        }
    }
    public function fetch_all($currenthandle)
    {
      $query = $this->db->get('brothers_twitter');
      $result = $query->result();
      shuffle($result);
      return $result;
    }
    public function fetch_tweet($handle)
    {
	if($this->has_submitted($handle)){
	    $query = $this->db->get_where('brothers_twitter', array('screen_name' => $handle));
	    $result = $query->result();
	    return $result[0]; 
	}
	else{
	    return "No Submission";
	}
    }

}
